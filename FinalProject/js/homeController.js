function homeController($scope, $http){
	var site = "http://localhost";
    var page = "/xampp/FinalProject/php/capMessage.php"
	 $http.post(site + page, data )
      .success(function(response, status) {
        $scope.result = response;
        $scope.status = status;
      })
      .error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
      });
      window.addEventListener("beforeunload", function (e) {
      function exitController($scope, $http)
      {
        $http.post("http://localhost"+"/xampp/FinalProject/php/logout.php");
      }
      $scope.logout = function(){
        window.alert('you are leaving me :====(');
        page = "/xampp/FinalProject/php/logout.php";
        $http.post(site + page, 'no data' );
      }
      $scope.on('$destroy', function(){ 
        window.alert('you are leaving me :====(');
        page = "/xampp/FinalProject/php/logout.php";
        $http.post(site + page, 'no data' );
      });
}