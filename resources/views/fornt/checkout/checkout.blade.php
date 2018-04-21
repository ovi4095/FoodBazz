@extends('fornt.newmaster.master2')
@section('content')
    <br/>
    <br/>
    <br/>
    <br/>
    <h3 class=" text-success text-center">Welcome to checkout process. You have to login to complete your order. <br/> If you are not registered then please register first. Thanks!</h3>
    <div class="container-fluid">
        <aside class="row" style="margin-left: 10%;">
            <div class="col-sm-6">
                <form action="{{url('/new-customer')}}" method="POST">
                    <h3 style="margin-left: 5px;margin-top: 150px; color: green; font-size: 25px;font-family:Century Gothic;">Log in here!</h3>
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

                    <input type="submit" value="Login"  class="btn btn-outline-success" style="margin-top: 30px;"/>

                </form>
            </div>
            <div class="col-sm-6">
                <h3 style="margin-left: 5px;margin-top: 150px; color: green; font-size: 25px;font-family:Century Gothic;">Register Here !</h3>
                <form action="{{url('/new-customer')}}" method="POST" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="first_name" placeholder="Name">
                            <span>{{$errors->has('first_name')? $errors->first('first_name'): ' ' }}</span>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="last_name" placeholder="Name">
                            <span>{{$errors->has('last_name')? $errors->first('last_name'): ' ' }}</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-8" style="margin-right: 15px;">
                            <input type="Email" class="form-control"  name="email" placeholder="Email Address">
                            <span>{{$errors->has('email')? $errors->first('email'): ' ' }}</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-6" style="margin-right: 15px;">
                            <input type="Password" class="form-control" name="password" placeholder="Password">
                            <span>{{$errors->has('password')? $errors->first('password'): ' ' }}</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-6" style="margin-right: 15px;">
                            <input type="number" class="form-control" name="phone_number" placeholder="Phone Number">
                            <span>{{$errors->has('phone_number')? $errors->first('phone_number'): ' ' }}</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-6" style="margin-right: 15px;">
                            <textarea  class="form-control" name="address" placeholder="Address"></textarea>
                            <span>{{$errors->has('address')? $errors->first('address'): ' ' }}</span>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-success reg" value="Register"/>
                </form>
            </div>
        </aside>
    </div>


@endsection