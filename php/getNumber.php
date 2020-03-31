<?php
session_start();
include '../model/Database.php';
include '../model/Twilio.php';

$db = new Database();
$db = $db->connection();

$number = new Twilio($db);
$number = $number->verify();

echo json_encode($number->fetch(PDO::FETCH_ASSOC));
?>