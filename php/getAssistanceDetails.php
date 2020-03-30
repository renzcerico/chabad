<?php
include '../model/Database.php';
include '../model/Family.php';

$db = new Database();
$db = $db->connection();

$get = new Family($db);
$get = $get->getById($_POST['id']);

echo json_encode($get);
?>