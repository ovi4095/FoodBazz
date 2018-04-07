@extends('fornt.newmaster.master2')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
           </br>
           </br>
           </br>
           </br>
               <h3 class="text-danger text-center "> My Order</h3>
           </div>
           </br>
           </br>
           <div class="col-sm-12">
               <div class="panel-body">
                   <table class="table table-bordered hover">
                       <tr>
                           <th>SL No</th>
                           <th>Food Id</th>
                           <th>Food Name</th>
                           <th>Image</th>
                           <th>Food Price</th>
                           <th>Quantity</th>
                           <th>Total Price</th>
                           <th>Cancel Order</th>
                       </tr>
                       @php($i=1)
                       @php($sum=0)
                       @foreach($cartOrders as $cartOrder)
                       <tr>
                           <td>{{$i++}}</td>
                           <td>{{$cartOrder->id}}</td>
                           <td>{{$cartOrder->name}}</td>
                           <td><img src="{{asset($cartOrder->options->image)}}" alt="" height="50" width="50" /></td>
                           <td>Tk{{$cartOrder->price}}</td>
                           <td>{{$cartOrder->qty}}</td>
                           <td>TK{{ $total = $cartOrder->price*$cartOrder->qty}}</td>
                           <td>
                               </a> <a href="{{ url('/delete-order/'.$cartOrder->rowId) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
                                   Cancel
                               </a>
                           </td>
                       </tr>
                           @php ($sum = $sum + $total)
                       @endforeach
                   </table>
                   <table class="table table-bordered hover">
                       <tr>
                           <td>Sub Total</td>
                           <td>Tk. {{$sum}}</td>
                       </tr>
                       <tr>
                           <td>Discount</td>
                           <td>Tk.{{$discount=20}}</td>
                       </tr>
                       <tr>
                           <td>Tax</td>
                           <td>Tk. {{$tax =12}}</td>
                       </tr>
                       <tr>
                           <td>Grand Total</td>
                           <td>Tk. {{$GrandTotal =($sum-$discount)+$tax}}</td>
                       </tr>

                   </table>

               </div>

           </div>

       </div>

   </div>
   </br>
   </br>




@endsection