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
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Product</th>
                            <th scope="col">Color</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $oder)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$oder->user->name}}</td>
                                <td>{{$oder->product->name}}</td>
                                <td>{{$oder->product_variants->color}}</td>
                                <td>{{$oder->product_variants->storage}}</td>
                                <td>{{$oder->product_variants->price}}</td>
                                <td>
                                    @if($oder->status == 0) Pendding @else Approved @endif
                                </td>
                                <td>
                                    <a href="{{route('customer_info',$oder->id)}}" class="btn btn-primary">User Info</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection
