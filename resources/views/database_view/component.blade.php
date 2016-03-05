@extends('database_view.base')

@section('title', 'Home')



@section('single')
		<h1>{{$component->formal_specification}} </h1>
		<h2>Description</h2>

		{{$component->description}}
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
