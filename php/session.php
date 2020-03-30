<?php
session_start();

if(isset($_SESSION['login']) == false) {
	header('location: login.php');	
}

?>