<!-- Optional JavaScript -->
<script src="{{asset('front/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
{{--    <script src="{{asset('front/vendors/jarallax/jarallax.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-appear/jquery.appear.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-validate/jquery.validate.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/nouislider/nouislider.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/odometer/odometer.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/swiper/swiper.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/tiny-slider/tiny-slider.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/wnumb/wNumb.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/wow/wow.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/isotope/isotope.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/countdown/countdown.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/twentytwenty/twentytwenty.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/twentytwenty/jquery.event.move.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/bxslider/jquery.bxslider.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/vegas/vegas.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/jquery-ui/jquery-ui.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/timepicker/timePicker.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/particles/particles.min.js')}}"></script>--}}
{{--    <script src="{{asset('front/vendors/particles/particles-config.js')}}"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>--}}
<script src="{{asset('front/js/izeetak.js')}}"></script>
@stack('front-js')
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
        window.open("https://wa.me/971545151570", "_blank"); // Replace with your WhatsApp number
    }
</script>
