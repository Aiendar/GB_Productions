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


		<div id = 'maindiv' >
			<p> See Messages from:</p>
			<ul>
				<div id = 'users'>
				<li ng-repeat="x in result" >
                    {{x.0}}
                    <script>
                        function messagesController($scope, $http){
                            var site = "http://localhost";

                            var sessionID = sessionStorage.getItem('sessionID');
                            $scope.submit = function(){
                                var page = "/xampp/FinalProject/php/postMessage.php";
                                var post = $scope.newPost;
                            }
                            $scope.readMessages = function(user){
                                console.log(user);
                                var site = "http://localhost";
                                var page = "/xampp/FinalProject/php/getMessages.php";
                                data = {'user' : user}
                                $http.post(site + page, data )
                                .success(function(response, status) {
                                  $scope.messages = response;
                                  $scope.status = status;
                                  console.log($scope.result);
                                })
                                .error(function(data, status) {
                                  $scope.data = data || "Request failed";
                                  $scope.status = status;
                                  console.log("epic flail");
                                });
                            }

                        }
                    </script>
                    <input type = 'submit' value = 'user'ng-controller = 'messagesController'ng-click = 'readMessages(x.0)'/></input>
	            </li>
	        </div>
	        </ul>
		</div>


	</body>
</html>