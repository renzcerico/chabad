<?php
include '../model/Database.php';
include '../model/Donation.php';

$db = new Database();
$db = $db->connection();

$get = new Donation($db);
$get = $get->getAll();

echo json_encode($get->fetchAll(PDO::FETCH_ASSOC))
?>