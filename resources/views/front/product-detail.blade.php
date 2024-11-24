@extends('front.layout.main')
@section('front')
    <style>
        /* Carousel container */
        .carousel {
            width: 100%;
            max-width: 600px;
            overflow: hidden;
            position: relative;
            margin: auto;
        }

        /* Images within carousel */
        .carousel img {
            width: 100%;
            display: none;
        }

        /* Show the first image initially */
        .carousel img.active {
            display: block;
        }

        /* Navigation buttons */
        .carousel-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
<div class="social-icons">
    <a href="mailto:officialcodesbunny@gmail.com" target="_blank" class="mail" style="color: black;"><img src="{{asset('front/images/mail.png')}}" style="width: 30px;" alt="" /> <span>&nbsp;Mail</span></a>

    <a href="https://linkedin.com" target="_blank" class="linkedin"><i class="fab fa-linkedin"> </i> <span>&nbsp;LinkedIn</span></a>
    <a href="https://wa.me/923080044190?text=Hello%2C%20I%27m%20interested%20in%20your%20services" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"> </i> <span>&nbsp;Whatsapp</span></a>

    <a href="https://www.facebook.com/profile.php?id=61565411637604&mibextid=ZbWKwL" target="_blank" class="facebook"><i class="fab fa-facebook"> </i> <span>&nbsp;Facebook</span></a>
    <a href="https://www.instagram.com/codes.bunny?igsh=MjU2aXl1eWRwa2Q2" target="_blank" class="instagram"><i class="fab fa-instagram"> </i> <span>&nbsp;Instagram</span></a>
</div>

<!-- main section start  -->
<div class="container mt-5 product-detail-section">
    <div class="row">
        <!-- Image Gallery -->
        <div class="col-md-6 product-detail-image-gallery">
            <div class="row">
                <div class="col-md-2">
                    <div class="  mt-3  product-detail-thumbnail-gallery">
                        <img src="{{asset('front/images/smwatch.jpg')}}" alt="Thumbnail 1" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="0" onclick="goToSlide(0)" onmouseover="previewSlide(0)" onmouseout="resetSlide()">
                        <img src="{{asset('front/images/applewatch.jpg')}}" alt="Thumbnail 2" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="1" onclick="goToSlide(1)" onmouseover="previewSlide(1)" onmouseout="resetSlide()">
                        <img src="{{asset('front/images/ultrawatch.jpg')}}" alt="Thumbnail 3" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="2" onclick="goToSlide(2)" onmouseover="previewSlide(2)" onmouseout="resetSlide()">
                        <img src="{{asset('front/images/smwatch.jpg')}}" alt="Thumbnail 4" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="3" onclick="goToSlide(3)" onmouseover="previewSlide(3)" onmouseout="resetSlide()">
                        <img src="{{asset('front/images/applelogo.png')}}" alt="Thumbnail 5" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="4" onclick="goToSlide(4)" onmouseover="previewSlide(4)" onmouseout="resetSlide()">
                        <img src="{{asset('front/images/ultrawatch.jpg')}}" alt="Thumbnail 6" class="img-thumbnail mb-2 product-detail-thumbnail"
                             data-index="5" onclick="goToSlide(5)" onmouseover="previewSlide(5)" onmouseout="resetSlide()">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="carousel">
                        <img id="carouselImage" src="{{asset('front/images/smwatch.jpg')}}" alt="Carousel Image" class="active">
                        <div class="carousel-buttons">
                            <button class="carousel-button" onclick="prevSlide()">&#10094;</button>
                            <button class="carousel-button" onclick="nextSlide()">&#10095;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6 product-detail-details">
            <h1 class="product-detail-title">Apple iPhone 14 Pro Max 512GB - Deep Purple</h1>
            <p class="product-detail-price text-success">AED 3,289.00</p>
            <p class="product-detail-retail-price">
                <del>AED 5,900.00</del>
                <span class="product-detail-discount text-danger">44% less vs. new</span>
            </p>
            <p class="product-detail-stock-info text-danger">Limited stock: only 1 left - order now.</p>

            <!-- Condition Buttons -->
            <div class="btn-group d-flex product-detail-condition mb-3" role="group">
                <button type="button" class="btn btn-outline-secondary active">Pre-Loved | Top</button>
                <button type="button" class="btn btn-outline-secondary">Pre-Loved | Good</button>
            </div>

            <!-- Color Options -->
            <div class="mb-3 product-detail-color-options">
                <span>Color: </span>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active">Deep Purple</button>
                    <button type="button" class="btn btn-outline-primary">Gold</button>
                    <button type="button" class="btn btn-outline-primary">Silver</button>
                    <button type="button" class="btn btn-outline-primary">Space Black</button>
                </div>
            </div>

            <!-- Storage Options -->
            <div class="mb-3 product-detail-storage-options">
                <span>Size: </span>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary">128 GB</button>
                    <button type="button" class="btn btn-outline-primary">256 GB</button>
                    <button type="button" class="btn btn-outline-primary active">512 GB</button>
                </div>
            </div>

            <!-- Shipping & Warranty Info -->
            <div class="mb-3 product-detail-shipping-info">
                <p><i class="bi bi-truck"></i> <a href="#" id="openshiping">Delivery in 3-5 business days</a></p>
                <p><i class="bi bi-arrow-counterclockwise"></i> <a href="#" id="openreturn">10 Days Return</a></p>

            </div>

            <div class="mb-3 product-detail-warranty-info">
                <p><i class="bi bi-shield-check"></i> <a href="#" id="openwarranty">12 Months Warranty</a></p>
                <!-- <p><i class="bi bi-check-circle"></i> <a href="#" id="openmobcheck"  data-bs-toggle="modal" data-bs-target="#mobocheckModal">MoboCheck Guarantee</a></p> -->

            </div>

            <!-- Add to Cart Button -->
            <a href="checkout.html"> <button class="btn btn-primary btn-block product-detail-add-to-cart">Buy Now</button></a>

        </div>
    </div>
</div>



<!-- IMFORMATION AND ADDONS -->
<div class="container mt-4 product-section">
    <div class="row">
        <!-- Product Image and Details Card -->
        <div class="col-lg-7 col-md-12 mb-4">
            <div class="card product-image-card shadow-lg"> <!-- Added shadow-lg for large shadow -->
                <div class="card-body">
                    <h5 class="card-title">Product Overview</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Features and Specifications</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor nisi ut orci
                        fermentum, id commodo libero condimentum.</p>
                    <p class="card-text">Aliquam convallis, ligula vel viverra sodales, elit massa cursus ex, nec consectetur
                        justo mauris eu nulla.</p>
                    <p class="card-text">Curabitur vel erat vitae sapien dapibus ullamcorper ac non erat.</p>
                    <p class="card-text">Integer vitae elit a odio placerat volutpat non sit amet magna.</p>
                    <p class="card-text">Nulla facilisi. Sed ultricies vel velit nec hendrerit.</p>
                </div>
            </div>
        </div>

        <!-- Product Details with Addon Options -->
        <div class="col-lg-5 col-md-12">
            <div class="card product-info-card shadow-lg">
                <h2 class="addon-title">Add Ons</h2>

                <!-- Addon Item 1 -->
                <div class="addon-item d-flex justify-content-between align-items-start">
                    <div class="addon-left">
                        <input type="checkbox" id="extendedWarranty" name="addon" value="warranty">
                        <label for="extendedWarranty" class="addon-label"> Tampered Glass and Cover</label>
                        <p class="addon-description">
                            Tampered Glass and Cover
                        </p>
                    </div>
                    <div class="addon-right " style="margin: 10px;">
                        <span class="addon-price">AED 93.45</span>
                    </div>
                </div>

                <hr> <!-- Divider between add-ons -->

                <!-- Addon Item 2 -->
                <div class="addon-item d-flex justify-content-between align-items-start">
                    <div class="addon-left">
                        <input type="checkbox" id="giftWrap" name="addon" value="giftwrap">
                        <label for="giftWrap" class="addon-label">Gift Wrap</label>
                        <p class="addon-description">
                            We offer neat and attractive wrapping for your items, perfect for gifting. Choose this option at
                            checkout to have your...
                        </p>
                    </div>
                    <div class="addon-right" style="margin: 10px;">
                        <span class="addon-price">AED 29.40</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- all models  -->

<!-- Shipping Modal -->
<div id="popupshiping" class="modal">
    <div class="modal-content">
        <button type="button" class="closeshiping" aria-label="Close">&times;</button>

        <div class="popup-header">
            <h3>Shipping Information</h3>
        </div>

        <div class="modal-body">
            Your product will be delivered within 3-5 business days. Please note that delivery times may vary based on your
            location.
        </div>

        <!-- Social Media Icons with Links -->
        <div class="social-signin">
            <div class="or-divider">OR</div>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon facebook-icon" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon instagram-icon" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="mailto:support@example.com" class="social-icon email-icon" aria-label="Email">
                    <i class="bi bi-envelope"></i>
                </a>
                <a href="https://wa.me/1234567890" target="_blank" class="social-icon whatsapp-icon" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Return Modal -->

<div id="popupreturn" class="modal">
    <div class="modal-content">
        <button type="button" class="closereturn" aria-label="Close">&times;</button>

        <div class="popup-header">
            <h3>Return Policy</h3>
        </div>

        <div class="modal-body">
            You can return the product within 10 days of delivery. The product must be in its original condition.
        </div>

        <!-- Social Media Icons with Links -->
        <div class="social-signin">
            <div class="or-divider">OR</div>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon facebook-icon" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon instagram-icon" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="mailto:support@example.com" class="social-icon email-icon" aria-label="Email">
                    <i class="bi bi-envelope"></i>
                </a>
                <a href="https://wa.me/1234567890" target="_blank" class="social-icon whatsapp-icon" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Warranty Modal -->
<div id="popupWarranty" class="modal">
    <div class="modal-content">
        <button type="button" class="closeWarranty" aria-label="Close">&times;</button>

        <div class="popup-header">
            <h3>Warranty Policy</h3>
        </div>

        <div class="modal-body">
            You can return the product within 10 days of delivery. The product must be in its original condition.
        </div>

        <!-- Social Media Icons with Links -->
        <div class="social-signin">
            <div class="or-divider">OR</div>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon facebook-icon" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon instagram-icon" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="mailto:support@example.com" class="social-icon email-icon" aria-label="Email">
                    <i class="bi bi-envelope"></i>
                </a>
                <a href="https://wa.me/1234567890" target="_blank" class="social-icon whatsapp-icon" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
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
        const carouselImage = document.getElementById("carouselImage");
        const thumbnails = document.querySelectorAll(".product-detail-thumbnail");

        function showSlide(index) {
            currentSlide = index;
            carouselImage.src = thumbnails[currentSlide].src; // Use the thumbnail src directly
            updateThumbnailHighlight(currentSlide);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % thumbnails.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + thumbnails.length) % thumbnails.length;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            showSlide(index);
        }

        function previewSlide(index) {
            carouselImage.src = thumbnails[index].src; // Show thumbnail src on hover
        }

        function resetSlide() {
            carouselImage.src = thumbnails[currentSlide].src; // Reset to current slide's src
        }

        function updateThumbnailHighlight(index) {
            thumbnails.forEach((thumbnail, i) => {
                thumbnail.classList.toggle("selected-thumbnail", i === index);
            });
        }

    </script>
@endpush
