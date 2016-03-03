function privateMessageController($scope, $http){
  angular.module('myApplication', ['infinite-scroll']);
	var site = "http://localhost";
  var page = "/xampp/FinalProject/php/users.php";
  data = "the dater";
  userSelected = '';
  console.log("running");



  $scope.getUsers= function(){
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

  $scope.getStyle = function(user){
    if(userSelected == user)
      return {'float' : 'right', 'margin-right' : '10px' };
  }

  $scope.hideMe = function(item){
    $scope.hideThis = item;
    console.log('hide me');
    console.log(item);
  }
    
  $scope.userSelect = function(user){
    userSelected = user;
  }

  $scope.getMessages = function(){
        var page = "/xampp/FinalProject/php/getMessages.php";
    $scope.user = userSelected;
    data = {'theUser' : userSelected};

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

 


    $scope.sendMessage = function(){
      var page = "/xampp/FinalProject/php/sendMessage.php";

      console.log("Send message standing bye.");
      console.log($scope.newMessage);
      console.log(userSelected);




      data ={
        'theContent' : $scope.newMessage,
        'theUser' : userSelected
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
       //window.location = 'PrivateMessages.php';
    }



   
}