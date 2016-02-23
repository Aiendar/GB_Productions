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
		<link rel = 'stylesheet' href = 'css/schedule.css'/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Schedule</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		
		<script src='js/scheduleController.js'></script>
	</head>
	<body ng-app='' ng-controller='scheduleController'>

		<?php
			if($_SESSION['captain'] == 'yes')
				echo "<a href = 'EventScheduler.php' ><span id='addEventDay1' class = 'addEvent'>New Event</span></a>";

		?>

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
			<div class = 'day' id = 'day1'>
				<ul>
					<li>Day One</li>
					<li class = 'eventsLi'>Events:</li>
					<li ng-repeat = 'x in day1' ng-click="goDay1($index)">
						<span>{{ x.0 }}</span>
		                <span>{{ x.1 }}</span>    
		                <span>{{ x.3 }}</span>   
	            	</li>
	            	
				</ul>
			</div>
			<div class = 'day' id = 'day2'>
				<ul>
					<li>Day Two</li>
					<li class = 'eventsLi'>Events:</li>
					<li ng-repeat = 'x in day2' ng-click="goDay2($index)">
						<span>{{ x.0 }}</span>
		                <span>{{ x.1 }}</span>    
		                <span>{{ x.3 }}</span>   
	            	</li>
				</ul>
			</div>
			<div class = 'day' id = 'day3'>
				<ul>
					<li>Day Three</li>
					<li class = 'eventsLi'>Events:</li>
					<li ng-repeat = 'x in day3' ng-click="goDay3($index)">
						<span>{{ x.0 }}</span>
		                <span>{{ x.1 }}</span>    
		                <span>{{ x.3 }}</span>   
	            	</li>
				</ul>
			</div>
			<div class = 'day' id = 'day4'>
				<ul>
					<li>Day Four</li>
					<li class = 'eventsLi'>Events:</li>
					<li ng-repeat = 'x in day4' ng-click="goDay4($index)">
						<span>{{ x.0 }}</span>
		                <span>{{ x.1 }}</span>    
		                <span>{{ x.3 }}</span>   
	            	</li>
				</ul>
			</div>
			<div class = 'day' id = 'day5'>
				<ul>
					<li>Day Five</li>
					<li class = 'eventsLi'>Events:</li>
					<li ng-repeat = 'x in day5' ng-click="go($index)">
						<span>{{ x.0 }}</span>
		                <span>{{ x.1 }}</span>    
		                <span>{{ x.3 }}</span>   
	            	</li>
				</ul>
			</div>
		</div>
	</body>
</html>