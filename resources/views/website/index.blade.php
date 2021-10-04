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
<div id="main_wrapper">
    @include ('website.header')
    @include ('website.home')
    @include ('website.footer')
</div>

<script>
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function () {
        getLocation();
        if (tpj("#utf_rev_slider_block").revolution == undefined) {
            revslider_showDoubleJqueryError("#utf_rev_slider_block");
        } else {
            revapi4 = tpj("#utf_rev_slider_block").show().revolution({
                sliderType: "standard",
                jsFileLocation: "<?php echo asset('website/scripts/'); ?>",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 6000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap"></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: false,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "hermes",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 6,
                        tmp: ''
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1200, 992, 768, 480],
                visibilityLevels: [1200, 992, 768, 480],
                gridwidth: [1180, 1024, 778, 480],
                gridheight: [565, 900, 800, 800],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2200,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        // lat = position.coords.latitude;
        // lng = position.coords.longitude;

        lat = "25.276987";
        lng = "55.296249";

        console.log(getAddress(lat, lng));

        $.ajax({
            type: 'POST',
            url: '/getservices',
            data: {
                "_token": "{{ csrf_token() }}",
                "lat": lat,
                "lng": lng
            },
            success: function (data) {
                if (data) {
                    services = JSON.parse(data);
                    console.log(services);
                    html = '';
                    services.forEach(function (s, i) {
                        html += '<div class="utf_carousel_item">' +
                            '<a href="{{url('listing_detail')}}/' + s.id + '" class="utf_listing_item-container compact">' +
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
    }

    function getAddress(myLatitude, myLongitude) {
        var geocoder = new google.maps.Geocoder();							// create a geocoder object
        var location = new google.maps.LatLng(myLatitude, myLongitude);		// turn coordinates into an object
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
