<?php

$pages = array(
	array("page_name"=>"Home","page-id" => "Home"),
	array("page_name"=>"Reports","page-id" => "Reports","sub_menu" => array(array("page_name"=>"Satellite","page-id" => "Satellite"),array("page_name"=>"Vendor","page-id" => "Vendor"),array("page_name"=>"Component","page-id" => "Component"),array("page_name"=>"Mission","page-id" => "Mission"),array("page_name"=>"Spaceport","page-id" => "Spaceport"))),
	array("page_name"=>"Contact","page-id" => "Contact"),
	array("page_name"=>"Help","page-id" => "Help"));


?>

<nav  class="navbar navbar-default" id="top-header" role="navigation">
  <div class="container-fluid center_container">
		<div class="nav navbar-nav navbar-left ">
			 <a class="navbar-brand" href="#">Digital Astronautics</a>
	 	</div>
	 	<ul class="nav navbar-nav navbar-right">
	 		@foreach($pages as $page)
	 			@if(isset($page['sub_menu']))
					<li>
						<a id="{{ $page['page_name'] }}"  data-toggle="dropdown" class="dropdown-toggle" href="#">
							{{ $page['page_name'] }} <span class="caret"></span>
						</a> 
						<ul class="dropdown-menu" >
							@foreach($page['sub_menu'] as $sub_menu)

								<li>
									<a id="{{ $sub_menu['page_name'] }}" href="">
										{{ $sub_menu['page_name'] }}
									</a>
								</li>
							@endforeach

						</ul>
					</li>
	 			@else
	 				<li>
						<a id="{{ $page['page_name'] }}" href="">
							{{ $page['page_name'] }}
						</a>
					</li>
	 			@endif
	 		@endforeach
	 	</ul>
  </div>
</nav>