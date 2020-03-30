<?php
require 'vendor/autoload.php';
// require_once 'vendor/constants/SampleCodeConstants.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE", "phplog");

function captureFundsAuthorizedThroughAnotherChannel($amount, $secret) {
    /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    // $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
    // $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);
    $merchantAuthentication->setName($secret['login_id']);
    $merchantAuthentication->setTransactionKey($secret['trans_key']);
    
    // Set the transaction's refId
    $refId = 'ref' . time();

    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber("4111111111111111");
    $creditCard->setExpirationDate("2038-12");

    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);

    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("captureOnlyTransaction");
    $transactionRequestType->setAmount($amount);
    $transactionRequestType->setPayment($paymentOne);

    //Auth code of the previously authorized  amount
    $transactionRequestType->setAuthCode("ROHNFQ");

    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setTransactionRequest( $transactionRequestType);

    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

    if ($response != null)
    {
      if($response->getMessages()->getResultCode() == "Ok")
      {
        $tresponse = $response->getTransactionResponse();
        
	      if ($tresponse != null && $tresponse->getMessages() != null)   
        {
          echo " Transaction Response code : " . $tresponse->getResponseCode() . "<br />";
          echo "Successful." . "<br />";
          echo "Capture funds authorized through another channel TRANS ID  : " . $tresponse->getTransId() . " Amount : $amount <br />";
          echo " Code : " . $tresponse->getMessages()[0]->getCode() . "<br />"; 
          echo " Description : " . $tresponse->getMessages()[0]->getDescription() . "<br />";
        }
        else
        {
          echo "Transaction Failed " . "<br />";
          if($tresponse->getErrors() != null)
          {
            echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "<br />";
            echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "<br />";            
          }
        }
      }
      else
      {
        echo "Transaction Failed " . "<br />";
        $tresponse = $response->getTransactionResponse();
        if($tresponse != null && $tresponse->getErrors() != null)
        {
          echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "<br />";
          echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "<br />";                      
        }
        else
        {
          echo " Error code  : " . $response->getMessages()->getMessage()[0]->getCode() . "<br />";
          echo " Error message : " . $response->getMessages()->getMessage()[0]->getText() . "<br />";
        }
      }      
    }
    else
    {
      echo  "No response returned " . "<br />";
    }

    return $response;
}
// if(!defined('DONT_RUN_SAMPLES'))
    // captureFundsAuthorizedThroughAnotherChannel((rand(1, 999)/12*12));
?>