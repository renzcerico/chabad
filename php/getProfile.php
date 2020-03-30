<?php
session_start();
include '../model/Database.php';
include '../model/Accounts.php';

$db = new Database();
$db = $db->connection();

$login = new Accounts($db);
$stmt = $login->getProfile($_SESSION['user_id']);

echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
?>