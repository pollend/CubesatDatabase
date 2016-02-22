app.controller('database_list',function($scope,$location,$http,$httpParamSerializer)
{
	$scope.satellites = {};
	$scope.data= {};
	$scope.search_area ={};
	$scope.$watchCollection('data',function(newValue,oldValue)
	{
		for (var key in newValue) {
			if (newValue.hasOwnProperty(key)) {
				if(newValue[key] === "")
					delete $location.search()[key];
				else
					$location.search(key,newValue[key]);
			}
		}
		
	});

	var search = $location.search();
	for (var key in search) {
		if (search.hasOwnProperty(key)) {
			$scope.data[key] = search[key];
		}
	}
	
	$scope.submit =  function()
	{
		$scope.data["search"] = $scope.search_area["search"];
		$scope.data["column"] = $scope.search_area["sat_column"];
		$scope.data["status"] = $scope.search_area["sat_status"];
		$scope.update_table();
	}

	$scope.pageChanged = function()
	{
		$scope.data["page"] = $scope.current_page; 
		$scope.update_table();
	}

	$scope.update_table = function()
	{
		$http({
			method: "GET",
			url:'/api/satellites?' + $httpParamSerializer($scope.data)}).then(
		function success(response) {
			$scope.satellites = response.data.data;
			$scope.totalItems =  response.data.total;
			$scope.current_page = response.data.current_page;
		},function error(response) {
		
		});

	}

	$scope.update_table();

});


app.controller('database_single',function($scope,$location,$http)
{
		$http({
			method: "GET",
			url:'/api/satellites/' + $location.path().split("/")[2]}).then(
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