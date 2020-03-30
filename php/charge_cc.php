<?php
include '../model/Database.php';
include '../model/AuthorizeAPI.php';
include '../charge.php';

$db = new Database();
$db = $db->connection();

$secret = new AuthorizeAPI($db);
$secret = $secret->secret();
$result = $secret->fetch(PDO::FETCH_ASSOC);
// $amount = 50999;

chargeCreditCard($_POST, $result);
// echo json_encode($_POST);
// echo 201
?>