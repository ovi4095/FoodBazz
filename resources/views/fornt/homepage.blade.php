@extends('fornt.master')

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
		        @foreach($homepages as $hmimg)
		          <div class="carousel-item active">
		              <img class="d-block w-100" src="{{URL::to($hmimg->homeslide1_img)}}" alt="First slide" data-holder-rendered="true">
		                <div class="carousel-caption d-none d-md-block">
		                  <h1  class="animated slideInUp position" >Welcome To FoodBazz</h1>
		                    <p class="animated lightSpeedIn position2">

		                    </p>
		                </div>
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="{{URL::to($hmimg->homeslide2_img)}}" alt="Second slide" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                   <h1  class="animated zoomIn position">FoodBazz will give you</h1>
		                      <p class="animated zoomInUp position3">

		                      </p>
		              </div>
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="{{URL::to($hmimg->homeslide3_img)}}" alt="Third slide" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                <h1  class="animated bounceInDown position4" >FoodBazz Is a tool</h1>
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



	<section id="sb">
		<div class="container-fluid map" style="margin: 0px; padding: 0px;">
			<h1 class="maph animated bounceIn">What are you looking for !</h1>
			<a class="btn btn-outline-danger showMap scroll" href="#mapd" data-target="#mappt" data-toggle="collapse">See The Map
			</a>
	</section>
	<section id="mapd">
		<div class="collapse mappos" id="mappt">
			<iframe class="mapposition" frameborder="0" allowfullscreen src="{{URL::to('map')}}"></iframe>
			<a  class="btn btn-outline-danger hideMap scroll" href="#cov" data-target="#mappt" data-toggle="collapse">Hide The Map</a>
		</div>
	</section>

	<section id="card" class="cardContainar">
		<h1 class="cardh animated flipInX" >Check out! What we have for you.</h1>
		<div class=" cont" style="margin-top: 150px;" >
		@foreach($homepages as $hmimg)
			<div class=" cont dst" >
				<div class="column col-sm-12 card2">
				    <div class="demo-title">restaurant</div>
					    <div class="post-module">
					        <div class="thumbnail">
						        <div class="date">
							        <div class="day">23</div>
							        <div class="month">Nov</div>
						      	</div><img src="{{URL::to($hmimg->rest_img)}}"/>
					        </div>
						    <div class="post-content">
						        <div class="category">Photos</div>
						        	<h1 class="title">Most popular food restaurants are in Here</h1>
						        		<h2 class="sub_title"></h2>
									        <p class="description">
									        </p>
						        <a type="button" class="btn btn-danger" href="{{URL::to('restaurent_list')}}">learn more</a>
						        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
						        </div>
						    </div>
						</div>
				</div>
			</div>

			<div class=" cont dst" >
				<div class="column col-sm-12 card3">
				    <div class="demo-title">Offers</div>
					    <div class="post-module">
					        <div class="thumbnail">
						        <div class="date">
							        <div class="day">23</div>
							        <div class="month">Nov</div>
						      	</div><img src="{{URL::to($hmimg->offer_img)}}"/>
					        </div>
						    <div class="post-content">
						        <div class="category">Photos</div>
						        	<h1 class="title">See whats new for you</h1>
						        		<h2 class="sub_title"></h2>
									        <p class="description">
									        </p>
						        <a type="button" class="btn btn-danger" href="{{URL::to('offer-list')}}">learn more</a>
						        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
						        </div>
						    </div>
						</div>
				</div>
			</div>


		  	<div class=" cont dst" >
				<div class="column col-sm-12 card4">
				    <div class="demo-title">Post Review</div>
					    <div class="post-module">
					        <div class="thumbnail">
						        <div class="date">
							        <div class="day">23</div>
							        <div class="month">Nov</div>
						      	</div><img src="{{URL::to($hmimg->review_img)}}"/>
					        </div>
						    <div class="post-content">
						        <div class="category">Photos</div>
						        	<h1 class="title">Post what you thing about foods you like</h1>
						        		<h2 class="sub_title"></h2>
									        <p class="description">
									        </p>
						        <a type="button" class="btn  btn-danger" href="{{url('/post-review/')}}">learn more</a>
						        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
						        </div>
						    </div>
						</div>
				</div>
			</div>
		 @endforeach
		</div>
	</section>
	</section>
	<section id="login">
		<h1 class="regh">Connect with us !</h1>
			<div class="container-fluid">
				<aside class="row" style="margin-left: 10%;">
						<div class="col-sm-10	">
							<div class="column col-sm-12 card3 post-content">
								<form style="margin-left: 500px">
									<h3 style="margin-left: 5px;margin-top: 150px; color: black; font-size: 25px;font-family:Century Gothic;">Log in here!</h3>
									<div class="row" style="margin-top: 20px;">
										<div class="col-sm-8" style="margin-right: 15px;">
											<input type="Email" class="form-control" placeholder="Email Address">
										</div>
									</div>
									<div class="row" style="margin-top: 20px;">
										<div class="col-sm-8" style="margin-right: 15px;">
											<input type="Password" class="form-control" placeholder="Password">
										</div>					  	
									</div>

									<button type="submit" class="btn btn btn-outline-danger" style="margin-top: 30px;">Log in</button>

									<p class="cardh" style="font-size: 22px; text-align: left; margin-right: 100px;margin-top: 10px;">Don't have a account, click <a class="" href="registration.html">Sing up</a> now!</p>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</section>

	@endsection