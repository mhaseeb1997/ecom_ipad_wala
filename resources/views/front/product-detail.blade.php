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
                    <input type="hidden" id="selected-color" name="color" value="">
                    <input type="hidden" id="selected-storage" name="storage" value="">
                    <input type="hidden" id="selected-price" name="price" value="">
                    <h1 class="product-detail-title">{{$product->name}}</h1>
                    <p class="product-detail-price text-success js-product-price">pkr 3,289.00</p>
                    {{--                <p class="product-detail-stock-info text-danger">Limited stock: only 1 left - order now.</p>--}}

                    <!-- Condition Buttons -->
                    <div class="btn-group d-flex product-detail-condition mb-3" role="group">
                        <button type="button" class="btn btn-outline-secondary active js-pre-loved-top">Pre-Loved | Top
                        </button>
                        {{--                    <button type="button" class="btn btn-outline-secondary js-pre-loved-good">Pre-Loved | Good</button>--}}
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
    <div class="container mt-4 product-section">
        <div class="row">
            <!-- Product Image and Details Card -->
            <div class="col-lg-7 col-md-12 mb-4">
                <div class="card product-image-card shadow-lg" style="width: 100%; margin: 0"> <!-- Added shadow-lg for large shadow -->
                    <div class="card-body">
                        <h5 class="card-title">Product Overview</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Features and Specifications</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor nisi
                            ut orci
                            fermentum, id commodo libero condimentum.</p>
                        <p class="card-text">Aliquam convallis, ligula vel viverra sodales, elit massa cursus ex, nec
                            consectetur
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

            function updateColors(condition = null) {
                const colors = [...new Set(
                    productVariants
                        .filter(variant => !condition || variant.condition === condition)
                        .map(variant => variant.color)
                )];

                const colorContainer = $('.product-detail-color-options .btn-group');
                colorContainer.empty();

                if (colors.length > 0) {
                    colors.forEach(color => {
                        colorContainer.append(
                            `<button type="button" class="btn btn-outline-primary js-color" data-color="${color}">${color}</button>`
                        );
                    });

                    // Automatically select the first color
                    const defaultColor = $('.js-color').first();
                    if (defaultColor.length) {
                        defaultColor.addClass('active').trigger('click');
                    }
                } else {
                    colorContainer.append('<p>No colors available</p>');
                    $('.product-detail-storage-options .btn-group').empty().append('<p>No storage available</p>');
                    $('.js-product-price').text('Price not available');
                }
            }

            function updateStorageAndPrice(color) {
                const storages = productVariants.filter(variant => variant.color === color);

                const storageContainer = $('.product-detail-storage-options .btn-group');
                storageContainer.empty();

                if (storages.length > 0) {
                    storages.forEach(storage => {
                        storageContainer.append(
                            `<button type="button" class="btn btn-outline-primary js-storage" data-price="${storage.price}" data-storage="${storage.storage}">${storage.storage} GB</button>`
                        );
                    });

                    // Automatically select the first storage
                    const defaultStorage = $('.js-storage').first();
                    if (defaultStorage.length) {
                        defaultStorage.addClass('active').trigger('click');
                    }
                } else {
                    storageContainer.append('<p>No storage available</p>');
                    $('.js-product-price').text('Price not available');
                }
            }

            // Handle condition button clicks
            $('.js-pre-loved-top, .js-pre-loved-good').on('click', function () {
                const condition = $(this).hasClass('js-pre-loved-top') ? 'top' : 'good';
                $('#selected-condition').val(condition); // Update hidden input for condition

                // Update colors and automatically trigger first color selection
                updateColors(condition);
            });

            // Handle color selection
            $(document).on('click', '.js-color', function () {
                $('.js-color').removeClass('active');
                $(this).addClass('active');

                const color = $(this).data('color');
                $('#selected-color').val(color); // Update hidden input for color
                updateStorageAndPrice(color);
            });

            // Handle storage selection
            $(document).on('click', '.js-storage', function () {
                $('.js-storage').removeClass('active');
                $(this).addClass('active');

                const storage = $(this).data('storage');
                const price = $(this).data('price');

                $('#selected-storage').val(storage); // Update hidden input for storage
                $('#selected-price').val(price); // Update hidden input for price
                $('.js-product-price').text(`pkr ${price}`);
            });

            // Handle form submission
            $('.product-detail-add-to-cart').on('click', function () {
                $('#product-detail-form').submit(); // Submit the form
            });

            // Initialize with default values
            updateColors(); // Load all colors
        });
    </script>
@endpush
