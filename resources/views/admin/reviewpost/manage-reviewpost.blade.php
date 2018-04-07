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
                        <th>Post ID</th>
                        <th>Restaurant Name</th>
                        <th>Food Name</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                    @foreach($reviewposts as $reviewpost)
                        <tr>
                            <td>{{$reviewpost->id}}</td>
                            <td>{{$reviewpost->restaurent_name}}</td>
                            <td>{{$reviewpost->food_name}}</td>
                            <td>{{$reviewpost->food_rating}}</td>
                            <td>
                            </a> <a href="{{ url('/rewiewpost/delete-reviewpost/'.$reviewpost->id) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
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