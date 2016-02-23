<?php
 	session_start();
	error_log('I am trying to log out.');
	unset($_SESSION['access']);
	unset($_SESSION['user']);
	unset($_SESSION['isCaptain']);
	header('location:login.php');
?>

