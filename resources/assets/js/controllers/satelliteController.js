


app.controller('satellite_modify',function($scope,$location,$http,$httpParamSerializer,API_URL)
{
	$scope.master = {};

	$scope.update = function(sat)
	{
		$scope.master= angular.copy(sat);
	}

	$scope.reset = function() {
        $scope.sat = angular.copy($scope.master);
    };

    $scope.init = function()
    {

	    $http({
		  method: 'GET',
		  url: API_URL + "/satellite/" + $scope.id
		}).then(function successCallback(response) {
			$scope.master = angular.copy(response.data);
		  	$scope.reset();
		  }, function errorCallback(response) {

		  });

    }

});

