@if(count($slides) > 0)
    <div id="utf_rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1"
         style="margin:0 auto;background-color:transparent;padding:0;">
        <div id="utf_rev_slider_block" class="rev_slider home fullwidthabanner" style="display:none;"
             data-version="5.0.7">
            <ul>
                @foreach($slides as $slide)
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
                        <img src="{{asset('storage/app/public/'.$slide["media"][0]["id"]."/".$slide["media"][0]["file_name"])}}"
                             alt="" data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina
                             data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100"
                             data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                             data-offsetend="0 0">
                        @include ('website.search')
                        <div class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                             id="utf_slide_layer_item_one"
                             data-x="['center','center','center','center']" data-hoffset="['0']"
                             data-y="['70','30','20','0']" data-voffset="['0']"
                             data-width="['900','620', 640','420','320']"
                             data-height="auto"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
                             data-transform_out=""
                             data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000"
                             data-responsive_offset="on">
                            <div class="utf_item_title margin-bottom-15"
                                 id="utf_slide_layer_detail_one"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['20','20','20','20']"
                                 data-voffset="['-40','-40','-20','-80']"
                                 data-fontsize="['56','46','30','34','22']"
                                 data-lineheight="['70','60','34','30','25']"
                                 data-width="['960','620', 640','420','320']"
                                 data-height="none" data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                                 data-transform_out="opacity:0;s:300;"
                                 data-start="600"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-basealign="slide"
                                 data-responsive_offset="off"
                                 data-responsive="off"
                                 style="z-index:6;color:{{$slide["text_color"]}};letter-spacing:0px;font-weight:600;">{{$slide["text"]->en}}
                            </div>
                            {{--<div class="utf_rev_description_text">Business owners - over a million people view these
                                listings every month - we highly recommend you ensure your business is properly listed.
                            </div>--}}
                            <a href="#" style="background-color: {{$slide['button_color']}}"
                               class="button medium">{{$slide['button']->en}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="tp-static-layers"></div>
        </div>
    </div>
@endif

@if(count($featured_categories) > 0)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-top-75"> Most Popular Categories<span>Browse the most desirable categories</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container_categories_box margin-top-5 margin-bottom-30">
                    @foreach($featured_categories as $categories)
                        <a href="listings_list_with_sidebar.html" style="background-color: {{$categories->color}};"
                           class="utf_category_small_box_part">
                            <i class="im im-icon-Hotel"></i>
                            <h4>{{json_decode($categories->name)->en}}</h4>
                            <span>{{$categories->category_count ?: 0}}</span>
                        </a>
                    @endforeach
                </div>
                <div class="col-md-12 centered_content"><a href="#" class="button border margin-top-20">View More</a>
                </div>
            </div>
        </div>
    </div>
@endif

<section class="fullwidth_block margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
    <div class="container">
        <div class="row slick_carousel_slider">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-bottom-45"> Most Recommended Services <span>Explore the best services in the city</span>
                </h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="simple_slick_carousel_block utf_dots_nav" id="featured_services"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fullwidth_block margin-top-65 margin-bottom-75" data-background-color="#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-bottom-45">Recent Places<span>Find a places that fits your comfort</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="utf_listing_categorie">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Hamburger"></i></span>
                                <h3>Food &amp; Drinks</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Cafe</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Pizza Place</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Winery</a> <span>22</span></li>
                                <li><a href="listings_list_with_sidebar.html">Restaurant</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Digital-Drawing"></i></span>
                                <h3>Entertainment</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Movie Theater</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Art Gallery</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Museum</a> <span>15</span></li>
                                <li><a href="listings_list_with_sidebar.html">Stadium</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="sl sl-icon-support"></i></span>
                                <h3>Local Services</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Motor Machine</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Car Machine</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Car Wash Station</a> <span>25</span>
                                </li>
                                <li><a href="listings_list_with_sidebar.html">Electrician Shop</a> <span>06</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Cocktail"></i></span>
                                <h3>Nightlife</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Dance Floor</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Brewery</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Bar</a> <span>18</span></li>
                                <li><a href="listings_list_with_sidebar.html">Pubs</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="sl sl-icon-graduation"></i></span>
                                <h3>Educational</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">College</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">School</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Distance Learning</a> <span>35</span>
                                </li>
                                <li><a href="listings_list_with_sidebar.html">Home Tutors</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Dumbbell"></i></span>
                                <h3>Health &amp; Fitness</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Disease</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Drugs</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Fitness</a> <span>15</span></li>
                                <li><a href="listings_list_with_sidebar.html">Nutrition</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Homosexual"></i></span>
                                <h3>Lodging</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Hotels</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Apartments</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Guest Room</a> <span>18</span></li>
                                <li><a href="listings_list_with_sidebar.html">City Tours</a> <span>06</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="utf_listing_categorybox">
                            <div class="utf_listing_category_title">
                                <span class="utf_listing_cateicon"><i class="im im-icon-Hotel"></i></span>
                                <h3>Shops</h3>
                            </div>
                            <ul>
                                <li><a href="listings_list_with_sidebar.html">Bank</a> <span>12</span></li>
                                <li><a href="listings_list_with_sidebar.html">Furniture</a> <span>05</span></li>
                                <li><a href="listings_list_with_sidebar.html">Boutiques</a> <span>15</span></li>
                                <li><a href="listings_list_with_sidebar.html">Sport Equipment</a> <span>06</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="listings_grid_full_width.html" class="flip-banner parallax" data-background="images/slider-bg-02.jpg"
   data-color="#000" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
    <div class="flip-banner-content">
        <h2 class="flip-visible">Browse Listings Attractions List</h2>
    </div>
</a>

@if(count($featured_reviews) > 0)
    <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline_part centered">What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="fullwidth_carousel_container_block margin-top-20">
            <div class="utf_testimonial_carousel testimonials">
                @foreach($featured_reviews as $review)
                    <div class="utf_carousel_review_part">
                        <div class="utf_testimonial_box">
                            <div class="testimonial">
                                {{$review->review}}
                            </div>
                        </div>
                        <div class="utf_testimonial_author"><img src="images/happy-client-01.jpg" alt="">
                            <h4>{{$review->username}} <span>{{json_decode($review->service_name)->en}}</span></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<div class="container padding-bottom-70">
    <div class="row">
        <div class="col-md-12">
            <h3 class="headline_part centered margin-bottom-35 margin-top-70">Most Popular Cities/Towns <span>Discover best things to do restaurants, shopping, hotels, cafes and places<br>around the world by categories.</span>
            </h3>
        </div>
        <div class="col-md-3">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-01.jpg">
                <div class="utf_img_content_box visible">
                    <h4>Nightlife </h4>
                    <span>18 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-02.jpg">
                <div class="utf_img_content_box visible">
                    <h4>Shops</h4>
                    <span>24 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-03.jpg">
                <div class="utf_img_content_box visible">
                    <h4>Restaurant</h4>
                    <span>17 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-04.jpg">
                <div class="utf_img_content_box visible">
                    <h4>Outdoor Activities</h4>
                    <span>12 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-05.jpg">
                <div class="utf_img_content_box visible">
                    <h4>Hotels</h4>
                    <span>14 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="listings_list_with_sidebar.html" class="img-box"
               data-background-image="images/popular-location-06.jpg">
                <div class="utf_img_content_box visible">
                    <h4>New York</h4>
                    <span>9 Listings</span>
                </div>
            </a>
        </div>
        <div class="col-md-12 centered_content"><a href="#" class="button border margin-top-20">View More
                Categories</a></div>
    </div>
</div>
<section class="fullwidth_block margin-bottom-0 padding-top-30 padding-bottom-65"
         data-background-color="linear-gradient(to bottom, #f9f9f9 0%, rgba(255, 255, 255, 1))">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline_part centered margin-bottom-40 margin-top-30">Our Company Logos</h3>
            </div>
            <div class="col-md-12">
                <div class="companie-logo-slick-carousel utf_dots_nav margin-bottom-10">
                    <div class="item">
                        <img src="images/brand_logo_01.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_02.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_03.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_04.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_05.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_06.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/brand_logo_07.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="utf_cta_area_item utf_cta_area2_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block clearfix">
                    <div class="col-md-8 col-sm-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                            <p class="utf_sec_meta">
                                Subscribe to get latest updates and information.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="utf_theme_btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>