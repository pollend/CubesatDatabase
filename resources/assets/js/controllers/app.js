var app = angular.module('app',['ui.bootstrap'])
.config(["$locationProvider", function($locationProvider) {
    $locationProvider.html5Mode(true);
}])