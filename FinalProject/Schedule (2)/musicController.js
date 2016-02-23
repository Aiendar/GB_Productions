function musicController($scope,$http) {
var site = "http://localhost";
var page = "/music_Best_AMJ/musiclibrary_search.php";
$scope.search = function() {
var data = {
"searchtype" : $scope.searchtype,
"searchtext" : $scope.searchtext
};
$http.post(site + page, data )
.success(function(response, status) {
$scope.result = response;
$scope.status = status;
})
.error(function(data, status) {
$scope.data = data || "Request failed";
$scope.status = status;
});
}
}