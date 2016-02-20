@extends('base')

@section('content')
	<form method="GET" class="search_form" action="{{ url('/satellite')}}">
	     @yield('search_area')
	     <input class="btn btn-default pull-right" type="submit" value="search"></input>
	     <div class="form-group"></div>
    </form>
      @yield('list')
@endsection