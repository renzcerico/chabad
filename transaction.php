<?php
require 'vendor/autoload.php'; 
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE","phplog");

function transaction($secret) {
// Common setup for API credentials  
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();   
    $merchantAuthentication->setName($secret['login_id']); // API LOGIN ID   
    $merchantAuthentication->setTransactionKey($secret['trans_key']); // Transaction key   
    $refId = 'ref' . time();

// Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber("4111111111111111" );  
    $creditCard->setExpirationDate( "2038-12");
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);

// Create a transaction
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authCaptureTransaction");   
    $transactionRequestType->setAmount(151.51);
    $transactionRequestType->setPayment($paymentOne);
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId( $refId);
    $request->setTransactionRequest($transactionRequestType);
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);   

if ($response != null) {
    $tresponse = $response->getTransactionResponse();
    if (($tresponse != null) && ($tresponse->getResponseCode() == "1")) {
    echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "<br />";
    echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "<br />";
    } else {
    echo "Charge Credit Card ERROR :  Invalid response";
    }
} else {
  echo  "Charge Credit Card Null response returned";
}
}
?>