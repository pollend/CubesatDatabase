@extends('base')

@section('content')
	@include("database_view.header")
	
	<h1>{{$item->name}}</h1>
	<h2>Lat Long</h2>
	{{$item->latlong}}
	<h2>Description:</h2>
	{{$item->description}}
	<h2>Address:</h2>
	<address>
		{{$item->address1}}
		{{$item->address2}}
		{{$item->city}}
		{{$item->country}}
	</address>

	{{$item->content}}
@endsection

