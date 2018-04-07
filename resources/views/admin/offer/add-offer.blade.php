@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                    <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <form class="form-horizontal" action="{{url('/offer/new-offer')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm=3">Order id</label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_id" class="form-control">
                            <span class="text-danger">{{$errors->has('offer_id') ? $errors->first('offer_id') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Offer Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="offer_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm=3">Restaurent Name</label>
                            <div class="col-sm-9">
                                <select type="text" name="restau_name" class="form-control">
                                    <option>--Select Restaurent Name--</option>
                                    @foreach($publishedRestaurents as $publishedRestaurents )
                                        <option >{{$publishedRestaurents->restau_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Detaile</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="restau_detail"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="price"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="btn btn-danger" name="offer_img" accept="image/*">
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