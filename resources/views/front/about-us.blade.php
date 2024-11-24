@extends('front.layout.main')
@section('front')
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

    <div class="social-icons">
        <a href="mailto:officialcodesbunny@gmail.com" target="_blank" class="mail" style="color: black;"><img
                src="{{asset('front/images/mail.png')}}" style="width: 30px;" alt=""/> <span>&nbsp;Mail</span></a>

        <a href="https://linkedin.com" target="_blank" class="linkedin"><i class="fab fa-linkedin"> </i> <span>&nbsp;LinkedIn</span></a>
        <a href="https://wa.me/923080044190?text=Hello%2C%20I%27m%20interested%20in%20your%20services" target="_blank"
           class="whatsapp"><i class="fab fa-whatsapp"> </i> <span>&nbsp;Whatsapp</span></a>

        <a href="https://www.facebook.com/profile.php?id=61565411637604&mibextid=ZbWKwL" target="_blank"
           class="facebook"><i class="fab fa-facebook"> </i> <span>&nbsp;Facebook</span></a>
        <a href="https://www.instagram.com/codes.bunny?igsh=MjU2aXl1eWRwa2Q2" target="_blank" class="instagram"><i
                class="fab fa-instagram"> </i> <span>&nbsp;Instagram</span></a>
    </div>

    <!-- product section for mac book  -->
    <div class="container">
        <div class="product-section">

            <div class="product-content">
                <div class="product-text">
                    <h3>Welcome to iPad Wala, where quality meets affordability for Apple lovers in Pakistan!
                    </h3>
                    <p>
                        At iPad Wala, our mission is simple: to bring authentic, original Apple products in pristine
                        condition to the people of Pakistan. With high import costs and limited supply driving up prices
                        locally, we’re dedicated to making premium Apple technology accessible and affordable for
                        everyone. We believe in the power of technology to drive change, and by expanding access to
                        Apple products, we aim to enhance digital literacy and support the growth of Pakistan’s IT
                        industry.
                    </p>
                    <a href="{{route('front-product')}}" class="shop-btn">Shop Now</a>
                </div>
                <div class="product-image">
                    <img src="{{asset('front/images/mac.jpg')}}" alt="MacBook Air"/>
                </div>
            </div>
        </div>
    </div>

    <!-- ------/* General section styling for connectivity */---------------------- -->
    <div class="container">
        <div class="connectivity-section">

            <div class="connectivity-content">
                <div class="connectivity-image">
                    <img src="{{asset('front/images/pad.jpg')}}" alt="Connectivity Devices"/>
                </div>
                <div class="connectivity-text">
                    <h1>Why Choose iPad Wala?</h1>
                    <p>
                        Every product at iPad Wala is imported through legal channels, with 40% of each purchase going
                        directly to the state of Pakistan as customs duties and taxes—helping to boost national revenue
                        and support the local economy. Plus, with our 7-day, no-questions-asked return policy, you can
                        shop with confidence and peace of mind.<br>
                        We bring transparency to the Apple market in Pakistan, offering both scratch-free and gently
                        used devices, each priced accordingly. Our commitment to authenticity means that our customers
                        receive only original, never-repaired Apple products, categorized for easy choice.</p>
                </div>
            </div>
        </div>
    </div>







    <!-- about company section  -->
    <div class="container">
        <div class="info-section">

            <div class="info-content">
                <div class="info-text">
                    <h3>A Growing Legacy</h3>
                    <p>
                        Operating in the UAE since 2017 and now expanding to Pakistan, iPad Wala is built on trust and
                        quality. With a team of 43 dedicated professionals and over 10,000 happy customers in the UAE,
                        we’re here to give Apple products a second life and make a positive impact on the tech
                        landscape. <br>
                        Join us in transforming how Pakistan experiences technology—shop smart, support local, and
                        elevate your Apple experience with iPad Wala! </p>

                </div>
                <div class="info-image">
                    <img src="{{asset('front/images/steve.jpg')}}" style="width: 450px; height: 450PX;"
                         alt="Cartlow Warehouse">
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

