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

        .active, .product-detail-add-to-cart {
            background: #155f3d !important;
            color: #FFFFFF !important;
            border: none;
        }

        .product-detail-condition button, .storage-group button {
            border: 1px solid #000000;
            color: #0a0a0a;
        }

        .product-detail-condition button:hover, .storage-group button:hover {
            background: #25d366;
            color: #0a0a0a;
            border: 1px solid #000000;
        }
    </style>

    <!-- main section start  -->
    <div class="container mt-5 product-detail-section">
        <div class="row">
            <!-- Image Gallery -->
            <div class="col-md-6 product-detail-image-gallery">
                <div class="row">
                    <div class="col-md-2">

                        <div class="mt-3  product-detail-thumbnail-gallery">
                            @foreach(explode(',',$product->gallery) as $key => $phone_gallery)
                                <img src="{{asset('front/product/gallery/'.$phone_gallery)}}" alt="Thumbnail 1"
                                     class="img-thumbnail mb-2 product-detail-thumbnail"
                                     data-index="0" onclick="goToSlide({{$key}})" onmouseover="previewSlide({{$key}})"
                                     onmouseout="resetSlide()">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="carousel">
                            <img id="carouselImage" src="{{asset('front/product/'.$product->thumbnail)}}"
                                 alt="Carousel Image"
                                 class="active">
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
                <form id="product-detail-form" action="{{route('product_checkout')}}" method="get">
                    <input type="hidden" id="selected-condition" name="condition" value="">
                    <input type="hidden" name="pro_id" value="{{$product->id}}">
                    <input type="hidden" id="selected-quality" name="quality">
                    <input type="hidden" id="selected-color" name="color" value="">
                    <input type="hidden" id="selected-storage" name="storage" value="">
                    <input type="hidden" id="selected-price" name="price" value="">
                    <h1 class="product-detail-title">{{$product->name}}</h1>
                    <p class="product-detail-price text-success js-product-price">-</p>
                    <div class="btn-group d-flex product-detail-condition mb-3" role="group">
                        @foreach($product->product_variants->pluck('quality')->unique() as $quality)
                            <button type="button" class="btn btn-outline-primary js-quality"
                                    data-quality="{{ $quality }}">{{ ucfirst($quality) }}</button>
                        @endforeach
                    </div>

                    <!-- Color Options -->
                    <div class="mb-3 product-detail-color-options">
                        <span>Color: </span>
                        <div class="btn-group" role="group"></div>
                    </div>

                    <!-- Storage Options -->
                    <div class="mb-3 product-detail-storage-options">
                        <span>Size: </span>
                        <div class="btn-group" role="group"></div>
                    </div>

                    <!-- Shipping & Warranty Info -->
                    <div class="mb-3 product-detail-shipping-info">
                        <p><i class="bi bi-truck"></i> <a href="#" id="openshiping">Delivery in 3-5 business days</a>
                        </p>
                        <p><i class="bi bi-arrow-counterclockwise"></i> <a href="#" id="openreturn">10 Days Return</a>
                        </p>

                    </div>

                    <div class="mb-3 product-detail-warranty-info">
                        <p><i class="bi bi-shield-check"></i> <a href="#" id="openwarranty">12 Months Warranty</a></p>
                    </div>
                    <button class="btn btn-primary btn-block product-detail-add-to-cart">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <!-- IMFORMATION AND ADDONS -->
    <div class="container my-4">
        <div class="row">
            <!-- Product Image and Details Card -->
            <div class="col-lg-8 col-md-12 mb-4 p-0">
                <div class="card product-image-card shadow-lg" style="width: 100%; margin: 0">
                    <!-- Added shadow-lg for large shadow -->
                    <div class="card-body">
                        <h5 class="card-title">Product Overview</h5>
                        {{$product->description}}
                    </div>
                </div>
            </div>

            <!-- Product Details with Addon Options -->
            <div class="col-lg-4 col-md-12 p-0">
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
                            <span class="addon-price">pkr 93.45</span>
                        </div>
                    </div>

                    <hr> <!-- Divider between add-ons -->

                    <!-- Addon Item 2 -->
                    <div class="addon-item d-flex justify-content-between align-items-start">
                        <div class="addon-left">
                            <input type="checkbox" id="giftWrap" name="addon" value="giftwrap">
                            <label for="giftWrap" class="addon-label">Gift Wrap</label>
                            <p class="addon-description">
                                We offer neat and attractive wrapping for your items, perfect for gifting. Choose this
                                option at
                                checkout to have your...
                            </p>
                        </div>
                        <div class="addon-right" style="margin: 10px;">
                            <span class="addon-price">pkr 29.40</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('front-js')
    <script>
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

        $(document).ready(function () {
            const productVariants = @json($product->product_variants);

            function updateColors(quality) {

                const colors = new Set();

                productVariants
                    .filter(variant => variant.quality === quality)
                    .forEach(variant => {
                        colors.add(variant.color);
                    });

                const colorContainer = $('.product-detail-color-options');
                colorContainer.empty();

                if (colors.size > 0) {
                    colorContainer.append('<h5>Colors</h5><div class="btn-group color-group"></div>');

                    colors.forEach(color => {
                        $('.color-group').append(
                            `<button type="button" class="btn btn-outline-primary js-color" data-color="${color}">${color}</button>`
                        );
                    });

                    // Auto-select first color
                    $('.js-color').first().addClass('active').trigger('click');
                } else {
                    colorContainer.append('<p>No colors available</p>');
                }
            }

            function updateStorageAndPrice(color, quality) {
                console.log(color)
                const storages = productVariants.filter(variant => variant.color === color && variant.quality === quality);
                // console.log(quality);
                const storageContainer = $('.product-detail-storage-options');
                storageContainer.empty();

                if (storages.length > 0) {
                    storageContainer.append('<h5>Storage</h5><div class="btn-group storage-group"></div>');

                    storages.forEach(storage => {
                        $('.storage-group').append(
                            `<button type="button" class="btn btn-outline-primary js-storage" data-price="${storage.price}" data-storage="${storage.storage}">${storage.storage} GB</button>`
                        );
                    });

                    $('.js-storage').first().addClass('active').trigger('click');
                } else {
                    storageContainer.append('<p>No storage available</p>');
                }
            }

            // Handle quality selection
            $('.js-quality').on('click', function () {
                $('.js-quality').removeClass('active');
                $(this).addClass('active');
                const quality = $(this).data('quality');
                $('#selected-quality').val(quality);

                updateColors(quality);
            });

            // Handle color selection
            $(document).on("click", ".js-color", function () {
                $(".js-color").removeClass("active");
                $(this).addClass("active");

                const color = $(this).data("color");
                const quality = $("#selected-quality").val(); // Quality ko fetch karein
                console.log(quality);
                $("#selected-color").val(color); // Update hidden input for color
                updateStorageAndPrice(color, quality); // Pass quality here
            });

            // Handle storage selection
            $(document).on('click', '.js-storage', function () {
                $('.js-storage').removeClass('active');
                $(this).addClass('active');

                const storage = $(this).data('storage');
                const price = $(this).data('price');

                $('#selected-storage').val(storage);
                $('#selected-price').val(price);
                $('.js-product-price').text(`PKR ${price}`);
            });

            // Auto-select first quality by default
            $('.js-quality').first().addClass('active').trigger('click');
        });
    </script>
@endpush
