app.controller('database_list',function($scope,$location,$http)
{
	$scope.satellites = {};
	$scope.satellite= {};
	$scope.$watchCollection('satellite',function(newValue,oldValue)
	{
		for (var key in newValue) {
			if (newValue.hasOwnProperty(key)) {
				$location.search(key,newValue[key]);
			}
		}
		
	});

	var search = $location.search();
	for (var key in search) {
		if (search.hasOwnProperty(key)) {
			$scope.satellite[key] = search[key];
		}
	}
	
	$http(
		{
			method:'GET',
			url:'/api/satellites',
			data : $scope.satellite}).then(
	function success(response) {
		$scope.satellites = response.data.data;

		
	},function error(response) {
	
	});

});


app.controller('database_single',function($scope,$location)
{
	$http.get({method:'GET',url:'/api/satellite'}).then(function success(response) {
		
	},function error(response) {
	
	});
});

app.controller('database_modify',function($scope,$location)
{
	$http.get({method:'GET',url:'/api/satellite'}).then(function success(response) {
		
	},function error(response) {
	
	});
});

app.controller('database_history',function($scope,$location)
{
	$http.get({method:'GET',url:'/api/satellite'}).then(function success(response) {
		
	},function error(response) {
	
	});
});