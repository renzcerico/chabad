<?php
session_start();
include '../model/Database.php';
include '../model/Accounts.php';

$db = new Database();
$db = $db->connection();

$login = new Accounts($db);
$stmt = $login->login($_POST);

if ($stmt == false) {
	$_SESSION['login'] = false;
	header('location: ../admin/login.php');
} else {
	extract($stmt);
	$_SESSION['user_id'] = $id;
	$_SESSION['user_data'] = json_encode($stmt);
	$_SESSION['login'] = true;
	header('location: ../admin/credit_card.php');
}
?>