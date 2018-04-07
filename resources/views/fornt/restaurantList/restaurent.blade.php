@extends('fornt.newmaster.master2')
@section('content')
	<dir class="container">
		<h1 class="animated slideInUp resttitel">Restaurent List</h1>
	</dir>
	<div class="container-fluid">
    @foreach($restaurants as $restau)
		<div class=" cont1 cardi" >
			<div class="column col-sm-12 animated slideInUp">
				    <div class="post-module">
				        <div class="thumbnail">
					        <div class="date">
						        <div class="day">12</div>
						        <div class="month">Dec</div>
					      	</div>{{ HTML::image($restau->restau_img) }}
				        </div>
					    <div class="post-content">
					        <div class="category">Restaurent</div>
					        	<h1 class="title">{{$restau-> restau_name}}</h1>
					        		<h2 class="sub_title">{{$restau-> restau_detail}}</h2>
								        <p class="description">
								        </p>
									        <div class="rating">
										        <h2 class="ratingh">Rating</h2>
													<span class="fa fa-star checked">{{$restau-> rating}}</span>
											</div>
					        <a type="button" class="btn btn-danger" href="{{url('restaurent_info/'.$restau->restau_id)}}">View detail</a>
					    </div>
					</div>
		  	</div>
		</div>
    @endforeach
	</div>
@endsection
