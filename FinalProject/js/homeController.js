function homeController($scope, $http){
	var site = "http://localhost";
 $scope.result;
  $scope.currentPost = 0; 
  $scope.insert;
  $scope.getBulletins = function(){
    var page = "/xampp/FinalProject/php/capMessage.php"
    var data = 'dater';
	 $http.post(site + page, data )
      .success(function(response, status) {
        response[0].push(0);
        response[1].push(1);
        response[2].push(2);
        response[3].push(3);
        response[4].push(4);
        console.log(response);
        $scope.result = response;
        $scope.insert = $scope.result[$scope.currentPost];
        $scope.status = status;
      })
      .error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
      });

  $scope.updateCurrentPost = function(postID){
    console.log('Greetings', postID, $scope.result[postID]);
    $scope.currentPost = postID;
    $scope.insert = $scope.result[postID];
  }
  


    }



      $scope.submitBulletin = function(){
      var page = "/xampp/FinalProject/php/submitBulletin.php";

      console.log("I'm getting somewhere.");
      console.log($scope.user.theContent, $scope.theTitle);
 

        data ={
          'theContent' : $scope.user.theContent,
          'theTitle' : $scope.theTitle
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
          'theContent' : $scope.result[$scope.currentPost][0],
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

}