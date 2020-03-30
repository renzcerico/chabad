<?php
include '../model/Database.php';
include '../model/AuthorizeAPI.php';

$db = new Database();
$db = $db->connection();

$secret = new AuthorizeAPI($db);
$secret = $secret->update($_POST);

echo 200;
?>