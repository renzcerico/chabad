<?php
  require 'vendor/autoload.php';
//   require_once 'vendor/constants/SampleCodeConstants.php';
  use net\authorize\api\contract\v1 as AnetAPI;
  use net\authorize\api\controller as AnetController;

  define("AUTHORIZENET_LOG_FILE", "phplog");

function authorizeCreditCard($amount, $secret) {
    /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    // $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
    // $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);
    $merchantAuthentication->setName($secret['login_id']);
    $merchantAuthentication->setTransactionKey($secret['trans_key']);
    
    // Set the transaction's refId
    $refId = 'ref' . time();

    // Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber("4111111111111111");
    $creditCard->setExpirationDate("2038-12");
    $creditCard->setCardCode("123");

    // Add the payment data to a paymentType object
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);

    // Create order information
    $order = new AnetAPI\OrderType();
    $order->setInvoiceNumber("10101");
    $order->setDescription("Golf Shirts");

    // Set the customer's Bill To address
    $customerAddress = new AnetAPI\CustomerAddressType();
    $customerAddress->setFirstName("Ellen");
    $customerAddress->setLastName("Johnson");
    $customerAddress->setCompany("Souveniropolis");
    $customerAddress->setAddress("14 Main Street");
    $customerAddress->setCity("Pecan Springs");
    $customerAddress->setState("TX");
    $customerAddress->setZip("44628");
    $customerAddress->setCountry("USA");

    // Set the customer's identifying information
    $customerData = new AnetAPI\CustomerDataType();
    $customerData->setType("individual");
    $customerData->setId("99999456654");
    $customerData->setEmail("EllenJohnson@example.com");

    // Add values for transaction settings
    $duplicateWindowSetting = new AnetAPI\SettingType();
    $duplicateWindowSetting->setSettingName("duplicateWindow");
    $duplicateWindowSetting->setSettingValue("60");

    // Add some merchant defined fields. These fields won't be stored with the transaction,
    // but will be echoed back in the response.
    $merchantDefinedField1 = new AnetAPI\UserFieldType();
    $merchantDefinedField1->setName("customerLoyaltyNum");
    $merchantDefinedField1->setValue("1128836273");

    $merchantDefinedField2 = new AnetAPI\UserFieldType();
    $merchantDefinedField2->setName("favoriteColor");
    $merchantDefinedField2->setValue("blue");

    // Create a TransactionRequestType object and add the previous objects to it
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authOnlyTransaction"); 
    $transactionRequestType->setAmount($amount);
    $transactionRequestType->setOrder($order);
    $transactionRequestType->setPayment($paymentOne);
    $transactionRequestType->setBillTo($customerAddress);
    $transactionRequestType->setCustomer($customerData);
    $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
    $transactionRequestType->addToUserFields($merchantDefinedField1);
    $transactionRequestType->addToUserFields($merchantDefinedField2);

    // Assemble the complete transaction request
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId($refId);
    $request->setTransactionRequest($transactionRequestType);

    // Create the controller and get the response
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);


    if ($response != null) {
        // Check to see if the API request was successfully received and acted upon
        if ($response->getMessages()->getResultCode() == "Ok") {
            // Since the API request was successful, look for a transaction response
            // and parse it to display the results of authorizing the card
            $tresponse = $response->getTransactionResponse();
        
            if ($tresponse != null && $tresponse->getMessages() != null) {
                echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "<br />";
                echo " Transaction Response Code: " . $tresponse->getResponseCode() . "<br />";
                echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "<br />";
                echo " Auth Code: " . $tresponse->getAuthCode() . "<br />";
                echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "<br />";
            } else {
                echo "Transaction Failed " . "<br />";
                if ($tresponse->getErrors() != null) {
                    echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "<br />";
                    echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "<br />";
                }
            }
            // Or, print errors if the API request wasn't successful
        } else {
            echo "Transaction Failed " . "<br />";
            $tresponse = $response->getTransactionResponse();
        
            if ($tresponse != null && $tresponse->getErrors() != null) {
                echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "<br />";
                echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "<br />";
            } else {
                echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "<br />";
                echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "<br />";
            }
        }      
    } else {
        echo  "No response returned " . "<br />";
    }

    return $response;
}

// if (!defined('DONT_RUN_SAMPLES')) {
//     authorizeCreditCard("2.23");
// }
?>