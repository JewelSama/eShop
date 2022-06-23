@extends('layouts.front')

@section('title')
    {{$products->name}}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{$products->category->name}} / {{$products->name}}</h6>
    </div>
</div>


<div class="container">
    <div class="card shadow">
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
                <label for="" class="me-3">Original Proce: <s>Rs {{$products->original_price}}</s></label>
                <label for="" class="fw-bold">Original Proce: Rs {{$products->selling_price}}</label>
                <p class="mt-3">
                    {{!! $products->small_description}}
                </p>
                <hr>
                @if ($products->qty > 0)
                    <label for="" class="badge bg-success">In stock</label>
                    @else
                    <label for="" class="badge bg-danger">Out Of Stock</label>
                @endif
                <div class="row mt-2">
                    <div class="col-md-2">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3">
                            <span class="input-group-text">-</span>
                            <input type="text" name="quantity" value="1" class="form-control">
                            <span class="input-group-text">+</span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <br/>
                        <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist</button>
                        <button type="button" class="btn btn-primary me-3 float-start">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection