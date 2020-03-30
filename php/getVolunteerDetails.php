<?php
include '../model/Database.php';
include '../model/Volunteer.php';

$db = new Database();
$db = $db->connection();

$get = new Volunteer($db);
$get = $get->get($_POST['id']);

echo json_encode($get->fetch(PDO::FETCH_ASSOC))
?>