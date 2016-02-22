<?php

$pages = array(
	array("page_name"=>"Home","page-id" => "/"),
	array("page_name"=>"Reports","page-id" => "Reports","sub_menu" => array(array("page_name"=>"Satellite","page-id" => "satellite"),array("page_name"=>"Vendor","page-id" => "vendor"),array("page_name"=>"Component","page-id" => "component"),array("page_name"=>"Mission","page-id" => "mission"),array("page_name"=>"Spaceport","page-id" => "spaceport"))),
	array("page_name"=>"Contact","page-id" => "contact"),
	array("page_name"=>"Help","page-id" => "help"));


?>

<nav  class="navbar navbar-default" id="top-header" role="navigation">
  <div class="container-fluid center_container">
		<div class="nav navbar-nav navbar-left ">
			 <a target="_self" class="navbar-brand" href="#">Digital Astronautics</a>
	 	</div>
	 	<ul class="nav navbar-nav navbar-right">
	 		@foreach($pages as $page)
	 			@if(isset($page['sub_menu']))
					<li>
						<a target="_self" id="{{ $page['page_name'] }}"  data-toggle="dropdown" class="dropdown-toggle" href="{{ url($page['page-id']) }}">
							{{ $page['page_name'] }} <span class="caret"></span>
						</a> 
						<ul class="dropdown-menu" >
							@foreach($page['sub_menu'] as $sub_menu)

								<li>
									<a target="_self" id="{{ $sub_menu['page_name'] }}" href="{{ url($sub_menu['page-id']) }}">
										{{ $sub_menu['page_name'] }}
									</a>
								</li>
							@endforeach

						</ul>
					</li>
	 			@else
	 				<li>
						<a target="_self" id="{{ $page['page_name'] }}" href="">
							{{ $page['page_name'] }}
						</a>
					</li>
	 			@endif
	 		@endforeach
	 	</ul>
  </div>
</nav>