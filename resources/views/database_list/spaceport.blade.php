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
				  <select name="sat_column">    
						<option value="">Name</option>
					</select>
				</div>
				<div class="col-md-10 right">
				  <input type="text" name="search" ng-model="search_area.search" placeholder="search"></input>
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
				<tr ng-repeat="spaceport in spaceports">
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.id}}</a></td>
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.name}}</a></td>
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.country}}</a></td>
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.state}}</a></td>	
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.city}}</a></td>
					<td><a target="_self" href="{{url('/spaceport/')}}/@{{spaceport.id}}">@{{spaceport.zip}}</a></td>
				</tr>

			</tbody>
		</table>

		<uib-pagination total-items="totalItems" ng-model="current_page" ng-change="pageChanged()"></uib-pagination>
	</div>
@endsection