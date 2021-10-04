<div id="footer" class="footer_sticky_part">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Useful Links</h4>
                <ul class="social_footer_link">
                    <li><a href="{{url('')}}">Home</a></li>
                    <li><a href="{{ url('listing') }}">Listing</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>My Account</h4>
                <ul class="social_footer_link">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">My Listing</a></li>
                    <li><a href="#">Favorites</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Pages</h4>
                <ul class="social_footer_link">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Our Partners</a></li>
                    <li><a href="#">How It Work</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Help</h4>
                <ul class="social_footer_link">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Add Listing</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h4>About Us</h4>
                <p>{!! setting('about_us') !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="footer_copyright_part">Copyright © {{date('Y')}} All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
<div id="bottom_backto_top"><a href="#"></a></div>

<!-- Scripts -->
<script src="{{asset('website/scripts/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('website/scripts/chosen.min.js')}}"></script>
<script src="{{asset('website/scripts/slick.min.js')}}"></script>
<script src="{{asset('website/scripts/rangeslider.min.js')}}"></script>
<script src="{{asset('website/scripts/magnific-popup.min.js')}}"></script>
<script src="{{asset('website/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('website/scripts/bootstrap-select.min.js')}}"></script>
<script src="{{asset('website/scripts/mmenu.js')}}"></script>
<script src="{{asset('website/scripts/tooltips.min.js')}}"></script>
<script src="{{asset('website/scripts/color_switcher.js')}}"></script>
<script src="{{asset('website/scripts/jquery_custom.js')}}"></script>
<script src="{{asset('website/scripts/typed.js')}}"></script>

<!-- Maps -->
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{$google_maps_key}}&libraries=places"></script>
<script src="{{asset('website/scripts/infobox.min.js')}}"></script>
<script src="{{asset('website/scripts/markerclusterer.js')}}"></script>
<script src="{{asset('website/scripts/maps.js')}}"></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: ["Attractions", " Restaurants", " Hotels"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>

<script src="{{asset('website/scripts/extensions/themepunch.tools.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/themepunch.revolution.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('website/scripts/extensions/revolution.extension.video.min.js')}}"></script>