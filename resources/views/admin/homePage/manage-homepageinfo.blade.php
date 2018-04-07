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
                        <th>Home ID</th>
                        <th>Home title</th>
                        <th>HomeSlied1</th>
                        <th>HomeSlied2</th>
                        <th>HomeSlied3</th>
                        <th>Restaurant</th>
                        <th>Offer</th>
                        <th>Review</th>
                        <th>Action</th>
                    </tr>
                    @foreach($homepages as $homepage)
                        <tr>
                            <td>{{$homepage->id}}</td>
                            <td>{{$homepage->home_title}}</td>
                            <td>{{$homepage->homeslide1_img}}</td>
                            <td>{{$homepage->homeslide2_img}}</td>
                            <td>{{$homepage->homeslide3_img}}</td>
                            <td>{{$homepage->rest_img}}</td>
                            <td>{{$homepage->offer_img}}</td>
                            <td>{{$homepage->review_img}}</td>
                            <td>

                                <a href="{{ url('/homepage/delete-homePageInfo/'.$homepage->id) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
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