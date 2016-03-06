@extends('database_list.base')

@section('title', 'Home')

@push('script-head')
	<script src="{{ URL::asset('js/satelliteController.js') }}"></script>
@endpush



@section('search_area')
	
	<div class="form-group">
		<label >Search:</label>
		<div class="form-group">
			<div class="search-input">
				<div class="row">
					<div class="col-md-2 left">
						@include("form.select",[
							"properties" => "name='column'",

							"options" =>[
							'name'=>'Name',
							'orbit'=>'Orbit',
							'tle'=>'TLE'],

							"selectedOption" => Request::input('column',"name")])
					</div>
					<div class="col-md-10 right">
					  <input  type="text" name="search" placeholder="search" value="{{Request::input("search")}}"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Status:</label>
			<div>
				@include("form.select",[
				"properties" => "name='status'",

				"options" =>[
				'all'=>'all',
				'active'=>'active',
				'in-orbit'=>'in-orbit',
				'in-orbit'=> 'in-orbit',
				"in-development" =>"in-development",
				"data-collection" =>"data-collection",
				"data-analysis" => "data-analysis",
				"inactive"=>"inactive",
				"de-orbited"=> "de-orbited",
				"entry-closed"=>"entry-closed"],

				"selectedOption" => Request::input('status',"all")])
				
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
			<td>TLE</td>
			<td>Status</td>
			<td>Orbit</td>

		</tr>
	</thead>
	<tbody>
		@foreach ($items as $sat)
			<tr>
				<td><a target="_self" href="{{action("SatelliteController@single",$sat->id)}}">{{$sat->id}}</a></td>
				<td><a target="_self" href="{{action("SatelliteController@single",$sat->id)}}">{{$sat->name}}</a></td>
				<td><a target="_self" href="{{action("SatelliteController@single",$sat->id)}}">{{$sat->tle}}</a></td>	
				<td><a target="_self" href="{{action("SatelliteController@single",$sat->id)}}">{{$sat->status}}</a></td>
				<td><a target="_self" href="{{action("SatelliteController@single",$sat->id)}}">{{$sat->orbit}}</a></td>
			
			</tr>
		@endforeach

	</tbody>
</table>
{{$items->render()}}

</div>
@endsection