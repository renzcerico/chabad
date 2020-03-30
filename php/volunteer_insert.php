<?php
include '../model/Database.php';
include '../model/Volunteer.php';

$db = new Database();
$db = $db->connection();

$insert = new Volunteer($db);

$insert = $insert->insert($_POST);
$stmt = $insert;

echo $stmt;
?>