<?php
session_start();
include '../model/Twilio.php';
include '../model/Database.php';

$db = new Database();
$db = $db->connection();

$updateMobile = new Twilio($db);

$stmt = $updateMobile->updateMobile($_POST);

echo $stmt;

 ?>
