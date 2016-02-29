@extends('base')

@section('content')

	<ul class="nav nav-tabs">
		 <li role="presentation" class="{{ $page == 'single' ? 'Active' : '' }}"><a target="_self" href=" {{action($controller . "@single",$id)}}">Single</a></li>
		 <li role="presentation" class="{{ $page == 'modify' ? 'Active' : '' }}"><a target="_self" href="{{action($controller . "@modify",$id)}}">Modify</a></li>
		 <li role="presentation" class="{{ $page == 'history' ? 'Active' : '' }}"><a target="_self" href="{{action($controller . "@history",$id)}}">History</a></li>
	</ul>

	@if($page == "single")
		<div ng-controller="database_single">
			@yield('single')
	    </div>
	@elseif($page == "modify")
		<div ng-controller="database_single">
			@yield('modify')
	    </div>
	@elseif($page == "history")
		<div ng-controller="database_single">
			@yield('history')
	    </div>
	@else
		<div> ERROR</div>
	@endif

@endsection