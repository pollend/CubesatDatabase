app.controller('database_list',function($scope,$location,$http,$httpParamSerializer)
{
	$scope.render_static = true;	

	$scope.submit =  function()
	{
		$location.search("search",$scope.search);
		$location.search("column",$scope.sat_column);
		$location.search("status",$scope.sat_status);
		$scope.update_table();
	}

	$scope.pageChanged = function()
	{
		$location.search("page",$scope.current_page);
		$scope.update_table();
	}

	$scope.update_table = function()
	{
		$scope.render_static = false;
		
		$http({
			method: "GET",
			url:'/api/satellite?' + $httpParamSerializer($location.search)}).then(
		function success(response) {
			$scope.satellites = response.data.data;
			$scope.totalItems =  response.data.total;
			$scope.current_page = response.data.current_page;
		},function error(response) {
		
		});

	}
	


});


app.controller('database_single',function($scope,$location,$http)
{
		$http({
			method: "GET",
			url:'/api/satellite/' + $location.path().split("/")[2]}).then(
		function success(response) {
			$scope.satellite = response.data
		},function error(response) {
		
		});
});

app.controller('database_modify',function($scope,$location)
{

});

app.controller('database_history',function($scope,$location)
{

});