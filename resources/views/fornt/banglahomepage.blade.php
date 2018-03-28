<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>বিডিনেব</title>
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
			  <a class="navbar-brand" href="javascript:void(0)">বিডিনেব </a>
					  <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
					    <span class="navbar-toggler-icon"></span>
					  </button>

			  <div class="navbar-collapse collapse " style="color: white; margin-left: 100px" id="navb">
				    <ul class="navbar-nav mr-auto ">
				      <li class="nav-item active">
				        <a href="#cov" class="btn btn-outline-secondary scroll" style="margin-left: 15px; color: white;">হোম</a>
				      </li>
				      <li class="nav-item">
				        <a class="btn btn-outline-secondary scroll" href="#mapd" data-target="#mappt" data-toggle="collapse"  style="margin-left: 15px; color: white;">মানচিত্র</a>
				      </li>
				       <li class="nav-item">
				         <a class="btn btn-outline-secondary scroll" href="#card"  style="margin-left: 15px; color: white;">স্থানসমূহ</a>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">ভাষাসমূহ
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="{{URL::to('বিডিনেব')}}">বাংলা </a>
						        <a class="dropdown-item" href="{{URL::to('home')}}">ইংরেজি</a>
						      </div>
				      </li>
				      <li class="nav-item dropdown">
					        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">অতিরিক্ত
					        </button>
						      <div class="dropdown-menu">
						        <a class="dropdown-item" href="#">ব্লগ</a>
						        <a class="dropdown-item" href="#">ভ্রমণ করতে ইচ্ছুক</a>
						        <a class="dropdown-item" href="#">ছবি প্রদর্শনী</a>
						        <a class="dropdown-item" href="#">ভিডিও সমূহ</a>
						        <a class="dropdown-item" href="#">আমাদের সাথে যোগাযোগ করুন
</a>
						      </div>
				      </li>
				    </ul>
			  <div class="container-fluid justify-content-end row" >
			  		<a href="#login" class="btn btn-outline-primary scroll col-sm-2" style="margin-right: 50px; color: white;" >লগ ইন করুন</a>
				   <form class="form-inline">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="color: white;">
অনুসন্ধান</button>
  				    </form>
  			  </div>
			  </div>
		</nav>
	</header>


	<section id="cov">
		<div class="bd-example">
		      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
		          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		          <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
		          <li data-target="#carouselExampleCaptions" data-slide-to="2" ></li>
		        </ol>
		        <div class="carousel-inner">
		         @foreach($homeimages as $hmimg)
		          <div class="carousel-item active">
		              <img class="d-block w-100" src="{{URL::to($hmimg->homeslide1_img)}}" data-holder-rendered="true">
		                <div class="carousel-caption d-none d-md-block">
		                  <h1  class="animated slideInUp position" >বিডিনেব এ স্বাগতম</h1>
		                    <p class="animated lightSpeedIn position2">
		                            আমাদের সুন্দর দেশ জানতে একটি দুর্দান্ত উপায়,এই ওয়েবসাইটে আপনাকে আমাদের দেশকে আরও ভালোভাবে জানতে সাহায্য করবে এবং ভ্রমণস্থল, ঐতিহ্যবাহী, স্থানীয় রেস্টুরেন্ট, হোটেল এবং ঐতিহাসিক স্থানগুলিতে আপনার গন্তব্য খুঁজে পাবেন।  আমরা আশা করি আপনি আপনার ট্রিপ উপভোগ করবেন।
		                    </p>
		                </div>
		          </div>
		          <div class="carousel-item">
		            <img class="d-block w-100" src="{{URL::to($hmimg->homeslide2_img)}}" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                    <h1  class="animated zoomIn position" style="margin-left: 50px;">বিডিনেব আপনাকে যা সেবা করবে</h1>
		                      <p class="animated zoomInUp position3">
		                       অবস্থান এবং আমাদের দেশের ঐতিহাসিক পোর্টফোলিও ভাল ভাবে বুঝতে, এর অনেক বৈশিষ্ট্য রয়েছে। যেমন: ব্যবহারসুলভ মানচিত্র, রেস্টুরেন্ট, হোটেল, ফটো গ্যালারী, ঐতিহাসিক স্থান এবং বৈশিষ্ট্যের লক্ষণ, ভিডিও এবং ব্লগ। বিভিন্ন সোশাল মিডিয়ার সাইটগুলি আমাদের সাথে সংযুক্ত এবং যে কেউ আমাদের সাথে যোগাযোগ করতে পারবে। এটি একটি দ্বৈত ভাষা ভিত্তিক সাইট তাই একই বৈশিষ্ট্যগুলো  স্থানীয়রা উপভোগ করতে পারবে।
		                      </p>
		              </div>
		          </div>
		          <div class="carousel-item ">
		            <img class="d-block w-100" src="{{URL::to($hmimg->homeslide3_img)}}" data-holder-rendered="true">
		              <div class="carousel-caption d-none d-md-block">
		                <h1  class="animated bounceInDown position4" >বিডিনেব একটি টুল বক্স</h1>
		                    <p class="animated fadeInDown position2">
		                      এটি বিদেশীদের এবং সেইসাথে স্থানীয় মানুষকে দেশের পথে পরিচালিত করতে সাহায্য করবে। এই সাইটটি দ্বৈত ভাষা সমর্থিত। বিদেশী পর্যটক এমন অনেক স্থান খুঁজে পেতে পারেন যা তাদের আগ্রহী করে তুলবে। তারা যে সমস্ত জায়গাগুলোতে যেতে ইচ্ছুক তাদের এই বেপারে একটি ধারণা দিতে পারবে, এটি তৈরি করা আমাদের জন্য একটি সম্মানজনক কাজ, যা আমাদের দেশের একটি পরিষ্কার চিত্রকে প্রতিনিধিত্ব করে।
		                    </p>
		            </div>
		          </div>
		         @endforeach
		        </div>
		        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">পূর্ববর্তী</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">পরবর্তী</span>
		        </a>
		    </div>
		</div>
	</section >



	<section id="sb">
		<div class="container-fluid map" style="margin: 0px; padding: 0px;">
			<h1 class="maph animated bounceIn">আপনি কি খুজছেন !
</h1>
			<a class="btn btn-outline-success showMap scroll" href="#mapd" data-target="#mappt" data-toggle="collapse">মানচিত্র দেখুন
			</a>
	</section>
	<section id="mapd">
		<div class="collapse mappos" id="mappt">
			<iframe class="mapposition" frameborder="0" allowfullscreen src="map.html"></iframe>
			<a  class="btn btn-outline-success hideMap scroll" href="#cov" data-target="#mappt" data-toggle="collapse">মানচিত্রটি লুকান</a>
		</div>
	</section>

	<section id="card" class="cardContainar">
		<h1 class="cardh animated flipInX" >চেক আউট আমাদের কাছে আপনাদের জন্যে যা আসে।</h1>
		<div class=" cont" style="margin-top: 150px;" >
		@foreach($homeimages as $hmimg)
			<div class="column col-sm-12 card1">
			    <div class="demo-title">হোটেল সমূহ</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ </div>
					      	</div><img src="{{URL::to($hmimg->hotel_img)}}"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">জনপ্রিয় এবং সুন্দর হোটেল</h1>
					        		<h2 class="sub_title">এখানে আপনি আপনার পছন্দের হোটেল খুঁজে পেতে পারেন</h2>
								        <p class="description">
								        </p>
					        <a type="button" class="btn btn-success" href="HotelList.html">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>

			<div class="column col-sm-12 card2">
			    <div class="demo-title">রেস্টুরেন্ট</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ</div>
					      	</div><img src="{{URL::to($hmimg->rest_img)}}"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">জনপ্রিয় এবং সুন্দর রেস্টুরেন্ট</h1>
					        		<h2 class="sub_title">এখানে আপনি অনেক জনপ্রিয় এবং ঐতিহ্যগত খাবারের রেস্টুরেন্ট খুঁজে পেতে পারেন</h2>
								        <p class="description">
								        </p>
					        <a type="button" class="btn btn-success" href="restaurentList.html">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>

		  	<div class="column col-sm-12 card3">
			    <div class="demo-title">স্থানগুলি পরিদর্শন</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ</div>
					      	</div><img src="{{URL::to($hmimg->visit_img)}}"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">জনপ্রিয় স্থানগুলি যেখানে সবার যাওয়া উচিত </h1>
					        		<h2 class="sub_title">আমাদের দেশে ঐতিহাসিক এবং ভৌগোলিক গুরুত্বপূর্ণ স্থানগুলি খুঁজুন এবং পরিদর্শন করুন</h2>
								        <p class="description">
								        </p>
								        <a type="button" class="btn btn-success" href="places.html">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>

		  	<div class="column col-sm-12 card4">
			    <div class="demo-title">চিত্র এবং ভিডিও</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ</div>
					      	</div><img src="{{URL::to($hmimg->gallery_img)}}"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">আমাদের দেশের সুন্দর দিক গুলো দেখুন </h1>
					        		<h2 class="sub_title">আমাদের দেশের সুন্দর দিক গুলো দেখুন এবং আশ্চর্য হউন ঐগুলা দেখে</h2>
								        <p class="description">
								        </p>
					        <a type="button" class="btn btn-success" href="#">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>

		  	<div class="column col-sm-12 card5">
			    <div class="demo-title">ব্লগ এবং সংবাদ</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ</div>
					      	</div><img src="{{URL::to($hmimg->blog_img)}}g"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">আমাদের দেশের সম্পর্কে ভালোভাৱে জানুন</h1>
					        		<h2 class="sub_title">এখানে আপনি ব্লগ, খবর এবং বর্তমান বিষয় সম্পর্কে আপডেট পেতে পারেন</h2>
								        <p class="description">
								        </p>
					        <a type="button" class="btn btn-success" href="#">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>

		  	<div class="column col-sm-12 card6">
			    <div class="demo-title">সম্মেলনস্থান</div>
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">২২</div>
						        <div class="month">মার্চ</div>
					      	</div><img src="{{URL::to($hmimg->forum_img)}}"/>
				        </div>
					    <div class="post-content">
					        <div class="category">ফটো</div>
					        	<h1 class="title">সবার সাথে সংযুক্ত থাকুন</h1>
					        		<h2 class="sub_title">এখানে আপনি প্রশ্ন করতে পারেন এবং আপনার অভিজ্ঞতা শেয়ার করতে পারেন</h2>
								        <p class="description">
								        </p>
					        <a type="button" class="btn btn-success" href="#">আরও শিখুন</a>
					        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i></span><span class="comments"><i class="fa fa-comments"></i><a href="#"></a></span>
					        </div>
					    </div>
					</div>
		  	</div>
		  @endforeach
		</div>
	</section>
	</section>
	<section id="login">
		<h1 class="regh">আমাদের সাথে সংযুক্ত থাকুন</h1>
			<div class="container-fluid">
				<aside class="row" style="margin-left: 10%;">
						<div class="col-sm-6">
							<form>
								<h3 style="margin-left: 5px;margin-top: 150px; color: green; font-size: 25px;font-family:Century Gothic;">এখানে লগইন করুন!</h3>
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

								<button type="submit" class="btn btn-outline-success" style="margin-top: 30px;">লগইন</button>

							</form>
						</div>
						<div class="col-sm-6">
						  			<h3 style="margin-left: 5px;margin-top: 150px; color: green; font-size: 25px;font-family:Century Gothic;">এখানে নিবন্ধন করুন !</h3>
						    <form>
									  <div class="row">
									    <div class="col-sm-8">
									      <input type="text" class="form-control" placeholder="Name">
									    </div>
									  </div>
									  <div class="row" style="margin-top: 20px;">
									  	<div class="col-sm-8" style="margin-right: 15px;">
									      <input type="Email" class="form-control" placeholder="Email Address">
									    </div>
									  </div>
									  <div class="row" style="margin-top: 20px;">
										<div class="col-sm-6" style="margin-right: 15px;">
									      <input type="Password" class="form-control" placeholder="Password">
									    </div>
									  </div>
									  <div class="row" style="margin-top: 20px;">
										<div class="col-sm-6" style="margin-right: 15px;">
									      <input type="Password" class="form-control" placeholder="Re-enter password">
									    </div>
									  </div>
									  <div class="row" style="margin-top: 20px;">
										<div class="col-sm-6" style="margin-right: 15px;">
											<p style="margin-left: 5px;">জন্ম তারিখ</p>
									    	<input class="form-control form-control-sm" type="Date" placeholder="DD/MM/YYYY">
										</div>

									   </div>
									   <div class="row" style="margin-top: 20px;">
										<div class="col-sm-6" style="margin-right: 15px;">
											<p style="margin-left: 5px;">লিঙ্গ</p>
									    		<div class="col-sm-8">
									    			<label class="form-check-label">
				    									<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>পুরুষ
				  									</label>
				  									<label class="form-check-label">
				    									<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>মহিলা
				  									</label>
				  									<label class="form-check-label">
				    									<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>অন্যান্য
				  									</label>
									    		</div>
										</div>
										</div>
										<div class="row">
											<p style="margin-left: 20px;margin-top: 5px;font-size: 20px;">শর্তাবলী</p>
											<div class="row" style="margin-top: 50px; margin-left: -165px;">
												<input class="form-check-input" type="checkbox"> অনুমোদিত।
											</div>

										</div>
										<button type="submit" class="btn btn-outline-success reg" >নিবন্ধন করুন</button>
							</form>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</section>


	<div class="content" style="margin-top: 100px;">
		    <footer id="myFooter">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-3">
		                	<img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
		                    <h2 class="logo"><a href="#">বিডিনেব</a></h2>
		                </div>
		                <div class="col-sm-2">
		                    <h5>এবার শুরু করা যাক</h5>
		                    <ul>
		                        <li><a href="#">হোম</a></li>
		                        <li><a href="#">সাইন আপ করুন</a></li>
		                        <li><a href="#">ডাউনলোড</a></li>
		                    </ul>
		                </div>
		                <div class="col-sm-2">
		                    <h5>আমাদের সম্পর্কে</h5>
		                    <ul>
		                        <li><a href="#">কোম্পানির তথ্য</a></li>
		                        <li><a href="#">আমাদের সাথে যোগাযোগ করুন</a></li>
		                        <li><a href="#">রিভিউ</a></li>
		                    </ul>
		                </div>
		                <div class="col-sm-2">
		                    <h5>সাহায্য সমূহ</h5>
		                    <ul>
		                        <li><a href="#">প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী</a></li>
		                        <li><a href="#">সাহায্য ডেস্ক</a></li>
		                        <li><a href="#">ফোরাম</a></li>
		                    </ul>
		                </div>
		                <div class="col-sm-3">
		                    <h5>যোগাযোগ</h5>
		                    <ul>
		                        <li><a href="#">টুইটার</a></li>
		                        <li><a href="#">ফেসবুক</a></li>
		                        <li><a href="#"> গুগল+</a></li>
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

