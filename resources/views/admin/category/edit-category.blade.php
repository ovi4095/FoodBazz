@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                @if($message = Session::get('message'))
                    <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <form name="editCategoryFrom" class="form-horizontal" action="{{url('/category/update-category')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm=3">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->category_name }}" name="category_name" class="form-control">
                            <input type="hidden" value="{{ $category->id }}" name="category_id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm=3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="category_description">{{$category->category_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-danger btn-block" value="Update  Category Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryFrom'].elements['publication_status'].value='{{ $category->publication_status }}';
    </script>
@endsection