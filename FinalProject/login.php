<!DOCTYPE html>
<?php
session_start();

?>
<html>
	<head>
		<meta charset = 'utf-8'>
		<link rel = 'stylesheet' href = 'css/theBase.css'/>
		<link rel = 'stylesheet' href = 'css/login.css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Login</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src ="js/loginController.js"></script>
	</head>
	<body >
		<header>
			<li><a id = 'first'><div id = 'logolink' class = 'container'><img src = "img/newlogo.png"/></div></a></li>
		</header>
		<div id = 'maindiv'>
			<div id = 'loginBox' ng-app="" data-ng-controller="loginController">
				<br>
				<br><br>
			<form method = 'post'>
				Username: <input type = 'text' name = 'username' ng-model = 'user.username'><br>
				Password: <input type = 'password' name = 'password' ng-model = 'user.password'><br>
				<input type = 'submit' value ='Submit' ng-click = 'login()'><br>
			</form>
			</div>
		</div>
	</body>
</html>