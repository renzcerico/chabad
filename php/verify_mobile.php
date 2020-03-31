<?php
include '../model/Twilio.php';
include '../model/Database.php';

$db = new Database();
$db = $db->connection();

$verify = new Twilio($db);

$stmt = $verify->verify($_POST);

echo $stmt;

?>