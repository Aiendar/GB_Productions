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
	</head>
	<body ng-app='' ng-controller='messageBoardController'>

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
			<div id = 'messageStream'>
				<div id = 'newPost'>
					<form>
						<textarea ng-model = 'user.theContent' placeholder = 'New post...'name = 'post'></textarea><br>
						<input type = 'submit' value ='Submit' ng-click = 'submitPost()'>
						<input type = 'submit' value ='Cancel' id = 'cancel'>
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




						<div>
							<ul >
								<li><span></span></li>
							</ul>
						</div>


						<div id = 'commentDiv' ng-controller = "commentController" >
							
							<script>
								function commentController($scope, $http){
									var currentdate = new Date();
									var datetime =  currentdate.getDate() + 
                					+ (currentdate.getMonth()+1)  + 
               						+ currentdate.getFullYear() + 
                					+ currentdate.getHours() +  
               						+ currentdate.getMinutes() +  
                					+ currentdate.getSeconds();

                					var site = "http://localhost";
                					

                					$scope.getComments = function(postID){
                						var page = "/xampp/FinalProject/php/getComments.php";
                						console.log('getComments reporting for duty', postID);
                						data = {'postID' : postID};
                						$http.post(site + page, data )
		    							.success(function(response, status) {
		      								$scope.comments = response;
		      								$scope.status = status;
		      								console.log($scope.result);
		    							})
		    							.error(function(data, status) {
		        							$scope.data = data || "Request failed";
		      								$scope.status = status;
		      								console.log("epic flail");
		    							});
		    						}

									$scope.submitComment = function(postID){
										var page = "/xampp/FinalProject/php/submitComment.php";
	      								data = {
	      									'comment' : $scope.user.comment,
	      									'postID' : postID,
	      									'date' : datetime
	      								}
	      								console.log($scope.user.comment);
	      								console.log(postID);

	      								$http.post(site + page, data )
        									.success(function(response, status) {
          									$scope.theResult = response;
            								$scope.status = status;
          									console.log($scope.theResult);
     									 })
      									.error(function(data, status) {
        									$scope.data = data || "Request failed";
        									$scope.status = status;
        									console.log("epic flail 2");
     									});
       									window.location = 'MessageBoard.php';



	      							}
								}
							</script>

							<div id = "comments" ng-repeat = 'y in comments' >
                                <div id = 'commenter'>{{y.4}} </div>
								<div id = 'commentCont'>{{y.2}}</div>
                                <div id = 'commentInfo'>{{y.3}}</div>
							</div>

							<div>
								<textarea ng-model  = "user.comment"></textarea>
   								<input type="submit" value = 'Submit'  ng-click = 'submitComment(x.0)'></input>
   								<input type ='submit' value = 'Show Comments' ng-click = 'getComments(x.0)'/>

							</div>  
						</div>

					</div></li>
				</ul>
			</div>

		</div>
</html>