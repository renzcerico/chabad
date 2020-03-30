<?php
include '../model/Database.php';
include '../model/Analytics.php';

$db = new Database();
$db = $db->connection();

$page_view = new Analytics($db);

$ip = strval($_SERVER['REMOTE_ADDR']);

$page_view = $page_view->page_view($_POST, $ip);
$stmt = $page_view;

echo $stmt;
?>