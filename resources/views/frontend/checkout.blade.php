@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic details</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 1</label>
                            <input type="text" class="form-control" placeholder="Enter address 1">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 2</label>
                            <input type="text" class="form-control" placeholder="Enter address 2">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">City</label>
                            <input type="text" class="form-control" placeholder="Enter city">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Country</label>
                            <input type="text" class="form-control" placeholder="Enter country">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Pin Code</label>
                            <input type="text" class="form-control" placeholder="Enter pin code">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                   <h6>Order details</h6>
                   <hr>
                   <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                   <tbody>
                    @foreach ($cartitems as $item)
                        <tr>
                            <td>{{$item->products->name}}</td>
                            <td>{{$item->prod_qty}}</td>
                            <td>₦{{$item->products->selling_price}}</td>
                        </tr>
                    @endforeach
    
                    </tbody>
                   </table>
                    <hr>
                    <button class="btn btn-primary float-end">Place Order</button>

                   
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection