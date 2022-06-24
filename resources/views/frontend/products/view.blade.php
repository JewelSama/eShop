@extends('layouts.front')

@section('title')
    {{$products->name}}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{url('category')}}">
                Collections
            </a>/
            <a href="{{url('view-category/'.$products->category->slug)}}">
                {{$products->category->name}}
            </a>/
            <a href="{{url('view-category/'.$products->category->slug.'/'.$products->slug)}}">
                {{$products->name}}
            </a>
        </h6>
    </div>
</div>


<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/uploads/products/'.$products->image)}}" class="w-100" alt="">
            </div>
            <div class="col-md-8">
                <h2 class="mb-0">
                    {{$products->name}}
                    <label style="font-size: 16px" for="" class="float-end badge bg-danger trending-badge">{{$products->trending == '1' ? 'Trending' : ''}}</label>
                </h2>

                <hr>
                <label for="" class="me-3">Original Proce: <s>₦{{$products->original_price}}</s></label>
                <label for="" class="fw-bold">Original Proce: ₦{{$products->selling_price}}</label>
                <p class="mt-3">
                    {!! $products->small_description !!}
                </p>
                <hr>
                @if ($products->qty > 0)
                    <label for="" class="badge bg-success">In stock</label>
                    @else
                    <label for="" class="badge bg-danger">Out Of Stock</label>
                @endif
                <div class="row mt-2">
                    <div class="col-md-2">
                        <input type="hidden" value="{{$products->id}}" class="prod_id">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" name="quantity" value="1" class="form-control text-center qty-input">
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                    </div>
                    <div class="col-md-10">

                    @if ($products->qty > 0)
                    <label for="" class="badge bg-success">In stock</label>
                    <button type="button" class="btn btn-primary me-3  addToCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                @endif
                        <br/>
                        <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist<i class="fa fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <h3>Description</h3>
            <p class="mt-3">
                {!! $products->description !!}
            </p>
        </div>
        </div>
    </div>
</div>
@endsection



