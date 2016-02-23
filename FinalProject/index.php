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
		<link rel = 'stylesheet' href = 'css/home.css'/>
		<link rel = 'stylesheet' href = 'css/theBase.css'/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Golan Brothers</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script> 

		</script>
	</head>
	<body ng-app="" ng-controller="homeController"  ng-onbeforeunload="logout()">

		<!--Independant header -->
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
			<div id = 'oldPosts'>
				<ul>
					<li >
						<div class = 'oldPostItem'>
							text
						</div>
					</li>
					<li >
						<div class = 'oldPostItem'>
							text
						</div>
					</li>
					<li >
						<div class = 'oldPostItem'>
							text
						</div>
					</li>
					<li >
						<div class = 'oldPostItem'>
							text
						</div>
					</li>
				</ul>
			</div>
			<div id = 'currentPost'>
				<div id = 'theText'>text</div>
				
				<form>
					<textarea></textarea>
					<input type = 'submit' value = 'Submit'>
				</form>
			</div>
		</div>
	</body>
</html>