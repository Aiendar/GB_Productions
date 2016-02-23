function scheduleController($scope, $http){
	var site = "http://localhost";
  	var page = "/xampp/FinalProject/EventScheduler/getStored.php";
	data = "the dater";
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
    page = "/xampp/FinalProject/EventScheduler/removeEvent.php";

   

    theDater = $scope.result.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
}