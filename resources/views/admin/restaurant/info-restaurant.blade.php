@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                    <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <form class="form-horizontal" action="{{url('/restaurant/addinfo-restaurant')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="" class="col-sm=3">Restaurent Name</label>
                        <div class="col-sm-9">
                            <select type="text" name="restaurent_name" class="form-control">
                                <option>--Select Restaurent Name--</option>
                                @foreach($publishedRestaurents as $publishedRestaurents )
                                    <option >{{$publishedRestaurents->restau_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Slide1</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="slide1_img" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Slide2</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="slide2_img" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Slide3</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="slide3_img" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Menu</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="manu_img" accept="image/*"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm=3">Review 1</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="review1_img" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Review 2</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="review2_img" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Review 3</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="review3_img" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Review 4</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="review4_img" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Map Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="map_img" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Map Url</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="map_url"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Contact Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="contact_number"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Facebook Link</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="fb_link"></textarea>
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