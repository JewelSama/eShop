@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add category</h4>
        </div>
        <div class="card-body">
        <form action="{{url('insert-category')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" rows="3" name="description">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description">
                </div>
                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection