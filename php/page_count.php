<?php
include '../model/Database.php';
include '../model/Analytics.php';

$db = new Database();
$db = $db->connection();

$page_count = new Analytics($db);
$page_count = $page_count->page_count($_POST);

echo $page_count;
?>