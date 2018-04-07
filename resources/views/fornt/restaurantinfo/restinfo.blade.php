@extends('fornt.newmaster.master2')
@section('content')
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
			@foreach($restinfos as $rinfos )
			<h1 class="aheader animated bounceIn ">About Restaurant</h1>
			@endforeach
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

				<img class="row" src="{{URL::to($rinfos->manu_img)}}">



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
						<span class="fa fa-star checked">★★★★</span>

					</div>
			</div>
			<div class="row">
				<h2 class="rating">Service</h2>
					<div class="star2">
						<span class="fa fa-star checked">★★★★</span>
					</div>
			</div>
			<div class="row">
				<h2 class="rating">Value</h2>
					<div class="star3">
						<span class="fa fa-star checked">★★★</span>
					</div>
			</div>
			<div class="row">
				<h2 class="rating">Atmosphere</h2>
					<div class="star4">
						<span class="fa fa-star checked">★★★</span>

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
                            <a href="{{url($rinfos->map_url)}}"><img class="image__fig__img" src="{{URL::to($rinfos->map_img)}}" alt=""></a>
                        </div>
                    </div>

	</div>
			<section id="contact">
				<div class="container">
					<h1 class="time">Contact</h1>
					<P><i class="fa fa-phone" id="phn">{{$rinfos->contact_number}}</i></P>
					<a  class="btn btn-outline-success" href="https://www.facebook.com/cafedarbar/">Goto Facebook</a>
				</div>

			</section>
    @endforeach
    </section>
@endsection