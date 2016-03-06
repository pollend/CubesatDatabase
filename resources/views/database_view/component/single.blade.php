@extends('base')

@section('content')
	@include("database_view.header")
	<h1>{{$item->formal_specification}} </h1>
	<h2>Description</h2>

	{{$item->description}}
@endsection

