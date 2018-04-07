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


</head>
<body>

@include('fornt.newmaster.header')
@yield('content')
@include('fornt.newmaster.footer')


{!!HTML ::script("js/qunit.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js")!!}
{!!HTML ::script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js")!!}
{!!HTML ::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
{!!HTML ::script("js/bootstrap.min.js")!!}
{!!HTML ::script("js/index.js")!!}



</body>
</html>