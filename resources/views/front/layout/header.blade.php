

<!-- First Navbar (Logo, Search, Icons) -->
<header class="main-header ">
    <nav class="main-menu">
        <div class="main-menu-wrapper clearfix">
            <div class="row">

                <div class="col-md-4 col-2">
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="dropdown">
                                <a href="{{route('front-product')}}">Shop</a>

                            </li>
                            <li><a href="{{route('front-about-us')}}">About Us</a></li>
                            <li><a href="{{route('front-faq')}}">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-6 d-flex justify-content-center">
                    <div class="main-menu-wrapper__logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('front/images/ipadwrittenblack.png')}}" class="head-logo" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <div id="searcher" style="position: absolute">
                        <div class="search-container">
                            <input type="text" class="search-input" placeholder="Search Pre-Loved Products">
                            <button class="search-button">
                                Go
                            </button>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-box-cart-box">
                            <button class="btn search-icon" type="button" onclick="toggleSearch()">
                                <i class="fa-solid fa-magnifying-glass" style="color: aliceblue; "> </i>
                            </button>
                            <a href="{{route('front-auth')}}" class="main-menu-wrapper__cart">
                                <i class="fa-regular fa-user fa-sm" style="color: #fcfcfc;"></i>
                            </a>
                            <div class="flags d-flex align-items-center">
                                <img src="{{asset('front/images/UAEflag.png')}}" alt="UAE Flag" width="30" height="20" class="me-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg"
                                     style="margin-right: 20px;" alt="Pakistan Flag" width="30" height="20">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="/" aria-label="logo image">
                <img src="{{asset('front/images/ipadwrittenblack.png')}}" width="100" alt=""/>
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </div>
</div>

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
        <button onclick="startChat()">Start Chat</button>
    </div>
</div>
