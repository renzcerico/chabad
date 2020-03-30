<?php
require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sms = $first_name. " ". $last_name."have sent an application to volunteer" ;

$sid = 'AC818c3887c83b40f549a94a095b394ec6';
$token = '8b3fb64858fd9b6c764ed9b812520687';
$client = new Client($sid, $token);
$client->messages->create(
    '+17188778448',
    array(
        'from' => '+17185718337',
        'body' => $sms
    )
);

echo $sms;