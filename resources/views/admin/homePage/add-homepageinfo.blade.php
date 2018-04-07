@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                    <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <form class="form-horizontal" action="{{url('/homepage/new-homePageInfo')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm=3">Home page title</label>
                        <div class="col-sm-9">
                            <input type="text" name="home_title" class="form-control">
                            <span class="text-danger">{{$errors->has('home_title') ? $errors->first('home_title') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Home Slide 1</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="homeslide1_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Home Slide 2</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="homeslide2_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Home Slide 3</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="homeslide3_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Restaurent</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="rest_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Offer</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="offer_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Review</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="review_img" accept="image/*">
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
@endsection