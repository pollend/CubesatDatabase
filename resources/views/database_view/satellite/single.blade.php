@extends('base')

@section('content')
	@include("database_view.header")
		<h1>{{$item->name}} <small> {{$item->status}}</small></h1>

		<p><h2>COSPAR: </h2> {{$item->COSPAR}}</p>


		<h2>Parts</h2>

		<ul>
			@foreach($item->components as $component )
				<li><a href="{{action('ComponentController@single',$component->id)}}">{{$component->formal_specification}}</a></li>
			@endforeach
		</ul>

		<h2>Description</h2>

		{{$item->content}}
@endsection

