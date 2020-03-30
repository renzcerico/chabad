<?php
session_start();
include '../model/Database.php';
include '../model/Accounts.php';

$db = new Database();
$db = $db->connection();

$login = new Accounts($db);
$stmt = $login->changePassword($_POST, $_SESSION['user_id']);

echo $stmt;
?>