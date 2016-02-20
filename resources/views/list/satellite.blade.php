@extends('list.base')

@section('title', 'Home')


@section('search_area')
	<div class="form-group">
		<label label_id="search">Search:</label>
		<div class="search-input">
			<div class="row">
				<div class="col-md-2 left">
				  <select name="sat_column">    
						<option value="">All</option>
						<option value="active">active</option>
						<option value="in-orbit">in orbit</option>
						<option value="in-development">in development</option>
						<option value="data-collection">data collection</option>
						<option value="data-analysis">data analysis</option>
						<option value="inactive">inactive</option>
						<option value="de-orbited">de orbited</option>
						<option value="entry-closed">entry closed</option>
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