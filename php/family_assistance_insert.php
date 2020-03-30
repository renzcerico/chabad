<?php
include '../model/Database.php';
include '../model/Family.php';

$db = new Database();
$db = $db->connection();

$insert = new Family($db);

$insert = $insert->familyAssistance($_POST);
echo $insert;
?>