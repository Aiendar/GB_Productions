function scheduleController($scope, $http){
  var site = "http://localhost";
    var page = "/xampp/FinalProject/php/getSchedule.php";
    var data = {
      "searchtype" : $scope.searchtype,
      "searchtext" : $scope.searchtext
    };
  $http.post(site + page, data )
    .success(function(response, status) {
      $scope.result = response;
      $scope.status = status;
      $scope.day1 = $scope.result[0];
      $scope.day2 = $scope.result[1];
      $scope.day3 = $scope.result[2];
      $scope.day4 = $scope.result[3];
      $scope.day5 = $scope.result[4];
      console.log('scope.result');
      console.log($scope.result);
      console.log('scope.day1');
      console.log($scope.day1);
      
    })
    .error(function(data, status) {
      $scope.data = data || "Request failed";
      $scope.status = status;
      console.log("epic flail");
    });
  $scope.goDay1 = function(item){
    page = "/xampp/FinalProject/php/removeEvent.php";

   

    theDater = $scope.day1.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
  $scope.goDay2 = function(item){
    page = "/xampp/FinalProject/php/removeEvent.php";

   

    theDater = $scope.day2.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
  $scope.goDay3 = function(item){
    page = "/xampp/FinalProject/php/removeEvent.php";

   

    theDater = $scope.day3.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
  $scope.goDay4 = function(item){
    page = "/xampp/FinalProject/php/removeEvent.php";

   

    theDater = $scope.day4.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
  $scope.goDay5 = function(item){
    page = "/xampp/FinalProject/php/removeEvent.php";

   

    theDater = $scope.day5.splice(item, 1);

    console.log(theDater[0][0]);
    console.log(theDater[0][1]);
    data = {
      "thisEvent" : theDater[0][0],
      "thisDate" : theDater[0][1]
    }
    
    $http.post(site + page, data );

  }
}