<?php
include '../model/Database.php';
include '../model/AuthorizeAPI.php';
include '../authorize.php';

$db = new Database();
$db = $db->connection();

$secret = new AuthorizeAPI($db);
$secret = $secret->secret();
$result = $secret->fetch(PDO::FETCH_ASSOC);
$amount = 50999;

authorizeCreditCard($amount, $result);
?>