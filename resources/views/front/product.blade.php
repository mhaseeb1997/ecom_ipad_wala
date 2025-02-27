@extends('front.layout.main')
@section('front')
    <style>
        .product-card {
            max-width: unset;
        }
    </style>
    <section class="hero-section">
        <div class="row">
            <img src="{{asset('front/images/AboutHeroSec.png')}}" decoding="async" alt="Hero Background Image">
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            @foreach($products as $item)
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-5">
                    <a href="{{route('front-product-detail',$item->slug)}}"
                       style="text-decoration: none; color: black;">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{asset('front/product/'.$item->thumbnail)}}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <p class="product-name">{{$item->name}}</p>
                                <p class="product-condition">Condition: Pre-Loved | Top</p>
                                <div class="price">
                                    <p class="current-price">AED 549.00</p>
                                    <p class="discounted-price"><small>
                                            <del>AED 600</del>
                                            <span> 50% less vs
                                                    new</span></small></p>
                                </div>
                                <div class="delivery-info">
                                    <p>🚚 Express Delivery, in 72 hours</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
@push('front-js')
@endpush
