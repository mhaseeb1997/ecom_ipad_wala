@extends('front.layout.main')
@section('front')
    <div class="container mt-4 product-detail-section">
        @if (Auth::check())
            <form method="post" action="{{route('order_placed')}}" enctype="multipart/form-data">
                @csrf
                @endif
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        @if (Auth::check())
                            <div class="checkmaincontainerr">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <h2>Payment Method</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <p>Bank info</p>
                                    </div>
                                    <hr class="my-3" style="border: none; border-top: 1px solid #7a7a7a;">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>
                                                    COD requires your phone number to be verified.
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <input type="file" name="bank_receipt">
                                                <input type="hidden" name="pro_id" value="{{$product->id}}">
                                                <input type="hidden" name="pro_vid" value="{{$product_variant->id}}">
                                            </div>
                                        </div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="checkmaincontainerr" style="margin:20px 0;">
                                    <h2>Shipping Information</h2>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="color: red">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <form method="post" action="{{route('front-register')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name"
                                                       placeholder="Full Name"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                       placeholder="Email"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">Phone#</label>
                                                <input type="text" class="form-control" name="mobile"
                                                       placeholder="Phone Number"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">password</label>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Password"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" name="city"
                                                       placeholder="Enter your City"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address"
                                                       placeholder="Enter Your Address"
                                                       required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <button type="submit" class="btn btn-outline-success saveinfo w-100"
                                                        style="margin-top: 42px;">
                                                    Save Information
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card p-3 checkmaincontainerr">
                                <h5 class="mb-3"><strong>Order Summary</strong></h5>
                                <!-- Item 1 -->
                                <div class="mb-1">
                                    <p class="mb-1"><strong>{{$product->name}}</strong></p>
                                    <p style="font-size: 0.9em; color: gray;">Never Used | Like New</p>
                                    <p><strong>PKR {{$product_variant->price}}</strong></p>
                                </div>
                                <hr>
                                <!-- Item 3 -->
                                <div>
                                    <p class="mb-1"><strong>Gift Wrap</strong></p>
                                    <p><strong>PKR 29.40</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card p-3"
                                 style="max-width: 100%; margin: 20px auto; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <p><strong>Total</strong> <span style="float: right;">PKR 759.25</span></p>
                                <button type="submit" class="btn btn-success w-100" >Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::check())
            </form>
        @endif
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- whatsapp icon  -->
    <div id="whatsapp-button" onmouseenter="startChat()">
        <img src="images/WhatsApp.png" alt="WhatsApp"/>
        <h6 class="abc">Contact Us</h6>
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

        // Get modal for shiping
        var modal = document.getElementById("popupshiping");
        var btn = document.getElementById("openshiping");
        var closeBtn = document.getElementsByClassName("closeshiping")[0];

        // Open modal on button click
        btn.onclick = function () {
            modal.style.display = "flex";
        }

        // Close modal when the 'x' is clicked
        closeBtn.onclick = function () {
            modal.style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        // Get modal for return
        var modalret = document.getElementById("popupreturn");
        var btnret = document.getElementById("openreturn");
        var closeBtnret = document.getElementsByClassName("closereturn")[0];

        // Open modal on button click
        btnret.onclick = function () {
            modalret.style.display = "flex";
        }

        // Close modal when the 'x' is clicked
        closeBtnret.onclick = function () {
            modalret.style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function (event) {
            if (event.target == modalret) {
                modalret.style.display = "none";
            }
        }


        // Get modal for return <!-- Warranty Modal -->
        var modalwarr = document.getElementById("popupWarranty");
        var btnwarr = document.getElementById("openwarranty");
        var closeBtnwarr = document.getElementsByClassName("closeWarranty")[0];

        // Open modal on button click
        btnwarr.onclick = function () {
            modalwarr.style.display = "flex";
        }

        // Close modal when the 'x' is clicked
        closeBtnwarr.onclick = function () {
            modalwarr.style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function (event) {
            if (event.target == modalwarr) {
                modalwarr.style.display = "none";
            }
        }


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

        let currentSlide = 0;
        const slides = document.querySelectorAll(".carousel img");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

    </script>
@endpush
