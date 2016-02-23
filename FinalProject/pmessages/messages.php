<!DOCTYPE html>
<html>		
	<?php 
	$user = $_GET["user"]; ?>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src = "js/jquery-1.11.2.js"></script>
		<script src="js/Controler.js" ></script>
		<link rel = "stylesheet" href = "css/theBase.css">
		<link rel = "stylesheet" href = "css/messy.css">
	<body ng-app="" data-ng-controller="getControler">
	<header>
      <ul>
        <li><a href = 'index.php' id = 'first'><div id = 'logolink' class = 'container'><img src = "img/newlogo.png"/></div></a></li>
        <a href = "http:\\www.google.com"><li>Message Board</li></a>
        <a href = "Schedule.php"><li>Schedule</li></a>
        <a href = "http:\\www.google.com"><li>Private Messages</li></a>
        <a href = "http:\\www.google.com"><li>Info Page</li></a>
        <a href = "http:\\www.google.com"><li>Replays</li></a>
        <a href = "http:\\google.com"><li>Options</li></a>
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