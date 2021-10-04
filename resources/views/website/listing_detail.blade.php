<!DOCTYPE html>
<html lang="{{setting('language','en')}}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{setting('app_name')}} | {{setting('app_short_description')}}</title>
    <meta name="viewport" content="width=device-wi  dth, initial-scale=1">
    <link rel="icon" type="image/png" href="{{$app_logo ?? ''}}"/>

    <link rel="stylesheet" href="{{asset('website/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/mmenu.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
          type="text/css">
</head>
<body class="header-one">
@include ('website.header')
<div id="main_wrapper">
    <div class="clearfix"></div>
    <div id="utf_listing_gallery_part" class="utf_listing_section">
        <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
            @foreach($service_detail["media"] as $service)
                <a href="{{asset($service["url"])}}"
                   data-background-image="{{asset($service["url"])}}"
                   class="item utf_gallery"></a>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row utf_sticky_main_wrapper">
            <div class="col-lg-8 col-md-8">
                <div id="titlebar" class="utf_listing_titlebar">
                    <div class="utf_listing_titlebar_title">
                        <h2>{{$service_detail["name"]->en}}
                            @foreach($service_detail["categories"] as $category)
                                <span class="listing-tag">{{$category["name"]->en}}</span>
                            @endforeach
                        </h2>
                        <span> <a href="#utf_listing_location" class="listing-address"> <i
                                        class="sl sl-icon-location"></i> {{$service_detail["e_provider"]["name"]->en}} </a> </span>
                        <span class="call_now"><i class="sl sl-icon-phone"></i> {{$service_detail["e_provider"]["phone_number"]}}</span>
                        <div class="utf_star_rating_section" data-rating="4.5">
                            <div class="utf_counter_star_rating">{{number_format((float)$service_detail["rate"], 1, '.', '')}}
                                / ({{$service_detail["total_reviews"]}} Reviews)
                            </div>
                        </div>
                        <ul class="listing_item_social">
                            <li><a href="#"><i class="fa fa-bookmark"></i> Bookmark</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Add Review</a></li>
                            <li><a href="#"><i class="fa fa-flag"></i> Featured</a></li>
                            <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                        </ul>
                    </div>
                </div>
                <div id="utf_listing_overview" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30">Description</h3>
                    <p>{!! $service_detail["description"]->en !!}</p>
                    {{--<div id="utf_listing_tags"
                         class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                        <a href="#"><i class="sl sl-icon-phone" aria-hidden="true"></i> +(01) 1123-254-456</a>
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</a>
                        <a href="#"><i class="sl sl-icon-globe" aria-hidden="true"></i> www.example.com</a>
                    </div>--}}
                    <div class="social-contact">
                        <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                        <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                        <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                    </div>
                </div>

                <div id="utf_listing_tags" class="utf_listing_section listing_tags_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40">Photography Tags</h3>
                    <a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Portrait</a>
                    <a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Landscape</a>
                    <a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Nature</a>
                    <a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Black & White</a>
                    <a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Wildlife</a>
                </div>

                <div class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Options</h3>
                    <div class="show-more">
                        <div class="utf_pricing_list_section">
                            <h4>Options Listing</h4>
                            <ul>
                                @foreach($service_detail["options"] as $option)
                                    <li>
                                        <h5>{{$option["name"]->en}}</h5>
                                        <p>{!! $option["description"]->en !!}</p>
                                        <span>{{$option["price"] . ' ' . $default_currency}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="utf_listing_amenities" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Wedding Features</h3>
                    <ul class="utf_listing_features checkboxes margin-top-0">
                        <li>Air Conditioned</li>
                        <li>Room Service</li>
                        <li>Luxury Bedding</li>
                        <li>Free Wifi</li>
                        <li>Instant Book</li>
                        <li>Wireless Internet</li>
                        <li>Free Parking on premises</li>
                        <li>Friendly workspace</li>
                        <li>Live Music</li>
                    </ul>
                </div>

                <div id="utf_listing_faq" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-50 margin-bottom-40">Wedding FAQ's</h3>
                    <div class="style-2">
                        <div class="accordion">
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i
                                        class="sl sl-icon-plus"></i> (1) How to Open an Account?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                    Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i
                                        class="sl sl-icon-plus"></i> (2) How to Add Listing?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                    Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                            <h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i
                                        class="sl sl-icon-plus"></i> (3) What is Featured Listing?</h3>
                            <div>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                    Ipsum is simply dummy text of the printing and type setting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="utf_listing_location" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-60 margin-bottom-40">Location</h3>
                    <div id="utf_single_listing_map_block">
                        <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931"
                             data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="utf_street_view_btn">Street View</a>
                    </div>
                </div>
                <div id="utf_listing_reviews" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-75 margin-bottom-20">Reviews</h3>
                    <div class="clearfix"></div>
                    <div class="reviews-container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div id="review_summary">
                                    <strong>{{number_format((float)$service_detail["rate"], 1, '.', '')}}</strong>
                                    <small>Out of {{$service_detail["total_reviews"]}} Reviews</small>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Quality</strong></small>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 95%"
                                                 aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>77</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Space</strong></small>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%"
                                                 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>15</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Price</strong></small>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>18</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Service</strong></small>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>10</strong></small></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 review_progres_title"><small><strong>Location</strong></small>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 review_progres_title"><small><strong>05</strong></small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments utf_listing_reviews">
                        <ul>
                            @foreach($service_detail["e_service_reviews"] as $review)
                                <li>
                                    <div class="avatar"><img src="images/client-avatar1.jpg" alt=""/></div>
                                    <div class="utf_comment_content">
                                        <div class="utf_arrow_comment"></div>
                                        <div class="utf_star_rating_section" data-rating="{{$review["rate"]}}"></div>
                                        <div class="utf_by_comment">{{$review["user"]["name"]}}<span class="date">
                                                <i class="fa fa-clock-o"></i> {{date('D m,Y h:i A', strtotime($review["created_at"]))}}</span>
                                        </div>
                                        <p>{{$review["review"]}}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="utf_pagination_container_part margin-top-30">
                                <nav class="pagination">
                                    <ul>
                                        <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                        <li><a href="#" class="current-page">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="utf_add_review" class="utf_add_review-box">
                    <h3 class="utf_listing_headline_part margin-bottom-20">Add Your Review</h3>
                    <span class="utf_leave_rating_title">Your email address will not be published.</span>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="clearfix"></div>
                            <div class="utf_leave_rating margin-bottom-30">
                                <input type="radio" name="rating" id="rating-1" value="1"/>
                                <label for="rating-1" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-2" value="2"/>
                                <label for="rating-2" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-3" value="3"/>
                                <label for="rating-3" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-4" value="4"/>
                                <label for="rating-4" class="fa fa-star"></label>
                                <input type="radio" name="rating" id="rating-5" value="5"/>
                                <label for="rating-5" class="fa fa-star"></label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="add-review-photos margin-bottom-30">
                                <div class="photoUpload"><span>Upload Photo <i
                                                class="sl sl-icon-arrow-up-circle"></i></span>
                                    <input type="file" class="upload"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="utf_add_comment" class="utf_add_comment">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Name:</label>
                                    <input type="text" placeholder="Name" value=""/>
                                </div>
                                <div class="col-md-4">
                                    <label>Email:</label>
                                    <input type="text" placeholder="Email" value=""/>
                                </div>
                                <div class="col-md-4">
                                    <label>Subject:</label>
                                    <input type="text" placeholder="Subject" value=""/>
                                </div>
                            </div>
                            <div>
                                <label>Review:</label>
                                <textarea cols="40" placeholder="Your Message..." rows="3"></textarea>
                            </div>
                        </fieldset>
                        <button class="button">Submit Review</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">
                <div class="{{$service_detail["available"] ? "verified-badge" : "unverified-badge"}} with-tip margin-bottom-30">
                    <i class="sl {{$service_detail["available"] ? "sl-icon-check" : "sl-icon-close"}}"></i> {{$service_detail["available"] ? "Open Now" : "Closed"}}
                </div>
                <div class="utf_box_widget opening-hours margin-top-30">
                    <h3><i class="sl sl-icon-envelope-open"></i> Request Message Form</h3>
                    <form id="contactform">
                        <div class="row">
                            <div class="col-md-12">
                                <input name="name" type="text" value="Your Name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-12">
                                <input name="email" type="email" value="Email Address" placeholder="Email Address"
                                       required="">
                            </div>
                            <div class="col-md-12">
                                <input name="phone" type="text" value="Phone Number" placeholder="Phone Number"
                                       required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message"
                                          required=""></textarea>
                            </div>
                        </div>
                        <input type="submit" class="submit button" id="submit" value="Send Message">
                    </form>
                </div>

                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-phone"></i> Service Provider</h3>
                    <div class="utf_hosted_by_user_title"><a href="#" class="utf_hosted_by_avatar_listing">
                            <img src="{{asset($service_detail["e_provider"]["media"][0]["url"])}}" alt=""></a>
                        <h4><a href="#">{{$service_detail["e_provider"]["name"]->en}}</a></h4>
                        <div class="utf_star_rating_section" data-rating="5.0">
                        </div>
                    </div>
                    <ul class="utf_social_icon rounded margin-top-10">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <ul class="utf_listing_detail_sidebar">
                        <li><i class="sl sl-icon-phone"></i> {{$service_detail["e_provider"]["phone_number"]}}</li>
                    </ul>
                </div>
                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-folder-alt"></i> Categories</h3>
                    <ul class="utf_listing_detail_sidebar">
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Travel</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Nightlife</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Fitness</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Real Estate</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Restaurant</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="#">Dance Floor</a></li>
                    </ul>
                </div>
                <div class="opening-hours margin-top-35">
                    <div class="utf_coupon_widget" style="background-image: url(images/coupon-bg-1.jpg);">
                        <div class="utf_coupon_overlay"></div>
                        <a href="#" class="utf_coupon_top">
                            <h3>Book Now & Get 50% Discount</h3>
                            <div class="utf_coupon_expires_date">Date of Expires 05/08/2019</div>
                            <div class="utf_coupon_used"><strong>How to use?</strong> Just show us this coupon on a
                                screen
                            </div>
                        </a>
                        <div class="utf_coupon_bottom">
                            <p>Coupon Code</p>
                            <div class="utf_coupon_code">DL76T</div>
                        </div>
                    </div>
                </div>
                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-info"></i> Additional Information</h3>
                    <ul>
                        <li>Take Out: <span>Yes</span></li>
                        <li>Delivery: <span>Yes</span></li>
                        <li>Neutral Restrooms: <span>Yes</span></li>
                        <li>Has Pool Table: <span>Yes</span></li>
                        <li>Gender Neutral Restrooms: <span>Yes</span></li>
                        <li>Waiter Service: <span>Yes</span></li>
                    </ul>
                </div>
                <div class="utf_box_widget opening-hours margin-top-35">
                    <h3><i class="sl sl-icon-info"></i> Google AdSense</h3>
                    <span><img src="images/google_adsense.jpg" alt=""/></span>
                </div>
                <div class="utf_box_widget margin-top-35">
                    <h3><i class="sl sl-icon-phone"></i> Quick Contact to Help?</h3>
                    <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est
                        laborum.</p>
                    <ul class="utf_social_icon rounded">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <a class="utf_progress_button button fullwidth_block margin-top-5" href="contact.html">Contact
                        Us</a>
                </div>
                <div class="utf_box_widget listing-share margin-top-35 margin-bottom-40 no-border">
                    <h3><i class="sl sl-icon-pin"></i> Bookmark Listing</h3>
                    <span>1275 People Bookmarked Listings</span>
                    <button class="like-button"><span class="like-icon"></span> Login to Bookmark Listing</button>
                    <ul class="utf_social_icon rounded margin-top-35">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="utf_box_widget opening-hours review-avg-wrapper margin-top-35">
                    <h3><i class="sl sl-icon-star"></i> Rating Average </h3>
                    <div class="box-inner">
                        <div class="rating-avg-wrapper text-theme clearfix">
                            <div class="rating-avg">4.8</div>
                            <div class="rating-after">
                                <div class="rating-mode">/5 Average</div>

                            </div>
                        </div>
                        <div class="ratings-avg-wrapper">
                            <div class="ratings-avg-item">
                                <div class="rating-label">Quality</div>
                                <div class="rating-value text-theme">5.0</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Location</div>
                                <div class="rating-value text-theme">4.5</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Space</div>
                                <div class="rating-value text-theme">3.5</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Service</div>
                                <div class="rating-value text-theme">4.0</div>
                            </div>
                            <div class="ratings-avg-item">
                                <div class="rating-label">Price</div>
                                <div class="rating-value text-theme">5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block padding-top-20 padding-bottom-50">
        <div class="container">
            <div class="row slick_carousel_slider">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-25">Similar Listings</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="simple_slick_carousel_block utf_dots_nav">
                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-01.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span> <span
                                                class="featured_tag">Featured</span>
                                        <span class="{{$service_detail["available"] ? "utf_open_now" : "utf_closed"}}">
                                            {{$service_detail["available"] ? "Open Now" : "Closed"}}
                                        </span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $25 - $55</span>
                                                <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Chontaduro Barcelona</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-02.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Electric-Guitar"></i> Events</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $45 - $70</span>
                                            </div>
                                            <h3>The Lounge & Bar</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-03.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                        <span class="utf_closed">Closed</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $25 - $55</span>
                                            </div>
                                            <h3>Westfield Sydney</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-04.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Dumbbell"></i> Fitness</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $45 - $70</span>
                                                <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Ruby Beauty Center</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-05.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span
                                                class="featured_tag">Featured</span>
                                        <span class="utf_closed">Closed</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $45 - $70</span>
                                            </div>
                                            <h3>UK Fitness Club</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                              class="utf_listing_item-container compact">
                                    <div class="utf_listing_item"><img src="images/utf_listing_item-06.jpg" alt="">
                                        <span
                                                class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span>
                                        <span class="utf_open_now">Open Now</span>
                                        <div class="utf_listing_item_content">
                                            <div class="utf_listing_prige_block">
                                            <span class="utf_meta_listing_price"><i
                                                        class="fa fa-tag"></i> $25 - $45</span>
                                                <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                            </div>
                                            <h3>Fairmont Pacific Rim</h3>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                        </div>
                                    </div>
                                    <div class="utf_star_rating_section" data-rating="4.5">
                                        <div class="utf_counter_star_rating">(4.5)</div>
                                        <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>
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
</div>
@include ('website.footer')


</body>
</html>

<script>
    starRating('.utf_star_rating_section')

    function starRating(ratingElem) {
        $(ratingElem).each(function () {
            var dataRating = $(this).attr('data-rating');

            function starsOutput(firstStar, secondStar, thirdStar, fourthStar, fifthStar) {
                return ('' + '<span class="' + firstStar + '"></span>' + '<span class="' + secondStar + '"></span>' + '<span class="' + thirdStar + '"></span>' + '<span class="' + fourthStar + '"></span>' + '<span class="' + fifthStar + '"></span>');
            }

            var fiveStars = starsOutput('star', 'star', 'star', 'star', 'star');
            var fourHalfStars = starsOutput('star', 'star', 'star', 'star', 'star half');
            var fourStars = starsOutput('star', 'star', 'star', 'star', 'star empty');
            var threeHalfStars = starsOutput('star', 'star', 'star', 'star half', 'star empty');
            var threeStars = starsOutput('star', 'star', 'star', 'star empty', 'star empty');
            var twoHalfStars = starsOutput('star', 'star', 'star half', 'star empty', 'star empty');
            var twoStars = starsOutput('star', 'star', 'star empty', 'star empty', 'star empty');
            var oneHalfStar = starsOutput('star', 'star half', 'star empty', 'star empty', 'star empty');
            var oneStar = starsOutput('star', 'star empty', 'star empty', 'star empty', 'star empty');
            if (dataRating >= 4.75) {
                $(this).append(fiveStars);
            } else if (dataRating >= 4.25) {
                $(this).append(fourHalfStars);
            } else if (dataRating >= 3.75) {
                $(this).append(fourStars);
            } else if (dataRating >= 3.25) {
                $(this).append(threeHalfStars);
            } else if (dataRating >= 2.75) {
                $(this).append(threeStars);
            } else if (dataRating >= 2.25) {
                $(this).append(twoHalfStars);
            } else if (dataRating >= 1.75) {
                $(this).append(twoStars);
            } else if (dataRating >= 1.25) {
                $(this).append(oneHalfStar);
            } else if (dataRating < 1.25) {
                $(this).append(oneStar);
            }
        });
    }
</script>