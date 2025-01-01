@extends('admin.layout.app')
@section('content')
    <!-- Content Start -->
    <div class="content">
        <div class="container mt-4 product-detail-section py-5">
            <div class="row m-auto">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-4">Order Summary</h1>
                </div>

                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Color</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Price</th>
                                <th scope="col">status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order->product->name}}</td>
                                    <td>{{$order->product_variants->color}}</td>
                                    <td>{{$order->product_variants->storage}}</td>
                                    <td>{{$order->product_variants->price}}</td>
                                    <td>
                                        @if($order->status == 0)
                                            Pendding
                                        @else
                                            Approved
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="mt-5">Customer Info</h3>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->mobile}}</td>
                                <td>{{$order->user->city}}</td>
                                <td>{{$order->user->address}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row mt-5">
                            <h3>Bank Receipt</h3>
                            <img src="{{asset('front/order/bank_receipt/'.$order->bank_receipt)}}" alt="" style="width: 300px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection
