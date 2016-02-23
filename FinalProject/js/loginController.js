function loginController($scope, $http){
	
	//$http.defaults.headers.post["Content-Type"] = 

	$scope.login = function(e){
		

		
		data ={
		"username":$scope.user.username,
		"password":$scope.user.password
		};

		var site = "http://localhost";
		var page = "/xampp/FinalProject/php/loginCheck.php";

		$http.post(site + page, data )
	    .success(function(response, status) {
		      $scope.result = response;
		      $scope.status = status;
		      
		    if($scope.result == 'AccessGranted')
		    {

		    	window.location = site+"/xampp/FinalProject/messageboard.php";
		    }
		    else
		    {
		    	window.alert("Error: Invalid username/password");


		    }
	    })
	    .error(function(data, status) {
	      $scope.data = data || "Request failed";
	      $scope.status = status;
	    });
	}

}