<nav  class="navbar navbar-default" id="top-header" role="navigation">
  <div class="container">
		<div class="nav navbar-nav navbar-left ">
			 <a class="navbar-brand" href="#">Digital Astronautics</a>
	 	</div>

	 	<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="">Home</a>
			</li>
			<li>
				<a data-toggle="dropdown" class="dropdown-toggle" href="">Reports <span class="caret"></span></a> 
				<ul class="dropdown-menu" >
					<li><a href="{{action("SatelliteController@home")}}">satellite</a></li>
					<li><a href="{{action("VendorController@home")}}">vendor</a></li>
					<li><a href="{{action("ComponentController@home")}}">component</a></li>
					<li><a href="{{action("MissionController@home")}}">mission</a></li>
					<li><a href="{{action("SpaceportController@home")}}">spaceport</a></li>
				</ul>
			</li>
			<li>
				<a href="">Contact</a>
			</li>
			<li>
				<a href="">Help</a>
			</li>
	 	</ul>
  </div>
</nav>