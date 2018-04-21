@extends('fornt.newmaster.master2')
@section('content')
    <div class="container">

        <br/>
        <br/>
        <br/><br/>
        <br/>
        <br/><br/>
        <br/>
        <h1 class="text-center text-success">Shipping From Here</h1>
        <br/>
        <table class="table table-bordered hover">
            <tr>
                <th>
                    Cash On Delivery
                </th>
                <th><input type="radio" name="payment_type" value="Cash On Delivery" /></th>
            </tr>
             <tr>
                <th>
                    BKash
                </th>
                <th><input type="radio" name="payment_type" value="BKash" /></th>
            </tr>
            <tr>
                <th>
                    Paypal
                </th>
                <th><input type="radio" name="payment_type" value="Paypal" /></th>
            </tr>
        </table>
        <a type="button" value="" class="btn btn-success" href="{{url('offer-list')}}">seve Shipping Info</a>
    </div>
    <br/>
    <br/>
    <br/><br/>
    <br/>
    <br/><br/>
    <br/>
    <br/><br/>
    <br/>
    <br/>

@endsection