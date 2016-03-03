function homeController($scope, $http){
	var site = "http://localhost";
    var page = "/xampp/FinalProject/php/capMessage.php"
    var data = 'dater';
	 $http.post(site + page, data )
      .success(function(response, status) {
        $scope.result = response;
        $scope.status = status;
      })
      .error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
      });



      $scope.submitBulletin = function(){
      var page = "/xampp/FinalProject/php/submitBulletin.php";

      console.log("I'm getting somewhere.");
      console.log($scope.user.theContent);
 

        data ={
          'theContent' : $scope.user.theContent
       }

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
       window.location = 'index.php';
    }
    $scope.deletePost = function(item){
      if(item === null){
        window.alert(typeof item);
      }
      var page = "/xampp/FinalProject/php/deleteCapMessage.php";

      console.log(item);
        data ={
          'theContent' : item,
        }

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
         window.location = 'index.php';
    }
      
      /*

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
      });*/
}