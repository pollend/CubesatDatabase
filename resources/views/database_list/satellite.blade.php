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
					  <select ng-model="sat_column" name="sat_column">    
							<option value="" >Name</option>
							<option value="orbit">Orbit</option>
							<option value="tle" >TLE</option>
						</select>
					</div>
					<div class="col-md-10 right">
					  <input type="text" name="search" placeholder="search" ng-model="search"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Status:</label>
			<div>
				<select ng-model="sat_status" name="sat_status">
					<option value="">all</option>
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
			<td>TLE</td>
			<td>Status</td>
			<td>Orbit</td>

		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="satellite in satellites">
			<td><a target="_self" href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.id}}</a></td>
			<td><a target="_self" href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.name}}</a></td>
			<td><a target="_self" href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.tle}}</a></td>	
			<td><a target="_self" href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.status}}</a></td>
			<td><a target="_self" href="{{url('/satellite/')}}/@{{satellite.id}}">@{{satellite.orbit}}</a></td>
			
		</tr>

		@for ($i = 0; $i < count($sats["data"]); $i++) 
			<tr ng-show="render_static">
				<td><a target="_self" href="{{url('/satellite/')}}/{{$sats["data"][$i]["id"]}}">{{$sats["data"][$i]["id"]}}</a></td>
				<td><a target="_self" href="{{url('/satellite/')}}/{{$sats["data"][$i]["id"]}}">{{$sats["data"][$i]["name"]}}</a></td>
				<td><a target="_self" href="{{url('/satellite/')}}/{{$sats["data"][$i]["id"]}}">{{$sats["data"][$i]["tle"]}}</a></td>	
				<td><a target="_self" href="{{url('/satellite/')}}/{{$sats["data"][$i]["id"]}}">{{$sats["data"][$i]["status"]}}</a></td>
				<td><a target="_self" href="{{url('/satellite/')}}/{{$sats["data"][$i]["id"]}}">{{$sats["data"][$i]["orbit"]}}</a></td>
			
			</tr>
		@endfor
	</tbody>
</table>

@include('pagination', ['paginator' => $sats])

</div>
@endsection