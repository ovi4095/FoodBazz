
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
	<title>FoodBazz</title>
	<meta charset="utf-8">
	{!!HTML ::style("font/Raleway-ExtraLight.ttf")!!}
	{!!HTML ::style("css/style.css")!!}
	{!!HTML ::style("css/style1.css")!!}
	{!!HTML ::style("css/animate.css")!!}
	{!!HTML ::style("css/bootstrap.css")!!}
	{!!HTML ::style("css/bootstrap.min.css")!!}
	{!!HTML ::style("css/bootstrap-grid.css")!!}
	{!!HTML ::style("css/bootstrap-grid.min.css")!!}
	{!!HTML ::style("css/magnific-popup.css")!!}
	{!!HTML ::style("css/lightbox.min.css")!!}
    {!!HTML ::script("js/lightbox-plus-jquery.min.js")!!}
	{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
	{!!HTML ::script("js/bootstrap.bundle.js")!!}
	{!!HTML ::script("js/bootstrap.bundle.min.js")!!}
	{!!HTML ::script("js/bootstrap.js")!!}
	{!!HTML ::script("js/bootstrap.min.js")!!}
	{!!HTML ::script("js/jquery-3.2.1.min.js")!!}
	{!!HTML ::script("js/qunit.js")!!}
	{!!HTML ::script("js/jsAnimation.js")!!}
	{!!HTML ::script("http://maps.google.com/maps/api/js?sensor=false")!!}
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark headerStyle navbar fixed-top " style="">
			  <img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
			  <a class="navbar-brand" href="javascript:void(0)">  FoodBazz</a>
					  <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
					    <span class="navbar-toggler-icon"></span>
					  </button>

			  <div class="navbar-collapse collapse " style="color: white; margin-left: 100px" id="navb">
				    <ul class="navbar-nav mr-auto ">
				      <li class="nav-item active">
				        <a href="#cov" class="btn btn-outline-secondary scroll" style="margin-left: 15px; color: white;">Home</a>
				      </li>
				      <li class="nav-item">
				        <a class="btn btn-outline-secondary scroll" href="#mapd" data-target="#mappt" data-toggle="collapse"  style="margin-left: 15px; color: white;">Map</a>
				      </li>
				       <li class="nav-item">
				         <a class="btn btn-outline-secondary scroll" href="#card"  style="margin-left: 15px; color: white;">Restaurant</a>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">Language
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="{{URL::to('বিডিনেব')}}">বাংলা </a>
						        <a class="dropdown-item" href="{{URL::to('home')}}">English</a>
						      </div>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">More
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="#">Food Blog </a>
						        <a class="dropdown-item" href="#">Offers</a>
						        <a class="dropdown-item" href="#">FAQ</a>
						      </div>
				      </li>
				    </ul>
			  <div class="container-fluid justify-content-end row" >
			  		<a href="#login" class="btn btn-outline-primary scroll col-sm-2" style="margin-right: 50px; color: white;" >Sign in</a>
				   <form class="form-inline">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="color: white;">Search</button>
  				    </form>
  			  </div>
			  </div>
		</nav>
	</header>

	@yield('content')


	<div class="content" style="margin-top: 100px;">
		    <footer id="myFooter">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-3">
		                	<img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
		                    <h2 class="logo"><a href="#"> FoodBazz </a></h2>
		                </div>
		                <div class="col-sm-2">
		                    <h5>Get started</h5>
		                    <ul>
		                        <li><a href="main.html">Home</a></li>
		                        <li><a href="registration.html">Sign up</a></li>
		                        
		                    </ul>
		                </div>
		                <div class="col-sm-2">
		                    <h5>Support</h5>
		                    <ul>
		                        <li><a href="#">FAQ</a></li>
		                        <li><a href="#">Help desk</a></li>
		                        <li><a href="#">Forums</a></li>
		                    </ul>
		                </div>
		                <div class="col-sm-3">
		                    <h5>Contact</h5>
		                    <ul>
		                        <li><a href="#">Twitter</a></li>
		                        <li><a href="#">Facebook</a></li>
		                        <li><a href="#"> Google+</a></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		        <div class="footer-copyright">
		            <p>© 2017 Copyright Students of DIU </p>
		        </div>
		    </footer>
	</div>

{!!HTML ::script("js/qunit.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js")!!}
{!!HTML ::script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
{!!HTML ::script("js/bootstrap.min.js")!!}
{!!HTML ::script("js/index.js")!!}
</body>
</html>
