@extends('database_list.base')

@section('title', 'Home')


@section('search_area')
	<div class="form-group">
		<label label_id="search">Search:</label>
		<div class="search-input">
			<div class="row">
				<div class="col-md-2 left">
				  <select name="sat_column">    
						<option value="mission-name">Name</option>
						<option value="mission-objective">Objective</option>
					</select>
				</div>
				<div class="col-md-10 right">
				  <input type="text" name="search" placeholder="search"></input>
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
			<td>Objective</td>
		</tr>
	</thead>
	<tbody>
		@foreach ($missions as $mission)
			<tr>
				<td><a target="_self" href="{{action("MissionController@single",$mission->id)}}">{{$mission->id}}</a></td>
				<td><a target="_self" href="{{action("MissionController@single",$mission->id)}}">{{$mission->name}}</a></td>
				<td><a target="_self" href="{{action("MissionController@single",$mission->id)}}">{{$mission->objective}}</a></td>	
			</tr>
		@endforeach

	</tbody>
</table>
{{$missions->render()}}
@endsection