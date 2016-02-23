function messagesController($scope, $http){
	var site = "http://localhost";
	
	var sessionID = sessionStorage.getItem('sessionID');
	$scope.submit = function(){
		var page = "/xampp/FinalProject/php/postMessage.php";
		var post = $scope.newPost;
	}
}