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
    <title>Team Info</title>
    <meta charset = "utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src = "js/jquery-1.11.2.js"></script>
    <script src="js/users.js" ></script>
    <script src="js/infoPageController.js" ></script>
    <link rel="stylesheet" href="css/theBase.css" />
    <link rel='stylesheet' href='css/InfoPage.css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>
  </head>

  <body ng-app="" ng-controller="getUsers">
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


    <div id="maindiv"ng-controller='infoPageController'>

        <ul>
				    <li ng-repeat="x in result">
	                <div id ="theDiv" ng-mousedown='hide=true; hideMe()'ng-hide='hide'><p>{{ x.0 }} - {{x.1}} - {{x.2}} - {{x.3}} - {{x.4}} - {{x.5}}</p></div>
	         </li>
	   </ul>
        
      </div>

  </body>
</html>