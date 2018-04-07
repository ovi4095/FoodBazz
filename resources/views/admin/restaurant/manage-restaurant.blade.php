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
                        <th>Restaurant ID</th>
                        <th>Restaurant Name</th>
                        <th>Rating Status</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->restau_id}}</td>
                            <td>{{$restaurant->restau_name}}</td>
                            <td>{{$restaurant->rating}}</td>
                            <td>{{$restaurant->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($restaurant->publication_status == 1)
                                    <a href="{{ url('/restaurant/unpublished-restaurant/'.$restaurant->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/restaurant/published-restaurant/'.$restaurant->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif

                                </a> <a href="{{ url('/restaurant/delete-restaurant/'.$restaurant->id) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
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