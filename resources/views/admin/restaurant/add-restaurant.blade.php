@extends('admin.master')
@section('content')
<br/>
<div class="row">
    <div class="col-sm-12">
        <div class="well">
            @if($message = Session::get('message'))
                <h3 class="text-center text-success">{{ $message }}</h3>
            @endif
            <form class="form-horizontal" action="{{url('/restaurant/new-restaurant')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm=3">Restaurant id</label>
                    <div class="col-sm-9">
                        <input type="text" name="restau_id" class="form-control">
                        <span class="text-danger">{{$errors->has('restau_id') ? $errors->first('restau_id') : ' '}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm=3">Restaurant Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="restau_name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm=3">Restaurent Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="restau_detail"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm=3">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="btn btn-danger" name="restau_img" accept="image/*">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm=3">Rating</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="rating"></input>
                    </div>
                </div>
                <div class="form-group">
                <label class="col-sm=3">Link</label>
                <div class="col-sm-9">
                    <input class="form-control" name="rest_link"></input>
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
                        <input type="submit" name="btn" class="btn btn-danger btn-block" value="Save Restaurant Info">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection