<?php
include '../model/Database.php';
include '../model/Family.php';

$db = new Database();
$db = $db->connection();

$get = new Family($db);
$get = $get->getAssistance();

echo json_encode($get->fetchAll(PDO::FETCH_ASSOC))
?>