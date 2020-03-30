<?php
include '../model/Database.php';
include '../model/Family.php';

$db = new Database();
$db = $db->connection();

$insert = new Family($db);

$insert = $insert->insert($_POST);
$stmt = $insert;

echo $stmt;
?>