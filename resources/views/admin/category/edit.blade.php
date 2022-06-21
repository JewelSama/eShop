@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit & Update category</h4>
        </div>
        <div class="card-body">
        <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{$category->name}}" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{$category->slug}}" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <input type="text" value="{{$category->description}}" class="form-control" rows="3" name="description">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"{{$category->status == "1" ? 'checked' : ''}} name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{$category->popular == "1" ? 'checked' : ''}} name="popular">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text"  value="{{$category->meta_title}}" class="form-control" name="meta_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text"  value="{{$category->meta_keywords}}" class="form-control" name="meta_keywords">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text"  value="{{$category->description}}" class="form-control" name="meta_description">
                </div>
                @if ($category->image)
                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Category image">
                @endif
                <div class="col-md-12">
                    <input type="file"  value="{{$category->meta_description}}" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection