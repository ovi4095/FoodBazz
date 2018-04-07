@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                    <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <form class="form-horizontal" action="{{url('/category/new-category')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm=3">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="category_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="category_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Publiceation Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="publication_status">
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="submit" name="btn" class="btn btn-danger btn-block" value="Save Category Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection