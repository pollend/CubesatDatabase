@extends('base')

@push('script-head')
	<script src="{{ URL::asset('js/satelliteController.js') }}"></script>
@endpush

@section('content')
	<div ng-controller="database_list as control">
		<form method="GET" class="search_form" action="{{Request::url() }}">
		     @yield('search_area')
		     <input class="btn btn-default pull-right" type="submit" value="search"></input>
		     <div class="form-group"></div>
	    </form>
		@yield('list')
    </div>
@endsection