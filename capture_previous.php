<?php
 require 'vendor/autoload.php';
//  require_once 'vendor/constants/SampleCodeConstants.php';
 use net\authorize\api\contract\v1 as AnetAPI;
 use net\authorize\api\controller as AnetController;

 define("AUTHORIZENET_LOG_FILE", "phplog");

 function capturePreviouslyAuthorizedAmount($transactionid, $secret) {
    /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    // $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
    // $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);
    $merchantAuthentication->setName($secret['login_id']);
    $merchantAuthentication->setTransactionKey($secret['trans_key']);
    
    // Set the transaction's refId
    $refId = 'ref' . time();

    // Now capture the previously authorized  amount
    echo "Capturing the Authorization with transaction ID : " . $transactionid . "\n";
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("priorAuthCaptureTransaction");
    $transactionRequestType->setRefTransId($transactionid);

    
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
            echo "Capture Previously Authorized Amount, Trans ID : " . $tresponse->getRefTransId() . "<br />";
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
//  if(!defined('DONT_RUN_SAMPLES'))
    // capturePreviouslyAuthorizedAmount(60007076002);
?>