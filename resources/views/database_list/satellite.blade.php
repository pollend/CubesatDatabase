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
					  <select ng-model="satellite.sat_column" name="sat_column">    
							<option value="" >Name</option>
							<option value="Orbit">Orbit</option>
							<option value="TLE" >TLE</option>
						</select>
					</div>
					<div class="col-md-10 right">
					  <input type="text" name="search" placeholder="search" ng-model="satellite.search"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Status:</label>
			<div>
				<select ng-model="satellite.sat_status" name="sat_status">
					<option value="">All</option>
					<option value="active" >active</option>
					<option value="in-orbit" >in-orbit</option>
					<option value="in-development" >in-development</option>
					<option value="data-collection">data-collection</option>
					<option value="data-analysis" >data-analysis</option>
					<option value="inactive" >inactive</option>
					<option value="de-orbited" >de-orbited</option>
					<option value="entry-closed" >entry-closed</option>
				</select>
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
			<td>Status</td>
			<td>Orbit</td>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="satellite in satellites">
			<td><a href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.id}}</a></td>
			<td><a href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.name}}</a></td>
			<td><a href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.status}}</a></td>
			<td><a href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.orbit}}</a></td>
		</tr>

	</tbody>
</table>
</div>
@endsection