@extends('fornt.master')

@section('content')
    <h3 style="margin-left: 50%;margin-top: 150px; color: green; font-size: 25px;font-family:Century Gothic;">Log in Here !</h3>
    <div class="container-fluid">
        <aside class="row" style="margin-left: 10%;">
            <div class="col-sm-10	">
                <div class="column col-sm-12 card3 post-content">
                    <h1 class="regh">{{Session::get('message')}}</h1>
                    <form action="{{url('/customer-login')}}" method="POST" style="margin-left: 500px">
                        {{ csrf_field() }}
                        <h3 style="margin-left: 5px;margin-top: 150px; color: black; font-size: 25px;font-family:Century Gothic;">Log in here!</h3>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-8" style="margin-right: 15px;">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-8" style="margin-right: 15px;">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <input type="submit" class="btn btn btn-outline-danger" style="margin-top: 30px;" value="Log in"/>

                        <p class="cardh" style="font-size: 22px; text-align: left; margin-right: 100px;margin-top: 10px;">Don't have a account, click <a class="" href="/register-now">Sing up</a> now!</p>

                    </form>
                </div>
            </div>
    </div>

@endsection