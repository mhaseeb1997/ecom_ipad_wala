<section class="sectionserviceRow">
    <!-- Fixed Icon Section (4 columns) -->
    <div class="fixedIcons">
        <a href="https://www.facebook.com/profile.php?id=61565411637604&mibextid=ZbWKwL" target="_blank"
           class="facebookicon"><i class="fab fa-facebook"> </i></a>
        <a href="https://www.instagram.com/codes.bunny?igsh=MjU2aXl1eWRwa2Q2" target="_blank" class="instaicon"><i
                class="fab fa-instagram"> </i></a>
    </div>

    <!-- Scrolling Content Section (8 columns) -->
    <div class="scrollingContent">
        <div class="serviceRow">
            <div class="serviceItem"><span class="star">⭐</span> hello 1</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 2</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 3</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 4</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 5</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 6</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 7</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 8</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 9</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 10</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 11</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 12</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 13</div>
            <div class="serviceItem"><span class="star">⭐</span> hello 14</div>


        </div>
    </div>
</section>


<!-- First Navbar (Logo, Search, Icons) -->
<header class="main-header ">
    <nav class="main-menu clearfix">
        <div class="container">
            <div class="main-menu-wrapper clearfix">
                <div class="main-menu-wrapper-inner clearfix">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo">
                            <a href="/"><img src="{{asset('front/images/applelogo.png')}}" width="100" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <button class="btn sbtn d-lg-none" style="margin-right: 20px;" type="button"
                                    onclick="toggleSearch()">
                                <i class="bi bi-search" style="color: aliceblue;"> </i>
                            </button>
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown">
                                    <a href="{{route('front-product')}}">Shop</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="{{route('front-product')}}">ipad</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route('front-product')}}">Smartwatches</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">Mobiles</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route('front-product')}}">MackBook</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('front-about-us')}}">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-box-cart-box">
                            <button class="btn" style="margin-right: 20px;" type="button" onclick="toggleSearch()">
                                <i class="bi bi-search" style="color: aliceblue;"> </i>
                            </button>

                            <div class="flags d-flex align-items-center">
                                <img src="{{asset('front/images/UAEflag.png')}}" alt="UAE Flag" width="30" height="20"
                                     class="me-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg"
                                     style="margin-right: 20px;" alt="Pakistan Flag" width="30" height="20">
                            </div>
                            @if (Auth::check())
                                <a href="{{route('user_dashboard')}}" class="main-menu-wrapper__cart" style="color: #fff; text-decoration: none">
                                    {{ Auth::user()->name }}
                                </a>
                            @else
                                <a href="{{route('front-auth')}}" class="main-menu-wrapper__cart ">
                                    <i class="fa-regular fa-user fa-sm" style="color: #fcfcfc;"></i>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>

                <div id="searcher">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search">
                        <button class="search-button">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="images/applelogo.png"
                                                              width="100" alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">

                <a href="#" class="fab fa-facebook-square"></a>
                <!-- <a href="#" class="fab fa-pinterest-p"></a> -->
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
