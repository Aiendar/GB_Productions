function messageBoardController($scope, $http){
	var site = "http://localhost";
  	var page = "/xampp/FinalProject/php/getPosts.php";
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

    $scope.submitPost = function(){
      var page = "/xampp/FinalProject/php/newPost.php";

      console.log("I'm getting somewhere.");
      console.log($scope.user.theContent);

      var currentdate = new Date(); 
      var datetime =  currentdate.getDate() + 
                + (currentdate.getMonth()+1)  + 
                + currentdate.getFullYear() + 
                + currentdate.getHours() +  
                + currentdate.getMinutes() +  
                + currentdate.getSeconds();


      data ={
        'theContent' : $scope.user.theContent,
        'theDateTime' : datetime
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
       window.location = 'MessageBoard.php';
    }

    $scope.deletePost = function(item){
      if(item === null){
        window.alert(typeof item);
      }
      var page = "/xampp/FinalProject/php/deletePost.php";

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
         window.location = 'MessageBoard.php';
    }

}