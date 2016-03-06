@extends('base')

@section('content')
	@include("database_view.header")
	
	<h1>{{$item->name}}</h1>
		{{$item->contact_info}}
@endsection

