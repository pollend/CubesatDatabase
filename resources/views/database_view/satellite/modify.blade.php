@extends('base')

@push('script-head')
<script type="text/javascript" src="{{URL::asset('js/markdown.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap-markdown.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/controllers/satelliteController.js')}}"></script>
@endpush

@push('css-head')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-markdown.min.css')}}"></link>
@endpush

@section('content')
	<div ng-controller="satellite_modify">
		{{-- @include("database_view.header") --}}
		<form ng-init="id='{{$id}}';init();">
			<div class="form-group">
				<label>Name*</label>
				<input type="text" ng-model="sat.name" class="form-control"></input>
			</div>

			<div class="form-group">
				<label>status*</label>
				@include("form.select",[
				"properties" => "ng-model='sat.status'",

				"options" =>[
				'all'=>'all',
				'active'=>'active',
				'in-orbit'=>'in-orbit',
				'in-orbit'=> 'in-orbit',
				"in-development" =>"in-development",
				"data-collection" =>"data-collection",
				"data-analysis" => "data-analysis",
				"inactive"=>"inactive",
				"de-orbited"=> "de-orbited",
				"entry-closed"=>"entry-closed"]])

			</div>


			<div class="panel panel-default" ng-repeat="component in sat.component">
				<div class="panel-heading" role="tab" id="headingOne">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#compoent-@{{component.id}}" aria-expanded="false" aria-controls="@{{component.id}}">
						@{{component.formal_specification}}
					</a>
				</div>
				<div id="compoent-@{{component.id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="@{{component.id}}">
					<div class="panel-body">
						<div class="form-group">
							<label>formal_specification*</label>
							<input type="text" ng-model="component.formal_specification" class="form-control"></input>
						</div>
						<div class="form-group">
							<label>Description*</label>
							<textarea  ng-model="component.description" data-provide="markdown" rows="15" ></textarea>
						</div>
					</div>
				</div>
			</div>

			<textarea  ng-model="sat.content" data-provide="markdown" rows="15" ></textarea>
			
			<button type="submit" ng-click="update(sat)"  class="btn btn-default">Submit</button>

			@{{master | json}}
		</form>
	</div>
@endsection

