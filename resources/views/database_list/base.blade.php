@extends('base')

@section('content')
	<div ng-controller="database_list">
		<form class="search_form">
		     @yield('search_area')
		     <input class="btn btn-default pull-right" type="submit" value="search" ng-click="submit()"></input>
	    </form>
		@yield('list')
    </div>
@endsection