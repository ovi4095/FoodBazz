@extends('fornt.newmaster.master2')
@section('content')
<!-- Page Content -->
<div class="container">

    <div class="row" style="margin: 0%; padding:0%;">

        <div class="col-sm-12">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{url('images/o1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{url('images/o2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{url('images/o3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
                @foreach($offers as $offer)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::to($offer->offer_img)}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>{{$offer->offer_name}}</h3>
                            </h4>
                            <h5>{{$offer->restaurant_name}}r</h5>
                            <p class="card-text">{{$offer->restau_detail}}</p>
                            <p class="card-text">Tk {{$offer->price}}</p>
                        </div>
                        <div class="card-footer">
                            <a type="button" class="btn btn-danger" href="{{url($offer->offer_link)}}">Order</a>
                        </div>
                    </div>
                </div>
                @endforeach


        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
</div>

@endsection