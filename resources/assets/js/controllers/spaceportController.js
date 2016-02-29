app.controller('database_list',function($scope,$location,$http,$httpParamSerializer)
{
	$scope.spaceports = {};
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
			url:'/api/spaceport?' + $httpParamSerializer($scope.data)}).then(
		function success(response) {
			$scope.spaceports = response.data.data;
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
			url:'/api/spaceport/' + $location.path().split("/")[2]}).then(
		function success(response) {
			$scope.spaceport = response.data
		},function error(response) {
		
		});
});

app.controller('database_modify',function($scope,$location)
{

});

app.controller('database_history',function($scope,$location)
{

});