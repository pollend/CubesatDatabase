@extends('base')

@section('content')
	<div >
		<form class="search_form" action="{{url(Request::path())}}">
		     @yield('search_area')
		     <input class="btn btn-default pull-right" type="submit" ></input>
		</form>
			@yield('list')
		
    </div>
@endsection