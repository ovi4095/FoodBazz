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
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->category_description}}</td>
                        <td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            @if($category->publication_status == 1)
                            <a href="{{ url('/cstegory/unpublidhed-cstegory/'.$category->id) }}" class="btn btn-info btn-xs" title="Published">
                                <span class="glyphicon glyphicon-arrow-up"></span>
                            </a>
                            @else
                            <a href="{{ url('/cstegory/publidhed-cstegory/'.$category->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </a>
                            @endif
                            <a href="{{ url('/cstegory/edit-cstegory/'.$category->id) }}" class="btn btn-primary btn-xs" title="Edit">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a> <a href="{{ url('/cstegory/delete-cstegory/'.$category->id) }}" onclick="return confirm('Are you really want to delete this?');" class="btn btn-danger btn-xs" title="Delete">
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