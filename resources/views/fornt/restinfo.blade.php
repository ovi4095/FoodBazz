<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Restaurent</title>
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
			  <a class="navbar-brand" href="javascript:void(0)">BD Nav</a>
					  <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
					    <span class="navbar-toggler-icon"></span>
					  </button>

			  <div class="navbar-collapse collapse " style="color: white; margin-left: 100px" id="navb">
				    <ul class="navbar-nav mr-auto ">
				      <li class="nav-item active">
				        <a href="{{URL::to('home')}}" class="btn btn-outline-secondary " style="margin-left: 15px; color: white;">Home</a>
				      </li>
				      <li class="nav-item active">
				        <a href="test2.html" class="btn btn-outline-secondary " style="margin-left: 15px; color: white;">Restaurent List</a>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">Language
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="Main.html">বাংলা </a>
						        <a class="dropdown-item" href="#">English</a>
						      </div>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">More
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="#">Blog </a>
						        <a class="dropdown-item" href="#">Make a Trip</a>
						        <a class="dropdown-item" href="#">Photo Galley </a>
						        <a class="dropdown-item" href="#">Videos</a>
						        <a class="dropdown-item" href="#">Contact Us</a>
						      </div>
				      </li>
				    </ul>
		</nav>
	</header>
	<section id="cov">
		<div class="bd-example">
		      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
		          <li data-target="#carouselExampleCaptions" data-slide-to="0" ></li>
		          <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
		          <li data-target="#carouselExampleCaptions" data-slide-to="2" ></li>
		        </ol>
		        <div class="carousel-inner">
		        @foreach($restinfos as $rinfos )
		          <div class="carousel-item active">
		              <img class="d-block w-100" src="{{URL::to($rinfos->slide1_img)}}" alt="First slide" data-holder-rendered="true">
		                <div class="carousel-caption d-none d-md-block">
		                  <h1  class="animated slideInUp"> </h1>
		                    
		                </div>
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="{{URL::to($rinfos->slide2_img)}}" alt="Second slide" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                    <h1  class="animated zoomIn position" style="margin-left: 50px;"></h1>
		                      <p class="animated zoomInUp position3">
		                      </p>
		              </div>
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="{{URL::to($rinfos->slide3_img)}}" alt="Third slide" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                <h1  class="animated bounceInDown position4" ></h1>
		                    <p class="animated fadeInDown position2">
		                    </p>
		            </div>
		          </div>
		        @endforeach
		        </div>
		        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		    </div>
		</div>
	</section >
	<section id="about"> 
		<div class="container">
			<h1 class="aheader animated bounceIn ">Pinewood - Cafe n' Restaurant</h1>
			
		</div>		
		
	</section>

	<section id="sb">
		<div class="container-fluid gl" style="margin: 0px; padding: 0px;">
			<h1 class="reviw animated bounceIn">Menu</h1>
			<a class="btn btn-outline-success showgl scroll" href="#gld" data-target="#glt" data-toggle="collapse">See Menu
			</a>
	</section>
	<section id="gld">
	 @foreach($restinfos as $rinfos )
		<div class="collapse mappos container " id="glt">
				
				<img class="row" src="{{URL::to($rinfos->slide3_img)}}">
				<img class="row" src="{{URL::to($rinfos->slide3_img)}}">

				
				<a  class="btn btn-outline-success hidegl scroll" href="#sb" data-target="#glt" data-toggle="collapse">See less</a>
		</div>
	@endforeach
	</section>

	<section id="sb">
		<div class="container-fluid gl" style="margin: 0px; padding: 0px;">
			<h1 class="reviw animated bounceIn">Reviews</h1>
			<a class="btn btn-outline-success showgl scroll" href="#gldd" data-target="#gltt" data-toggle="collapse">See Reviews
			</a>
	</section>
	<section id="gldd">
	@foreach($restinfos as $rinfos )
		<div class="collapse mappos galley" id="gltt">
				<a href="images/restaurent/r1.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review1_img)}}"></a>
				<a href="images/restaurent/r2.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review2_img)}}"></a>
				<a href="images/restaurent/r3.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review3_img)}}"></a>
				<a href="images/restaurent/r4.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review4_img)}}"></a>
				<a href="images/restaurent/r5.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review5_img)}}"></a>
				<a href="images/restaurent/r6.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review6_img)}}"></a>
				<a href="images/restaurent/r7.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review7_img)}}"></a>
				<a href="images/restaurent/r8.png" data-lightbox="mygallery"><img src="{{URL::to($rinfos->	review8_img)}}"></a>
				<a  class="btn btn-outline-success hidegl scroll" href="#sb" data-target="#glt" data-toggle="collapse">Hide The Map</a>
		</div>
	@endforeach
	</section>
	<section id="rating">
	@foreach($restinfos as $rinfos )
		<div class="container ">
			<h1 class="rate">Rating</h1>
			<div class="row">
				<h2 class="rating">Food</h2>
					<div class="star1">
						<span class="fa fa-star checked">{{$rinfos-> fool_rating}}</span>

					</div>
			</div>
			<div class="row">
				<h2 class="rating">Service</h2>
					<div class="star2">
						<span class="fa fa-star checked">{{$rinfos-> service_rating}}</span>
					</div>
			</div>
			<div class="row">
				<h2 class="rating">Value</h2>
					<div class="star3">
						<span class="fa fa-star checked">{{$rinfos-> valuerat_rating}}</span>
					</div>
			</div>
			<div class="row">
				<h2 class="rating">Atmosphere</h2>
					<div class="star4">
						<span class="fa fa-star checked">{{$rinfos-> atmosphere_rating}}</span>

					</div>
			</div>
		</div>
	@endforeach
	</section>

	<section>
		<div class="container">
			 
				<h1 class="time">Open Hours</h1>
					<div class="hours content">
						<div class="detail row">
							<span class="day"><h5 class="t1">Sunday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Monday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Tuesday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Wednesday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Thursday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Friday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
						<div class="detail row">
							<span class="day"><h5 class="t1">Saturday</h5></span>
								<span class="hours"><div class="tt1">10:00 AM - 10:00 PM</div></span>
						</div>
					</div>
			
		</div>
	</section>

	<section id="location">
	@foreach($restinfos as $rinfos )
	<div class=" container columns large-4">

                    <div class="content__semi content__semi--adjust">
                        <h1 class="content__semi__hl aheader">Address</h1>
                        <div class="content__semi__body">
                           <h4>{{$rinfos->address}}</h4>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="image mmma">
                            <a href="{{URL::to($rinfos->map_url)}}"><img class="image__fig__img" src="{{URL::to($rinfos->map_img)}}" alt=""></figure></a>
                        </div>
                    </div>


                </div>
    @endforeach
    </section>

    <section id="contact">
    @foreach($restinfos as $rinfos )

    	<div class="container">
    		<h1 class="time">Contact</h1>
    		<P><i class="fa fa-phone" id="phn">{{$rinfos->contact_number}}</i></P>
    		<a  class="btn btn-outline-success" href="{{URL::to($rinfos->fb_link)}}">Goto Facebook</a>
    	</div>
    @endforeach	
    </section>
	
	<div class="content" style="margin-top: 100px;">
			    <footer id="myFooter">
			        <div class="container">
			            <div class="row">
			                <div class="col-sm-3">
			                	<img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
			                    <h2 class="logo"><a href="#"> BDNav </a></h2>
			                </div>
			                <div class="col-sm-2">
			                    <h5>Get started</h5>
			                    <ul>
			                        <li><a href="#">Home</a></li>
			                        <li><a href="#">Sign up</a></li>
			                        <li><a href="#">Downloads</a></li>
			                    </ul>
			                </div>
			                <div class="col-sm-2">
			                    <h5>About us</h5>
			                    <ul>
			                        <li><a href="#">Company Information</a></li>
			                        <li><a href="#">Contact us</a></li>
			                        <li><a href="#">Reviews</a></li>
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


{!!HTML ::script("js/lightbox.js")!!}
{!!HTML ::script("js/qunit.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js")!!}
{!!HTML ::script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
{!!HTML ::script("js/bootstrap.min.js")!!}
{!!HTML ::script("js/index.js")!!}
</body>
</html>