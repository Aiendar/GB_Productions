

function commentController($scope, $http){
	var currentdate = new Date();
	var datetime =  currentdate.getDate() + 
       	+ (currentdate.getMonth()+1)  + 
        + currentdate.getFullYear() + 
        + currentdate.getHours() +  
        + currentdate.getMinutes() +  
        + currentdate.getSeconds();

    var site = "http://localhost";
                					

    $scope.getComments = function(postID){
    	var page = "/xampp/FinalProject/php/getComments.php";
    	console.log('getComments reporting for duty', postID);
    	data = {'postID' : postID};
    	$http.post(site + page, data )
		.success(function(response, status) {
			$scope.comments = response;
			$scope.status = status;
			console.log($scope.result);
			return ;
		})
		.error(function(data, status) {
			$scope.data = data || "Request failed";
			$scope.status = status;
			console.log("epic flail");
		});
		return true;
	}

	$scope.submitComment = function(postID){
		var page = "/xampp/FinalProject/php/submitComment.php";
		data = {
	    	'comment' : $scope.user.comment,
	    	'postID' : postID,
	      	'date' : datetime
		}
	    console.log($scope.user.comment);
		console.log(postID);

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