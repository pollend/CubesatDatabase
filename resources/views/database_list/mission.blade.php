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
    <p>This is my body content.</p>
@endsection