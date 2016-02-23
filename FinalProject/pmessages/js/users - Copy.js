function getUsers($scope, $http){
	var site = "http://localhost";
  	var page = "/xampp/FinalProject/pmessages/users.php";
	data = "the dater";
  console.log("running");
	$http.post(site + page, data )
    .success(function(response, status) {
      $scope.result = response;
      $scope.status = status;
      console.log($scope.result);
    })
    .error(function(data, status) {
      $scope.data = data || "Request failed";
      $scope.status = status;
      console.log("epic flail");
    });
  $scope.go = function(item){
    page = "/xampp/FinalProject/pmessages/messages.php";

   

    theDater = $scope.result.splice(item, 1);

    console.log(theDater[0][0]);
    data = {
      "User" : theDater[0][0],
    }
    
    $http.post(site + page, data );

  }
}