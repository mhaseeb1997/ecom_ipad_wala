@extends('front.layout.main')
@section('front')
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,"pagination": {"el": "#main-slider-pagination",
"type": "bullets","clickable": true},"navigation": {"nextEl": "#main-slider__swiper-button-next","prevEl": "#main-slider__swiper-button-prev"},"autoplay": {"delay": 2500}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(front/images/sliderone.jpg);">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-slider__content">
                                    <h2>Better Solution at <br> Your Fingertips</h2>
                                    <p>We’ve One Mission to be the Best IT Software Company in UK</p>
                                    <!-- <a href="about.html" class="thm-btn">Discover More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(front/images/slidertwo.png);">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-slider__content">
                                    <h2>Better Solution at <br> Your Fingertips</h2>
                                    <p>We’ve One Mission to be the Best IT Software Company in UK</p>
                                    <!-- <a href="about.html" class="thm-btn">Discover More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(front/images/sliderthree.png);">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-slider__content">
                                    <h2>Better Solution at <br> Your Fingertips</h2>
                                    <p>We’ve One Mission to be the Best IT Software Company in UK</p>
                                    <!-- <a href="about.html" class="thm-btn">Discover More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                        class="icon-right-arrow icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- arrow up button -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- whatsapp icon  -->
    <div id="whatsapp-button" onmouseenter="openPopup()">
        <img src="{{asset('front/images/WhatsApp.png')}}" alt="WhatsApp"/>
        <h6 class="abc">Contact Us</h6>
    </div>

    <!-- WhatsApp Chat Popup -->
    <div id="whatsapp-popup" class="popup">
        <div class="popup-header">
            <img src="{{asset('front/images/Return.jpg')}}" style="width: 30px; border-radius: 50px;" alt="hello">
            <h2>Ipad wale </h2>

            <span onclick="closePopup()">×</span>
        </div>
        <div class="popup-body">
            <p>Hi there!<br>How can we help you?</p>
        </div>
        <div class="popup-footer">
            <!-- <input type="text" class="form-control" placeholder="Type a message"> -->
            <button onclick="startChat()">Start Chat</button>
        </div>
    </div>

    <!--Feature Section three cards -->
    <section class="features py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box p-4 shadow-sm">
                        <img src="{{asset('front/images/Return.jpg')}}" alt="Stylish Accessories" class="mb-3">
                        <h4>7 Days Return Policy</h4>
                        <p class="text-muted">Return within 7 days, hassle-free.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box p-4 shadow-sm">
                        <img src="{{asset('front/images/qualityandtrustworthy.png')}}" alt="Innovative Designs"
                             class="mb-3">
                        <h4>Quality And Trust Worthy</h4>
                        <p class="text-muted">Trusted quality you can rely on.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box p-4 shadow-sm">
                        <img src="{{asset('front/images/10advance.png')}}" alt="Elevate Your Style" class="mb-3">
                        <h4>10% Payment in advance</h4>
                        <p class="text-muted">Fast delivery in 2-3 days.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ------/* General section styling for connectivity */---------------------- -->
    <div class="container">
        <div class="connectivity-section">

            <div class="connectivity-content">
                <div class="connectivity-image">
                    <img src="{{asset('front/images/pad.jpg')}}" alt="Connectivity Devices"/>
                </div>
                <div class="connectivity-text">
                    <h1>Unleash Your Connectivity</h1>
                    <p>
                        Experience seamless connectivity with our wide array of Apple-compatible
                        devices, from lightning cables to wireless chargers.
                    </p>
                    <a href="#" class="explore-btn">Explore Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="home-demo">
            <h3 style="justify-content: center; text-align: center; margin: 30px 0;">Endless possibilities</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="Index.html"><img src="{{asset('front/images/watches/Series1/alu-rosegold.jpg')}}"
                                              alt="series 1"></a>

                    <h3>Series 1</h3>
                </div>
                <div class="item">
                    <a href="Index.html"> <img src="{{asset('front/images/watches/Series2/alu-spacegray-nike.jpg')}}"
                                               alt="Smartwatch 2"></a>
                    <a href="Index.html">
                        <h3>Series 2</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html"> <img src="{{asset('front/images/watches/Series3/series3.webp')}}"
                                               alt="Smartwatch 3"></a>
                    <a href="Index.html">
                        <h3>Series 3</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html"><img src="{{asset('front/images/watches/Series4/series4.webp')}}"
                                              alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>Series 4</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/Series5/series_5-spaceblacktitaniumcaseviperdark.png')}}"
                            alt="Smartwatch 5"></a>
                    <a href="Index.html">
                        <h3>Series 5</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/Series6/series-6-aluminum-blue-case.png')}}"
                            alt="Smartwatch 1"></a>
                    <a href="Index.html">
                        <h3>Series 6</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="Index.html"> <img src="{{asset('front/images/watches/Series7/ii-4.png')}}"
                                               alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>Series 7</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img src="{{asset('front/images/watches/Series8/qq.webp')}}"
                                               alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>Series 8</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/Series10/Apple-Watch-Series-10-42mm.jpg')}}"
                            alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>Series 10</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img src="{{asset('front/images/watches/WatchSE/cce1-1338-mp_1_.jpg')}}"
                                               alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>watch SE</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/WatchSE2/WatchSE44mmstarlight-1200x1200-1.webp')}}"
                            alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>watch SE2</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/WatchUltra/apple-mreh3-watch-ultra-2.jpg.jpeg')}}"
                            alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>watch Ultra</h3>
                    </a>
                </div>

                <div class="item">
                    <a href="Index.html"> <img
                            src="{{asset('front/images/watches/WatchUltra2/apple-watch-ultra-2-49mm-lte-natural-titanium-natural-milanese-loop-01.webp')}}"
                            alt="Smartwatch 4"></a>
                    <a href="Index.html">
                        <h3>watch Ultra2</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="home-demo">
            <h3 style="justify-content: center; text-align: center; margin: 30px 0;">Our products condition</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <h2>Pre-Loved | Top</h2>
                        <hr>
                        <p>Up to <span class="highlight">70%</span> less vs. new</p>
                        <ul>
                            <li>An original product</li>
                            <li>Lightly used</li>
                            <li>100% functionality test by Experts</li>
                        </ul>
                        <p class="note"> Item will be delivered in Ipad Wale packaging with all compatible
                            accessories</p>
                        <!-- <button class="btn">See Products</button> -->
                    </div>

                </div>
                <div class="item">
                    <div class="card">
                        <h2>Pre-Loved | Good</h2>
                        <hr>
                        <p>Up to <span class="highlight">80%</span> less vs. new</p>
                        <ul>
                            <li>Original product</li>
                            <li>Moderately used</li>
                            <li>100% functionality test by Experts</li>
                        </ul>
                        <p class="note"> Item will be delivered in Cartlow packaging with all compatible accessories</p>
                        <!-- <button class="btn">See Products</button> -->
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <h2>Never Used | All New</h2>
                        <hr>
                        <p>Up to <span class="highlight">50%</span> less vs. new</p>
                        <ul>
                            <li>Brand new product</li>
                            <li>Original sealed packaging</li>
                            <li>All original accessories</li>
                        </ul>
                        <br>
                        <p class="note"> Original box might be damaged</p>
                        <!-- <button class="btn">See Products</button> -->
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <h2>Never Used | Like New</h2>
                        <hr>
                        <p>Up to <span class="highlight">65%</span> less vs. new</p>
                        <ul>
                            <li>Original product</li>
                            <li>Opened but never used</li>
                            <li>Product test by our Experts</li>
                        </ul>
                        <p class="note"> Item might have some minor marks. Original box and original accessories</p>
                        <!-- <button class="btn">See Products</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- about company section  -->
    <div class="container">
        <div class="info-section">

            <div class="info-content">
                <div class="info-text">
                    <h3>Welcome to iPad Wala, where quality meets affordability for Apple lovers in Pakistan!</h3>
                    <p>
                        Our mission is to make premium Apple technology affordable and accessible, addressing high
                        prices
                        caused by import regulations. By expanding access to genuine Apple products, we aim to boost
                        digital
                        literacy and support Pakistan’s IT industry growth.
                        <br> <strong> Why Choose iPad Wala?</strong> <br>
                        We import Apple products through legal channels, with 40% of each purchase going to Pakistan’s
                        economy in customs duties and taxes. Enjoy our 7-day no-questions-asked return policy and choose
                        from scratch-free or gently used devices, each price accordingly.<br>
                        Our Journey
                        With operations in the UAE since 2017, iPad Wala has now brought its commitment to quality and
                        trust
                        to Pakistan. Join over 10,000 happy customers who rely on us for transparency and affordability
                        in
                        Apple tech! </p>
                    <!-- <a href="aboutus.html" class="aboutusbtn">Explore More</a> -->
                    <div class="info-stats">
                        <div class="stat-item">
                            <img src="{{asset('front/images/happycus.png')}}" alt="Years Icon">
                            <p>Years</p>
                            <p class="statistic">5</p>
                        </div>
                        <div class="stat-item">
                            <img src="{{asset('front/images/happycus.png')}}" alt="Countries Icon">
                            <p>Countries</p>
                            <p class="statistic">2</p>
                        </div>
                        <div class="stat-item">
                            <img src="{{asset('front/images/employee.jpg')}}">
                            <p>Employees</p>
                            <p class="statistic">500</p>


                        </div>
                        <div class="stat-item">
                            <img src="{{asset('front/images/happycus.png')}}" alt="Happy Customers Icon">
                            <p>Happy Customers</p>
                            <p class="statistic">10000 +</p>
                        </div>
                    </div>
                </div>
                <div class="info-image">
                    <img src="{{asset('front/images/steve.jpg')}}" style="width: 450px;" alt="Cartlow Warehouse">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('front-js')

    <script>
        function toggleSearch() {
            const searchContainer = document.getElementById("searcher");
            if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
                searchContainer.style.display = "block";
            } else {
                searchContainer.style.display = "none";
            }
        }

        $(function () {
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 3,            // Number of items to display
                margin: 200,          // Space between items
                loop: true,          // Enable infinite loop
                // nav: true,           // Show navigation arrows
                autoplay: true,      // Enable auto-scroll
                autoplayTimeout: 3500, // Time (in ms) between slides (3 seconds)
                autoplayHoverPause: true, // Pause auto-scroll on hover
                responsive: {
                    0: {
                        items: 1         // Display 1 item on smaller screens
                    },
                    600: {
                        items: 2         // Display 2 items on medium screens
                    },
                    1000: {
                        items: 3         // Display 3 items on large screens
                    }
                }
            });
        });

        // Function to open the popup with fade-in effect
        function openPopup() {
            const popup = document.getElementById("whatsapp-popup");
            popup.classList.add("show");
        }

        // Function to close the popup
        function closePopup() {
            const popup = document.getElementById("whatsapp-popup");
            popup.classList.remove("show");
        }

        // Function to start chat (redirect to WhatsApp)
        function startChat() {
            window.open("https://wa.me/923150891475", "_blank"); // Replace with your WhatsApp number
        }
    </script>
@endpush
