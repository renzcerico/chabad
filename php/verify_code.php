<?php
include '../model/Twilio.php';
include '../model/Database.php';

require __DIR__ . '/../twilio-php-master/src/Twilio/autoload.php';
use Twilio\Rest\Client;

$db = new Database();
$db = $db->connection();

$verify = new Twilio($db);

$stmt = $verify->verify();
$row = $stmt->fetch();

$mobile_number = $row['mobile_number'];
$verification = $_POST['verification'];

$sid = 'AC818c3887c83b40f549a94a095b394ec6';
$token = '8b3fb64858fd9b6c764ed9b812520687';

$twilio = new Client($sid, $token);
$service_id = 'VAd35194f4d8baf0b708a71db6149967b0';

$verification_check = $twilio->verify->v2->services($service_id)
                                         ->verificationChecks
                                         ->create($verification, // code
                                                  array("to" => $mobile_number)
                                         );

print($verification_check->status);

?>