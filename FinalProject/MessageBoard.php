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
		<link rel = 'stylesheet' href = 'css/MessageBoard.css'/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<title>Message Board</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src='js/jquery-1.11.2.js'></script>
		<script src='js/NewPost.js'></script>
		<script src='js/messageBoardController.js'></script>
		<script src='js/CommentController.js'></script>
		<script src='js/ngInfiniteScroll.js'></script>
		<script src='js/myApp.js'></script>
	</head>
	<body ng-app='' ng-controller='messageBoardController'ng-init='myValue=false; myValue2 = true; getPosts(); myValue3 = true; myValue4 = true'>

		<!--Independant header -->
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
			<div id = 'messageStream'>
				<div id = 'newPost'>
					<form>
						<textarea id = 'postArea' ng-model = 'user.theContent' placeholder = 'New post...'name = 'post' ng-mousedown='hideMe(); myStyle={height: "250px"}; myValue3 = false' ng-style='myStyle'></textarea><br>
						<input type = 'submit' value ='Submit' ng-click = 'submitPost()'>
						<input type = 'submit' value ='Cancel' id = 'cancel' ng-hide = 'myValue3' ng-click = 'myStyle = {}; myValue3 = true; user.theContent = ""'>
					</form>
				</div>
								<ul>
					<li ng-repeat = 'x in result' ><div id ='message'>
					<?php if ($_SESSION['captain'] == 'yes') echo"<input type = 'submit' value = 'Delete' ng-click = deletePost(x.0)>" ?>
						<p id = 'thePoster'> {{ x.3 }} </p>
                        

						<div  id = 'MessageContain'>
							<div id = 'theDate'> {{ x.2 }} </div>
							<span id = 'content'> {{ x.1 }} </span>
						    
						</div>

						<div id = 'commentDiv' ng-controller = "commentController" >


						

							<div id = "comments" ng-repeat = 'y in comments' ng-hide='myValue2'>
                                <div id = 'commenter'>{{y.4}} </div>
								<div id = 'commentCont'>{{y.2}}</div>
                                <div id = 'commentInfo'>{{y.3}}</div>
							</div>

							<div>
								<textarea ng-model  = "user.comment" ng-mousedown='hideMe(); myStyle2={height: "250px"}; myValue4 = false' ng-style='myStyle2'></textarea>
   								<input type="submit" value = 'Submit'  ng-click = 'submitComment(x.0)'></input>
   								<input type = 'submit' value ='Cancel' id = 'cancel' ng-hide = 'myValue4' ng-click = 'myStyle2 = {}; myValue4 = true; user.comment = ""'>
   								<input type ='submit' value = 'Show Comments'  ng-click = 'myValue= true; getComments(x.0); myValue2 = false' ng-hide='myValue'/>
   								<input type = 'submit' value = 'Hide Comments' ng-click = 'myValue=false; myValue2 = true' ng-hide = 'myValue2' />

							</div>  
						</div>

					</div></li>
				</ul>
				<div align = 'center'>
					<input type="submit" value='More Posts' ng-click = 'getPosts()'>
				</div>
			</div>

		</div>
</html>