@extends('database_list.base')

@section('title', 'Home')


@section('search_area')
	
	<div class="form-group">
		<label >Search:</label>
		<div class="form-group">
			<div class="search-input">
				<div class="row">
					<div class="col-md-2 left">
					  <select name="sat_column">    
							<option value="Name" {{Request::input('sat_column') == 'Name' ? 'selected' : ''}}>Name</option>
							<option value="Orbit"{{Request::input('sat_column') == 'Orbit' ? 'selected' : ''}}>Orbit</option>
							<option value="TLE" {{Request::input('sat_column') == 'TLE' ? 'selected' : ''}}>TLE</option>
						</select>
					</div>
					<div class="col-md-10 right">
					  <input type="text" name="search" placeholder="search" value="{{Request::input('search')}}"></input>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Status:</label>
			<div>
				<select name="sat_status">
					<option value="all" {{Request::input('sat_status') == 'all' ? 'selected' : ''}}>All</option>
					<option value="active" {{Request::input('sat_status') == 'active' ? 'selected' : ''}} >active</option>
					<option value="in-orbit" {{Request::input('sat_status') == 'in-orbit' ? 'selected' : ''}}>in-orbit</option>
					<option value="in-development" {{Request::input('sat_status') == 'in-development' ? 'selected' : ''}}>in-development</option>
					<option value="data-collection"{{Request::input('sat_status') == 'data-collection' ? 'selected' : ''}} >data-collection</option>
					<option value="data-analysis" {{Request::input('sat_status') == 'data-analysis' ? 'selected' : ''}} >data-analysis</option>
					<option value="inactive" {{Request::input('sat_status') == 'inactive' ? 'selected' : ''}}>inactive</option>
					<option value="de-orbited" {{Request::input('sat_status') == 'de-orbited' ? 'selected' : ''}}>de-orbited</option>
					<option value="entry-closed" {{Request::input('sat_status') == 'entry-closed' ? 'selected' : ''}}>entry-closed</option>
				</select>
			</div>
		</div>
	</div>

@endsection

@section('list')
    <p>This is my body content.</p>
@endsection