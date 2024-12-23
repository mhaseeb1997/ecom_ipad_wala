@extends('front.layout.main')
@section('front')
    <div class="container mt-4 product-detail-section py-5">
        <div class="row m-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-4">Order Summary</h1>
                <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()" style="font-size: 20px; font-weight: bold; color: red">
                    <p>Logout</p>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">
                        <?php echo csrf_field(); ?>
                    </form>
                </a>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Color</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $oder)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$oder->product->name}}</td>
                                <td>{{$oder->product_variants->color}}</td>
                                <td>{{$oder->product_variants->storage}}</td>
                                <td>{{$oder->product_variants->price}}</td>
                                <td>
                                    @if($oder->status == 0) Pendding @else Approved @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('front-js')

@endpush
