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
		<link rel = 'stylesheet' href = 'css/theBase.css'/>
		<link rel = 'stylesheet' href = 'css/home.css'/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Golan Brothers</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src='js/jquery-1.11.2.js'></script>
		<script src='js/NewPost.js'></script>
		<script src='js/homeController.js'></script>

	</head>
	<body ng-app="" ng-controller="homeController">

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

		<script type="text/javascript">




		</script>


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
				<div id = 'theText'><ul class = 'bulletinList'>
					<li ng-repeat = 'x in result' class ='bulletinList' >

						

						<div  id = 'message'>
							<p id = 'thePoster'> {{ x.2 }} </p>
							<span id = 'content'> {{ x.1 }} </span>	
							<p id = 'theDate'> {{ x.3 }} </p>
						<p></p>
						<div>
							<?php if ($_SESSION['captain'] == 'yes') echo"<input type = 'submit' value = 'Delete' ng-click = deletePost(x.0)>" ?>
						</div>
						</div>
					</li>
				</ul></div>
				
				<form>
					<textarea ng-model = 'user.theContent' name = 'bulletin'></textarea>
					<input type = 'submit' value = 'Submit' ng-click = 'submitBulletin()'>
				</form>
			</div>
		</div>
	</body>
</html>