<?php
  session_start();
  if(isset($_SESSION['access'])){
    if($_SESSION['access'] == 'yes'){}
    else{
      header( 'Location: http://localhost/xampp/FinalProject/login.php' ) ;
    }
  }
  else{
     header(  'Location: http://localhost/xampp/FinalProject/login.php'  ) ;
  }
?>

<html>
	<head>
		<meta charset = "utf-8">
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src = "js/jquery-1.11.2.js"></script>
		<script src="js/privateMessageController.js"></script>
		<link rel = "stylesheet" href = "css/theBase.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" href = "css/PrivateMessages.css">
	</head>
	<body ng-app="" ng-controller = "privateMessageController" ng-init = 'getUsers(); myStyle = {"border-color" : "blue"}'>
		<header>
			<ul>
				<li><a href = 'index.php' id = 'first'><div id = 'logolink' class = 'container'><img src = "img/newlogo.png"/></div></a></li>
				<a href = "messageboard.php"><li>Message Board</li></a>
				<a href = "Schedule.php"><li>Schedule</li></a>
				<a href = "PrivateMessages.php"><li>Private Messages</li></a>
				<a href = "InfoPage.php"><li>Info Page</li></a>
				<a href = "Logout.php"><li>Logout</li></a>
			</ul>
		</header>
		<div id = 'maindiv' >
			<div id = 'userList'>
				<p> </p>

				<ul class = 'users'>
					
					
						<div class = 'users' id = 'usersButton' ng-repeat = "x in result" ng-if = 'user != x.0'
						 ng-click = 'userSelected = x.0; userSelect(userSelected); getMessages(userSelected)' ng-mouseup = 'hide = true'>
							
			                	<span>{{x.0}}</span>
			            
		            	</div>
		            
		        	
		        </ul>
		    </div>
	        <div id = 'messages'>
	        <span>{{user}}</span>

	        	<ul  id ='messageList'>
	        		<div ng-repeat = "y in messages" class = 'message' ng-style = 'getStyle(y.0)' >
	        		{{y.0}}:
	        		{{y.1}}
	        		</div>
	        	</ul>
	        	<div id ='textBox'>
		        	<form>
		        		<textarea ng-model = 'newMessage' id = 'newMessage' placeholder = 'New Message...'></textarea>
		        		<input type = 'submit' value = 'Send' ng-click='sendMessage(); getMessages(); newMessage = ""'></input>

		        	</form>
	        	</div>
	        </div>
	        <p></p>

		</div>


	</body>
</html>