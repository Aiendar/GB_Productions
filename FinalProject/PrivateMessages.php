<!DOCTYPE html>
<html>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src = "js/jquery-1.11.2.js"></script>
		<script src="js/users.js" ></script>
		<link rel = "stylesheet" href = "css/theBase.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" href = "css/PrivateMessages.css">
	<body ng-app="" data-ng-controller="getUsers">
		<header>
			<ul>
				<li><a href = 'messageboard.php' id = 'first'><div id = 'logolink' class = 'container'><img src = "img/newlogo.png"/></div></a></li>
				<a href = "messageboard.php"><li>Message Board</li></a>
				<a href = "Schedule.php"><li>Schedule</li></a>
				<a href = "PrivateMessages.php"><li>Private Messages</li></a>
				<a href = "InfoPage.php"><li>Info Page</li></a>
				<a href = "Logout.php"><li>Logout</li></a>
				<li/>
			</ul>
		</header>


		<div id = 'maindiv'>
			<p> See Messages from:</p>
			<ul>
				<div id = 'users'>
				<li ng-repeat="x in result" ng-click="go($index)">
	                <span><a href = "MessageStream.php?user={{x.0}}">{{ x.0 }}</a></span>
	            </li>
	        </div>
	        </ul>
		</div>


	</body>
</html>