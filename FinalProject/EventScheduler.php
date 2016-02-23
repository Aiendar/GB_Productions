
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel = "stylesheet" href = "css/theBase.css">
		<link rel = "stylesheet" href = "css/eventScheduler.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Event Scheduler</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src = "js/jquery-1.11.2.js"></script>
		<script src="js/getStoredController.js" ></script>
	</head>
	<body ng-app="" data-ng-controller="getStoredController">


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
			<div id = 'container'>
				<!--<table>-->
	        	<!--</table>-->
				<div id = 'main'>
			    	<form id = 'event' method = 'post' action = 'php/store.php'>
			        <input type = 'text' name = 'event' id = 'event' class = 'input' placeholder = 'Event...'>
			        <br>
			        <input type = 'datetime-local' name ='date' id = 'date' class = 'input' placeholder = 'Date...'>
			        <br>
			        <textarea name = "eventDesc"></textarea>
			        <input type = 'submit' id = 'Submit' value = 'Submit' class = 'input'>
			    	</form>

		    	</div>
	   		</div>
   		</div>
		<script src = "js/removeEvent.js"></script>
	</body>
</html>