function getControler($scope, $http){
	var site = "http://localhost";
  	var page = "/xampp/FinalProject/pmessages/run.php";
        $url = document.URL;
    $user = $url.substr($url.indexOf("=") + 1);
	data = {"user":$user};
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


}
