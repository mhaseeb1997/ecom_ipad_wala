@extends('front.layout.main')
@section('front')
<div class="social-icons">
    <a href="mailto:officialcodesbunny@gmail.com" target="_blank" className="mail" style="color: black;"><img src="images/mail.png" style="width: 30px;" alt="" /> <span>&nbsp;Mail</span></a>

    <a href="https://linkedin.com" target="_blank" class="linkedin"><i class="fab fa-linkedin"> </i> <span>&nbsp;LinkedIn</span></a>
    <a href="https://wa.me/923080044190?text=Hello%2C%20I%27m%20interested%20in%20your%20services" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"> </i> <span>&nbsp;Whatsapp</span></a>

    <a href="https://www.facebook.com/profile.php?id=61565411637604&mibextid=ZbWKwL" target="_blank" class="facebook"><i class="fab fa-facebook"> </i> <span>&nbsp;Facebook</span></a>
    <a href="https://www.instagram.com/codes.bunny?igsh=MjU2aXl1eWRwa2Q2" target="_blank" class="instagram"><i class="fab fa-instagram"> </i> <span>&nbsp;Instagram</span></a>
</div>
<!-- product section  -->
<div class="container">
    <div class="row">




        <div class="col-lg-4 col-md-4 col=sm=12" >
            <div class="card" style="width: auto; margin: 0 0 30px 0;">
                <img src="{{asset('front/images/ipadonee.jpg')}}"  class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text">Product name model detail.</p>
                    <p class="card-text">Condition: Never Used | All New</p>

                    <hr>
                    <p class="card-text"><Span>Price : </Span>AED 9.00</p>
                    <p class="card-text">Express Delivery, in 48 hours</p>

                    <a href="{{route('front-product-detail')}}" class="card-link">Product detail</a>
                </div>
            </div>

        </div>
        <!-- Repeat product-card for more products -->
    </div>
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<!-- whatsapp icon  -->
<div id="whatsapp-button" onmouseenter="openPopup()">
    <img src="{{asset('front/images/WhatsApp.png')}}" alt="WhatsApp" />
    <h6 class="abc">Contact Us</h6>
</div>

<!-- WhatsApp Chat Popup -->
<div id="whatsapp-popup" class="popup">
    <div class="popup-header">
        <img src="{{asset('front/images/Return.jpg')}}" style="width: 30px; border-radius: 50px;" alt="hello"><h2>Ipad wale </h2>

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
