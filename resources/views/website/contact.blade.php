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

    <div class="utf_contact_map margin-bottom-70">
        <div id="utf_single_listing_map_block">
            <div id="utf_single_listingmap" data-latitude="{{$latitude}}" data-longitude="{{$longitude}}"
                 data-map-icon="im im-icon-Map2"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="contact" class="margin-bottom-70">
                    <h4><i class="sl sl-icon-phone"></i> Contact Form</h4>
                    <form id="contactform">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Frist Name" required/>
                            </div>
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Last Name" required/>
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email" required/>
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" placeholder="Subject" required/>
                            </div>
                            <div class="col-md-12">
                                <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message"
                                          required></textarea>
                            </div>
                        </div>
                        <input type="submit" class="submit button" id="submit" value="Submit"/>
                    </form>
                </section>
            </div>

            <div class="col-md-4">
                <div class="utf_box_widget margin-bottom-70">
                    <h3><i class="sl sl-icon-map"></i> Office Address</h3>
                    <div class="utf_sidebar_textbox">
                        <ul class="utf_contact_detail">
                            <li><strong>Phone:-</strong> <span>{{$phone}}</span></li>
                            <li><strong>Web:-</strong> <span><a href="{{$website}}">{{$website}}</a></span></li>
                            <li><strong>E-Mail:-</strong> <span><a
                                            href="mailto:{{$email}}">{{$email}}</a></span></li>
                            <li><strong>Address:-</strong> <span>{{$address}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
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
    @include ('website.footer')
</div>
</body>
</html>
