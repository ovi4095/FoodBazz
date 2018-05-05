<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>FoodBuzz</title>
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
    <link href="{{asset('/offer/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/offer/')}}css/shop-homepage.css" rel="stylesheet">
    <script src="{{asset('/offer/')}}vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/offer/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('/review/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/review/')}}css/1-col-portfolio.css" rel="stylesheet">

</head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark headerStyle navbar fixed-top " style="">
            <img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
            <a class="navbar-brand" href="javascript:void(0)">FoodBuzz</a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse " style="color: white; margin-left: 100px" id="navb">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a href="{{URL::to('/')}}" class="btn btn-outline-secondary " style="margin-left: 15px; color: white;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">Language
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">More
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('restaurent_list')}}">Restaurant</a>
                            <a class="dropdown-item" href="{{url('offer-list')}}">Offers</a>
                            <a class="dropdown-item" href="#"></a>
                        </div>
                    </li>
                </ul>
                <div class="container-fluid justify-content-end row" >
                    @if(Session::get('cutomerId'))
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            @foreach($customers as $cust)
                                <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle  fa fa-user fa-fw" href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">{{$cust->first_name}}</button>
                            @endforeach
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/welcome')}}">Home</a>
                                <a class="dropdown-item" href="{{url('/customer-logout')}}">Logout</a>
                            </div>
                        </li>

                    </ul>
                    @else
                        <a href="#login" class="btn btn-outline-primary scroll col-sm-1" style=" margin-left: 10px; width: 50px; color: white;" >Sign in</a>
                    @endif
                </div>
            </div>
        </nav>
    </header>
<body>

<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row container" style="margin-left: 25%;">
    <div class="col-sm-8">
        <div class="well">
            <form class="form-control " action="{{url('/post-new-review')}}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="" class="col-sm=3 " style="margin-left: 5%;">Restaurent Name</label>
                    <div class="col-sm-9">
                        <select type="text" name="restaurent_name" class="form-control">
                            <option>--Select Restaurent Name--</option>
                            @foreach($publishedRestaurents as $publishedRestaurents )
                                <option >{{$publishedRestaurents->restau_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3" style="margin-left: 5%;">Food Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="food_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3" style="margin-left: 5%;">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3" style="margin-left: 5%;">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="food_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3" style="margin-left: 5%;">Rating</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="food_rating" value="1" max="5"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="submit" name="btn" class="btn btn-danger btn-block" value="Post Review">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">

    <!-- Project One -->
    @foreach($reviewposts as $reviewpost)
    <div class="container row border">
        <div>
        <div class="col-md-7 border" style="margin-top: 30px;">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{url($reviewpost->food_img)}}" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{$reviewpost->restaurent_name}}</h3>
            <h4>{{$reviewpost->food_name}}</h4>
            <p>{{$reviewpost->description}}</p>
            <h6>Rating: {{$reviewpost->food_rating}} </h6>

        </div>
        </div>
        <br/>


    </div>
    @endforeach

</div>

<div class="content" style="margin-top: 100px;">
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
                    <h2 class="logo"><a href="#"> FoodBuzz </a></h2>
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


{!!HTML ::script("js/qunit.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js")!!}
{!!HTML ::script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
{!!HTML ::script("js/bootstrap.min.js")!!}
{!!HTML ::script("js/index.js")!!}
<script src="{{asset('/offer/')}}vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/offer/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>