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
    {{--<div id="titlebar" class="gradient margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Layout Grid Full Width Maps</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index_1.html">Home</a></li>
                            <li>Layout Grid Full Width Maps</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>--}}
    <div id="utf_map_container" class="fullwidth_block-home-map margin-bottom-30">
        <div id="map" data-map-zoom="9"></div>
        <div class="main_inner_search_block">
            @include ('website.search')
        </div>
        <a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Scrolling Enable</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 listing_grid_item">
                <div class="listing_filter_block margin-top-30">
                    <div class="col-md-3 col-xs-3">
                        <div class="utf_layout_nav"><a href="#" class="grid active"><i class="fa fa-th"></i></a> <a
                                    href="listings_list_full_width.html" class="list"><i
                                        class="fa fa-align-justify"></i></a></div>
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <div class="sort-by utf_panel_dropdown sort_by_margin float-right"><a href="#">Destination</a>
                            <div class="utf_panel_dropdown-content">
                                <input class="distance-radius" type="range" min="1" max="999" step="1" value="1"
                                       data-title="Select Range">
                                <div class="panel-buttons">
                                    <button class="panel-apply">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
                                    <option>Sort by Listing</option>
                                    <option>Latest Listings</option>
                                    <option>Popular Listings</option>
                                    <option>Price (Low to High)</option>
                                    <option>Price (High to Low)</option>
                                    <option>Highest Reviewe</option>
                                    <option>Lowest Reviewe</option>
                                    <option>Newest Listing</option>
                                    <option>Oldest Listing</option>
                                    <option>Random Listings</option>
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Categories:" class="utf_chosen_select_single"
                                        id="service_category">
                                    <option value="">Select Category</option>
                                    @foreach($featured_categories as $category)
                                        <option value="{{$category->id}}">{{json_decode($category->name)->en}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item utf_search_map_section">
                                <ul>
                                    <li><a class="utf_common_button" href="#"><i class="fa fa-dot-circle-o"></i>Near Me</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="featured_services">

                </div>
                {{--<div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_pagination_container_part margin-top-20 margin-bottom-75">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>

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

<script>
    var tpj = jQuery;
    var revapi4;
    var lat;
    var lng;

    tpj(document).ready(function () {
        getLocation();
        var input = document.getElementById('current_location');
        var autocomplete = new google.maps.places.Autocomplete(input);
    });

    tpj('#current_location').on('change', function () {
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address': tpj('#current_location').val()}, (res, status) => {
            console.log(res, status)
            if (status == google.maps.GeocoderStatus.OK) {
                lat = res[0].geometry.location.lat();
                lng = res[0].geometry.location.lng();
                loadServices();
            }
        });
    });

    tpj('#service_category').on('change', function () {
        loadServices();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        loadServices();
        getAddress();
    }

    function loadServices() {
        $.ajax({
            type: 'POST',
            url: '/getservices',
            data: {
                "_token": "{{ csrf_token() }}",
                "lat": lat,
                "lng": lng,
            },
            success: function (data) {
                if (data) {
                    services = JSON.parse(data);
                    console.log(services);
                    html = '';
                    services.forEach(function (s, i) {
                        html += '<div class="col-md-4 col-lg-4 col-md-12">' +
                            '<a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="1">' +
                            '<div class="utf_listing_item">' +
                            '<img src="storage/app/public/' + s["media"][0]["id"] + "/" + s["media"][0]["file_name"] + '" alt="">' +
                            '<span class="featured_tag">Featured</span>' +
                            (s.available ? '<span class="utf_open_now">Available</span>' : '<span class="utf_open_now">Available</span>') +
                            '<div class="utf_listing_item_content">' +
                            '<div class="utf_listing_prige_block">' +
                            '<span class="utf_meta_listing_price">' +
                            '<i class="fa fa-tag"></i>' + s.price + ' ' + "{{$default_currency}}" + '</span>' +
                            '<span class="utp_approve_item">' +
                            '<i class="utf_approve_listing"></i></span>' +
                            '</div>' +
                            '<h3>' + s.name["en"] + '</h3>' +
                            '<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>' +
                            '<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="utf_star_rating_section" data-rating="' + s["rate"] + '">' +
                            '<div class="utf_counter_star_rating">(' + s["total_reviews"] + ')</div>' +
                            '<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>' +
                            '<span class="like-icon"></span>' +
                            '</div>' +
                            '</a>' +
                            '</div>';
                    });

                    tpj("#featured_services").html(html);

                    starRating('.utf_star_rating_section')

                    tpj('.simple_slick_carousel_block').slick('refresh');
                }
            }
        });
    }

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

    function getAddress() {
        var geocoder = new google.maps.Geocoder();							// create a geocoder object
        var location = new google.maps.LatLng(lat, lng);		// turn coordinates into an object
        geocoder.geocode({'latLng': location}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {						// if geocode success
                name = results[0].formatted_address;
                tpj('#current_location').val(name);
            } else {
                alert("Geocode failure: " + status);								// alert any other error(s)
                return false;
            }
        });
    }

</script>
</body>
</html>