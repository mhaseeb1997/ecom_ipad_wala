@extends('front.layout.main')
@section('front')
    <!-- hero section -->
    <section class="hero-section">
        <div class="row">
            <img src="{{asset('front/images/AboutHeroSec.png')}}" decoding="async" alt="Hero Background Image">
        </div>
    </section>
    <!-- product section for mac book  -->
    <div class="container">
        <div class="productp-section">
            <div class="productp-content">
                <div class="productp-text">
                    <h3>Our Mission
                    </h3>
                    <p>
                        We bring authentic, original Apple products in pristine condition to the people of Pakistan.
                        With
                        high import costs and limited supply driving up prices locally, we’re dedicated to making
                        premium
                        Apple technology accessible and affordable for everyone. We believe in the power of technology
                        to
                        drive change, and by expanding access to Apple products, we aim to enhance digital literacy and
                        support the growth of Pakistan’s IT industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <img src="{{asset('front/images/WhyChooseUSDesktop.png')}}" class="whychoose" style="margin: 30px 0;"
                 alt="why Choose ipad wala">
            <img src="{{asset('front/images/WhyChooseUSForPhone.png')}}" class="whychooseforPhone" style="margin: 0 0 10px 0; "
                 alt="why Choose ipad wala">

        </div>
    </div>
    <!-- about last portion  our value -->
    <section class="values">
        <div class="row">
            <h2>Our Values</h2>
        </div>
        <div class="values-container">
            <div class="value-item">
                <div class="imagg">
                    <img src="{{asset('front/images/inspired.png')}}" alt="Inspired">
                </div>
                <div>
                    <h3>Authentic</h3>
                    <p>
                        We guarantee 100% original Apple products, imported without repairs or alterations, ensuring you
                        always get the real deal. </p>

                </div>
            </div>
            <div class="value-item">
                <img src="{{asset('front/images/reliability.png')}}" alt="Authentic">
                <h3>Trustworthy</h3>
                <p>With transparent processes and a proven track record, we prioritize earning and keeping your trust
                    every
                    step of the way.</p>
            </div>
            <div class="value-item">
                <img src="{{asset('front/images/determined.png')}}" alt="Tenacious">
                <h3>Transparency</h3>
                <p>From pricing to product grading, we believe in clear, honest communication so you can shop with
                    confidence.</p>
            </div>
            <div class="value-item">
                <img src="{{asset('front/images/together.png')}}" alt="Together">
                <h3>Customer Care</h3>
                <p>Your satisfaction is our priority, backed by a 7-day, no-questions-asked return policy and dedicated
                    support.</p>
            </div>
        </div>
    </section>
    <!-- about company section  -->
    <div class="container">
        <div class="product-section">
            <div class="product-content">
                <div class="product-text">
                    <h3>A Growing Legacy</h3>
                    <p>
                        Operating in the UAE since 2017 and now expanding to Pakistan, iPad Wala is built on trust and
                        quality. With a team of 43 dedicated professionals and over 10,000 happy customers in the UAE,
                        we’re
                        here to give Apple products a second life and make a positive impact on the tech landscape. <br>
                        Join us in transforming how Pakistan experiences technology—shop smart, support local, and
                        elevate
                        your Apple experience with iPad Wala! </p>
                </div>
                <div class="product-image">
                    <img src="{{asset('front/images/steve.jpg')}}" style="width: 450px; height: 450PX;" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
@push('front-js')
@endpush

