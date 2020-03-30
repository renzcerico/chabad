<?php
require __DIR__ . '/twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;

// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $first_name = $_POST['first_name'];

$sms="HI";

$sid = 'AC818c3887c83b40f549a94a095b394ec6';
$token = '8b3fb64858fd9b6c764ed9b812520687';
$client = new Client($sid, $token);
// $client->messages->create(
//     '+639506044101',
//     array(
//         'from' => '+17737966131',
//         'body' => $sms
//     )
// );

try{
	$call = $client -> calls -> create(
		'+639506044101', 
		'+17185718337',
		array("url"=>'http://demo.twilio.com/docs/voice.xml')
	);

	echo "Started call:".$call-$sid;
}
catch (Exception $e) {
	echo "Error:" . $e->getMessage();
}