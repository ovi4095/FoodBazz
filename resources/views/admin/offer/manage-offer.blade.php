@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        @if($message = Session::get('message'))
            <h3 class="text-center text-success">{{ $message }}</h3>
        @endif
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Offer ID</th>
                        <th>Offer Name</th>
                        <th>Restaurant Name</th>
                        <th>Price</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{$offer->offer_id}}</td>
                            <td>{{$offer->offer_name}}</td>
                            <td>{{$offer->restaurant_name}}</td>
                            <td>{{$offer->price}} Tk</td>
                            <td>{{$offer->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($offer->publication_status == 1)
                                    <a href="{{ url('/offer/unpublished-offer/'.$offer->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/offer/published-offer/'.$offer->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                    </a> <a href="{{ url('/offer/delete-offer/'.$offer->id) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection