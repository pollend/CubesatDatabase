@extends('database_view.base')

@section('title', 'Home')

@push('script-head')
	<script src="{{ URL::asset('js/spaceportController.js') }}"></script>
@endpush


@section('single')

		<h1>@{{spaceport.name}}</h1>
		<h2>Lat Long</h2>
		@{{spaceport.latlong}}
		<h2>Description:</h2>
		@{{spaceport.description}}
		<h2>Address:</h2>
		<address>
			@{{spaceport.address1}}
			@{{spaceport.address2}}
			@{{spaceport.city}}
			@{{spaceport.country}}
		</address>

		@{{spaceport.content}}
@endsection


@section('modify')
<form>
	<div class="input-group">
		<label>Name*</label>
		<input type="text" class="form-control" required></input>
	</div>
	<div class="input-group">
		<label>Content*</label>
		<input type="text" class="form-control"></input>
	</div>

	<div class="input-group">
		<label>COSPAR*</label>
		<input type="text" class="form-control"></input>
	</div>

	<div class="input-group">
		<label>Wiki*</label>
		<input type="text" class="form-control"></input>
	</div>

	<div class="input-group">
		<label>Status*</label>
		<input type="text" class="form-control"></input>
	</div>

	<div class="input-group">
		<label>TLE*</label>
		<input type="text" class="form-control"></input>
	</div>

	<div class="input-group">
		<label>Orbit*</label>
		<input type="text" class="form-control"></input>
	</div>

</form>

@endsection

@section('history')
history
@endsection
