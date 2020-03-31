<?php
require __DIR__ . '/../twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;

$sid = 'AC818c3887c83b40f549a94a095b394ec6';
$token = '8b3fb64858fd9b6c764ed9b812520687';
$twilio = new Client($sid, $token);

$mobile_number = $_POST['mobile_number'];

$service_id = 'VAd35194f4d8baf0b708a71db6149967b0';

$verification = $twilio->verify->v2->services($service_id)
                                   ->verifications
                                   ->create($mobile_number, "sms");
print($verification->status);
?>