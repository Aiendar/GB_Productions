<?php 
	error_log('I am trying to log out.');
	session_start();
	session_unset();
	session_destroy();
?>