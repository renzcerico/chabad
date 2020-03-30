<?php
session_start();
include '../model/Database.php';
include '../model/Donation.php';

$db = new Database();
$db = $db->connection();

$login = new Donation($db);
$stmt = $login->paymentAcceptType();

echo $stmt;
?>