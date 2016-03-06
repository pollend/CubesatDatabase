@extends('database_list.base')

@section('title', 'Home')

@push('script-head')
	<script src="{{ URL::asset('js/spaceportController.js') }}"></script>
@endpush




@section('search_area')
	<div class="form-group">
		<label label_id="search">Search:</label>
		<div class="search-input">
			<div class="row">
				<div class="col-md-2 left">
				  <select name="column">    
						<option value="">Name</option>
					</select>
				</div>
				<div class="col-md-10 right">
				  <input type="text" name="search" value="{{Request::input("search")}}" placeholder="search"></input>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('list')
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<td>#</td>
					<td>Name</td>
					<td>Country</td>
					<td>State</td>
					<td>City</td>
					<td>Zip</td>
				</tr>
			</thead>
			<tbody>

				@foreach ($spaceports as $spaceport)
					<tr>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->id}}</a></td>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->name}}</a></td>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->country}}</a></td>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->state}}</a></td>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->city}}</a></td>
						<td><a target="_self" href="{{action("SpaceportController@single",$spaceport->id)}}">{{$spaceport->zip}}</a></td>
					</tr>
				@endforeach

			</tbody>
		</table>

		{{$spaceports->render()}}
	</div>
@endsection