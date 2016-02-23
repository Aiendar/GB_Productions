<?php 
	session_start();
	$user = $_GET["user"]; 
?>
<html>		
	
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src = "js/jquery-1.11.2.js"></script>
		<script src="js/Controler.js" ></script>
		<link rel = "stylesheet" href = "css/theBase.css">
		<link rel = "stylesheet" href = "css/messy.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<body ng-app="" data-ng-controller="getControler">
	<header>
			<ul>
				<li><a href = 'index.php' id = 'first'><div id = 'logolink' class = 'container'><img src = "img/newlogo.png"/></div></a></li>
				<a href = "messageboard.php"><li>Message Board</li></a>
				<a href = "Schedule.php"><li>Schedule</li></a>
				<a href = "PrivateMessages.php"><li>Private Messages</li></a>
				<a href = "InfoPage.php"><li>Info Page</li></a>
				<a href = "Logout.php"><li>Logout</li></a>
				<li/>
			</ul>
		</header>


		



		<div id = 'maindiv'>
			<div id = 'to'><?php echo $user; ?></div><div id = 'from'>You</div>
			<ul>
				
				<li ng-repeat="x in result" id = "{{ x.2 }}">
					<div id = '{{ x.2 }}'>
	                <span>"{{ x.0 }}" <br>at: {{ x.1 }}</span>
	            </div>
	            </li>
	        
	        </ul>
		</div>
	</body>
</html>