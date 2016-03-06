@extends('database_list.base')

@section('title', 'Home')


@section('search_area')
	<div class="form-group">
		<label label_id="search">Search:</label>
		<div class="search-input">
			<div class="row">
				<div class="col-md-2 left">
	
					@include("form.select",[
							"properties" => "name='column'",

							"options" =>[
							'name'=>'Name',
							'type'=>'Type'],

							"selectedOption" => Request::input('column',"name")])
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
					<td>Type</td>
				</tr>
			</thead>
			<tbody>

				@foreach ($vendors as $vendor)
					<tr>
						<td><a target="_self" href="{{action("VendorController@single",$vendor->id)}}">{{$vendor->id}}</a></td>
						<td><a target="_self" href="{{action("VendorController@single",$vendor->id)}}">{{$vendor->name}}</a></td>
						<td><a target="_self" href="{{action("VendorController@single",$vendor->id)}}">{{$vendor->type}}</a></td>
					</tr>
				@endforeach

			</tbody>
		</table>

		{{$vendors->render()}}
	</div>
@endsection