<!-- footer section  -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-row">
                <div class="footer-col">
                    <a href="{{route('home')}}">
                        <img src="{{asset('front/images/ipadwrittenblack.png')}}" alt="logo" class="footer-logo" />
                    </a>
                    <p class="footer-about-text">
                        Welcome to iPad Wala, where quality meets affordability for Apple lovers in Pakistan!
                    </p>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{('front-product')}}">Our Products</a></li>
                        <li><a href="{{route('front-about-us')}}">about Us</a></li>
                        <li><a href="{{route('front-faq')}}">QnA </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 class="footer-title">Contact</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <img src="{{asset('front/images/mailvector.png')}}" alt="email" />
                            <a href="mailto:officialcodesbunny@gmail.com">&nbsp;abdulhaseeb@ipadwala.pk</a>
                        </li>
                        <li>
                            <img src="{{asset('front/images/telephonevector.png')}}" alt="phone" />
                            <NavLink to="tel:923099506114">&nbsp;+92 309 9506114</NavLink>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 class="footer-title">Follow us</h3>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/ipadwala0?igsh=eTdsZTYwdGllM3U5&utm_source=qr"
                           target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/share/14cs2eDxPh/?mibextid=wwXIfr" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i></i>
                        </a>
                        <a href="https://www.tiktok.com/@ipadwala.pk" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2024 iPad Wala.Powered by<a href="https://www.linkedin.com/in/abdul-wahab-224162257/"
                                             style="text-decoration: none; color: white;"> HW Tech</a></p>
        </div>
    </div>
</footer>

