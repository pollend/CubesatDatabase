@extends('base')

@section('content')
	<div ng-controller="database_list">
		<form novalidate class="search_form">
		     @yield('search_area')
		     <input class="btn btn-default pull-right" type="submit" value="search"></input>
		     <div class="form-group" ng-click="search()"></div>
	    </form>
		@yield('list')
    </div>
@endsection