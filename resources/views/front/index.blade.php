@extends('front.layout.main')
@section('front')

    <style>
        /* Loader Styling */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(37, 37, 37, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            z-index: 9999;
        }

        .loader img {
            width: 85px;
        }

        /* Hide carousel initially */
        .home-hero-carousel {
            display: none;
        }
    </style>
    <div id="loader" class="loader">
        <img src="{{asset('front/images/LOADER.gif')}}" alt="Loading..."/>
    </div>
    <section class="hOomehero-section">
        <div class="home-hero-carousel owl-carousel owl-theme">
            <div class="slider-item">
                <img src="{{asset('front/images/HomeHeroSec1.png')}}" alt="Hero Image 1"/>

            </div>
            <div class="slider-item">
                <img src="{{asset('front/images/HomeHeroSec2.png')}}" alt="Hero Image 2"/>
            </div>
            <!-- <div class="slider-item">
            <img src="images/HomeHeroSec3.png" alt="Hero Image 3" />
        </div> -->
        </div>
    </section>


    <!--Feature Section three cards -->
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2 mb-4">
                <div class="feature-box  p-1">
                    <img src="{{asset('front/images/ipad.png')}}" alt="Stylish Accessories" class="mb-3">
                    <h4>100% Tested Deveices</h4>
                    <p class="text-muted">Every iPad in our stock is tested for quality and performace.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 mb-4">
                <div class="feature-box  p-1">
                    <img src="{{asset('front/images/customerserviceagent.png')}}" alt="Innovative Designs" class="mb-3">
                    <h4>After Sale Support</h4>
                    <p class="text-muted">Enjoy seamless after-sales dadicated support for your iPad setup.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mb-4">
                <div class="feature-box  p-1">
                    <img src="{{asset('front/images/freeshipping.png')}}" alt="Elevate Your Style" class="mb-3">
                    <h4>Free Delivery + Packaging Video</h4>
                    <p class="text-muted">Free delivery all over Pakistan with packaging video of every order we
                        ship.</p>
                </div>
            </div>
        </div>
    </div>

    @if(count($products) > 0)
        <div class="container">
            <div class="home-demo">
                <h3 style="justify-content: center; text-align: center; margin: 30px 0;">Our Products</h3>
                <div class="container">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-5">
                                <a href="{{route('front-product-detail',$product->slug)}}"
                                   style="text-decoration: none; color: white;">
                                    <div class="product-card">
                                        <div class="product-image">
                                            <img src="{{asset('front/product/'.$product->thumbnail)}}" alt="Product Image">
                                        </div>
                                        <div class="product-info">
                                            <p class="product-name">{{$product->name}}</p>
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

            </div>
        </div>
    @endif
    <!-- reviews  -->

    <div class="container">
        <h3 class="text-center mb-4">Customer Reviews</h3>
        <div class="home-review-carousel owl-carousel owl-theme">
            <div class="slider-item">
                <div class="review">
                    <p class="review-author">- John Doe</p>

                    <p class="review-text">"Amazing product! Great value for money."</p>
                    <div class="stars">
                        ★★★★★
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="review">
                    <p class="review-author">- John Doe</p>

                    <p class="review-text">"Amazing product! Great value for money."</p>
                    <div class="stars">
                        ★★★★★
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="review">
                    <p class="review-author">- John Doe</p>

                    <p class="review-text">"Amazing product! Great value for money."</p>
                    <div class="stars">
                        ★★★★★
                    </div>
                </div>
            </div>
            <!-- <div class="slider-item">
            <img src="images/HomeHeroSec3.png" alt="Hero Image 3" />
        </div> -->
        </div>
    </div>

    <!-- ------/* General section styling for connectivity */---------------------- -->

    <div class="container">
        <div class="">
            <h3 style="justify-content: center; text-align: center; margin: 30px 0;">Endless possibilities</h3>
            <div class="owl-carousel owl-theme endless-possibilities">
                <div class="item">
                    <a href="Index.html">
                        <img src="{{asset('front/images/ipadnormal.png')}}" alt="series 1"></a>
                    <h3 class="text-center">iPad</h3>
                </div>
                <div class="item">
                    <a href="Index.html">
                        <img src="{{asset('front/images/iPadMini.png')}}"
                             alt="Smartwatch 2"></a>
                    <a href="Index.html">
                        <h3 class="text-center">iPad Mini</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html">
                        <img src="{{asset('front/images/IpadAir.png')}}" alt="Smartwatch 3"></a>
                    <a href="Index.html">
                        <h3 class="text-center">iPad Air</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html">
                        <img src="{{asset('front/images/IpadPro.png')}}" alt="Smartwatch 4">
                    </a>
                    <a href="Index.html">
                        <h3 class="text-center">iPad Pro</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container our-product-condition">
        <h3 class="text-center mb-4" style="justify-content: center; text-align: center; margin: 60px 0;">
            Our products condition</h3>
        <div class="home-review-carousel owl-carousel owl-theme">
            <div class="slider-item">
                <div class="card">
                    <h2>Pre-Loved | Top</h2>
                    <hr>
                    <p>Up to <span class="highlight">70%</span> less vs. new</p>
                    <ul>
                        <li>An original product</li>
                        <li>Lightly used</li>
                        <li>100% functionality test by Experts</li>
                    </ul>
                    <p class="note"> Item will be delivered in Ipad Wale packaging with all compatible accessories</p>
                    <!-- <button class="btn">See Products</button> -->
                </div>
            </div>
            <div class="slider-item">
                <div class="card">
                    <h2>Pre-Loved | Top</h2>
                    <hr>
                    <p>Up to <span class="highlight">70%</span> less vs. new</p>
                    <ul>
                        <li>An original product</li>
                        <li>Lightly used</li>
                        <li>100% functionality test by Experts</li>
                    </ul>
                    <p class="note"> Item will be delivered in Ipad Wale packaging with all compatible accessories</p>
                    <!-- <button class="btn">See Products</button> -->
                </div>
            </div>
            <div class="slider-item">
                <div class="card">
                    <h2>Pre-Loved | Top</h2>
                    <hr>
                    <p>Up to <span class="highlight">70%</span> less vs. new</p>
                    <ul>
                        <li>An original product</li>
                        <li>Lightly used</li>
                        <li>100% functionality test by Experts</li>
                    </ul>
                    <p class="note"> Item will be delivered in Ipad Wale packaging with all compatible accessories</p>
                    <!-- <button class="btn">See Products</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- about company section  -->
    <div class="container">
        <div class="row">
            <img src="{{asset('front/images/WhyChooseUSDesktop.png')}}" class="whychoose" alt="why Choose ipad wala">
            <img src="{{asset('front/images/WhyChooseUSForPhone.png')}}" class="whychooseforPhone"
                 style="margin: 0 0 10px 0; "
                 alt="why Choose ipad wala">

        </div>
    </div>

    <div class="container">
        <div class="row counter-box text-center">
            <div class="col-12">
                <!-- <h1>JQuery script for counter <span>without</span> counter.js and waypoints.js</h1> -->

            </div>
            <div class="col-3">
                <img src="{{asset('front/images/happy-customer.png')}}" alt="">
                <p><span class="counter" data-count="10000">0</span>+</p>
                <span class="counter-desc">Happy Customer</span>
            </div>
            <div class="col-3">
                <img src="{{asset('front/images/country.png')}}" alt="">
                <p><span class="counter" data-count="2">0</span></p>
                <span class="counter-desc">Country</span>
            </div>
            <div class="col-3">
                <img src="{{asset('front/images/year.png')}}" alt="">
                <p><span class="counter" data-count="8">0</span>+</p>
                <span class="counter-desc">Years</span>
            </div>
            <div class="col-3">
                <img src="{{asset('front/images/employee.png')}}" alt="">
                <p><span class="counter" data-count="43">0</span>+</p>
                <span class="counter-desc">Employee</span>
            </div>
        </div>
    </div>
@endsection
@push('front-js')
    <script>
        $(document).ready(function () {
            let images = $(".home-hero-carousel img");
            let totalImages = images.length;
            let loadedImages = 0;

            images.each(function () {
                let img = new Image();
                img.src = $(this).attr("src");
                img.onload = function () {
                    loadedImages++;
                    if (loadedImages === totalImages) {
                        $("#loader").fadeOut(); // Hide loader
                        $(".home-hero-carousel").fadeIn(); // Show carousel

                        // Initialize Owl Carousel
                        $(".home-hero-carousel").owlCarousel({
                            items: 1,
                            loop: true,
                            margin: 0,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            autoplayHoverPause: true,
                            nav: true,
                            navText: [
                                '<i class="fa fa-chevron-left"></i>',
                                '<i class="fa fa-chevron-right"></i>'
                            ],
                            dots: false,
                            responsive: {
                                0: {items: 1},
                                768: {items: 1},
                                1200: {items: 1}
                            }
                        });
                    }
                };
            });
        });


        $(document).ready(function () {
            $(".home-review-carousel").owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: false,

                dots: true,
                responsive: {
                    0: {items: 1},
                    768: {items: 1},
                    1200: {items: 3}
                }
            });
        });


        $(document).ready(function ($) {
            //Check if an element was in a screen
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                return ((elemBottom <= docViewBottom));
            }

            //Count up code
            function countUp() {
                $('.counter').each(function () {
                    var $this = $(this), // <- Don't touch this variable. It's pure magic.
                        countTo = $this.attr('data-count');
                    ended = $this.attr('ended');

                    if (ended != "true" && isScrolledIntoView($this)) {
                        $({countNum: $this.text()}).animate({
                                countNum: countTo
                            },
                            {
                                duration: 2500, //duration of counting
                                easing: 'swing',
                                step: function () {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function () {
                                    $this.text(this.countNum);
                                }
                            });
                        $this.attr('ended', 'true');
                    }
                });
            }

            //Start animation on page-load
            if (isScrolledIntoView(".counter")) {
                countUp();
            }
            //Start animation on screen
            $(document).scroll(function () {
                if (isScrolledIntoView(".counter")) {
                    countUp();
                }
            });
        });

        $(document).ready(function () {
            $(".home-hero-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: true,
                navText: [
                    '<i class="fa fa-chevron-left"></i>',
                    '<i class="fa fa-chevron-right"></i>'
                ],
                dots: false,
                responsive: {
                    0: {items: 1},
                    768: {items: 1},
                    1200: {items: 1}
                }
            });
        });
    </script>
@endpush
