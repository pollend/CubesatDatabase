@extends('database_list.base')

@section('title', 'Home')


@section('search_area')
	<div class="form-group">
		<label label_id="search">Search:</label>
		<div class="search-input">
			<div class="row">
				<div class="col-md-2 left">
					<select name="sat_column">    
						<option value="">Formal Specification</option>
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
					<td>Formal Specification</td>
				</tr>
			</thead>
			<tbody>

				@foreach ($components as $component)
					<tr>
						<td><a  href="{{action("ComponentController@single",$component->id)}}">{{$component->id}}</a></td>
						<td><a  href="{{action("ComponentController@single",$component->id)}}">{{$component->formal_specification}}</a></td>
					</tr>
				@endforeach

			</tbody>
		</table>

		{{$components->render()}}
	</div>
@endsection