<?php
include '../model/Database.php';
include '../model/Volunteer.php';

$db = new Database();
$db = $db->connection();

$get = new Volunteer($db);
$get = $get->getAll();

echo json_encode($get->fetchAll(PDO::FETCH_ASSOC))
?>