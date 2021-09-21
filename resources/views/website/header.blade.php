<header id="header_part">
    <div id="header">
        <div class="container">
            <div class="utf_left_side">
                <div id="logo"><a href="{{url('')}}"><img src="{{$app_logo ?? ''}}" alt=""></a></div>
                <div class="mmenu-trigger">
                    <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                    </button>
                </div>
                <nav id="navigation" class="style_one">
                    <ul id="responsive">
                        <li><a @if($page == 'home') class="current" @endif href="{{url('')}}">Home</a>
                        </li>
                        <li><a href="#">Listings</a>
                            <ul>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="listings_list_with_sidebar.html">Listing List Sidebar</a></li>
                                        <li><a href="listings_list_full_width.html">Listing List Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="listings_grid_with_sidebar.html">Listing Grid Sidebar</a></li>
                                        <li><a href="listings_two_column_map_grid.html">Listing Two Column Grid</a>
                                        </li>
                                        <li><a href="listings_grid_full_width.html">Listing Grid Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Half Listing Map</a>
                                    <ul>
                                        <li><a href="listings_half_screen_map_list.html">Listing Half List</a></li>
                                        <li><a href="listings_half_screen_map_grid.html">Listing Half Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Listing Details</a>
                                    <ul>
                                        <li><a href="listings_single_page_1.html">Single Listing Version 1</a></li>
                                        <li><a href="listings_single_page_2.html">Single Listing Version 2</a></li>
                                        <li><a href="listings_single_page_3.html">Single Listing Version 3</a></li>
                                        <li><a href="listings_single_page_4.html">Single Listing Version 4</a></li>
                                        <li><a href="listings_single_page_5.html">Single Listing Version 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">User Panel</a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="dashboard_add_listing.html">Add Listing</a></li>
                                <li><a href="dashboard_my_listing.html">My Listings</a></li>
                                <li><a href="dashboard_bookings.html">Bookings</a></li>
                                <li><a href="dashboard_messages.html">Messages</a></li>
                                <li><a href="dashboard_wallet.html">Wallet</a></li>
                                <li><a href="dashboard_visitor_review.html">Reviews</a></li>
                                <li><a href="dashboard_bookmark.html">Bookmark</a></li>
                                <li><a href="dashboard_my_profile.html">My Profile</a></li>
                                <li><a href="dashboard_change_password.html">Change Password</a></li>
                                <li><a href="dashboard_invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog_page.html">Blog Grid</a></li>
                                <li><a href="blog_page_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_page_right_sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog_detail_left_sidebar.html">Blog Detail Leftside</a></li>
                                <li><a href="blog_detail_right_sidebar.html">Blog Detail Rightside</a></li>
                            </ul>
                        </li>
                        <li><a @if($page == 'contact') class="current" @endif href="{{url('contact')}}">Contact Us</a>
                        </li>
                        <li><a @if($page == 'about') class="current" @endif href="{{url('about')}}">About Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="utf_right_side">
                <div class="header_widget"><a href="#dialog_signin_part"
                                              class="button border sign-in popup-with-zoom-anim"><i
                                class="fa fa-sign-in"></i> Sign In</a> <a href="dashboard_add_listing.html"
                                                                          class="button border with-icon"><i
                                class="sl sl-icon-user"></i> Add Listing</a></div>
            </div>

            <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                <div class="small_dialog_header">
                    <h3>Sign In</h3>
                </div>
                <div class="utf_signin_form style_one">
                    <ul class="utf_tabs_nav">
                        <li class=""><a href="#tab1">Log In</a></li>
                        <li><a href="#tab2">Register</a></li>
                    </ul>
                    <div class="tab_container alt">
                        <div class="tab_content" id="tab1" style="display:none;">
                            <form method="post" class="login">
                                <a href="javascript:void(0);" class="social_bt facebook_btn"><i
                                            class="fa fa-facebook"></i>Login with Facebook</a>
                                <a href="javascript:void(0);" class="social_bt google_btn"><i
                                            class="fa fa-google-plus"></i>Login with Google</a>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username">
                                        <input type="text" class="input-text" name="username" id="username" value=""
                                               placeholder="Username"/>
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password">
                                        <input class="input-text" type="password" name="password" id="password"
                                               placeholder="Password"/>
                                    </label>
                                </p>
                                <div class="utf_row_form utf_form_wide_block form_forgot_part"><span
                                            class="lost_password fl_left"> <a href="javascript:void(0);">Forgot Password?</a> </span>
                                    <div class="checkboxes fl_right">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="utf_row_form">
                                    <input type="submit" class="button border margin-top-5" name="login"
                                           value="Login"/>
                                </div>
                            </form>
                        </div>

                        <div class="tab_content" id="tab2" style="display:none;">
                            <form method="post" class="register">
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username2">
                                        <input type="text" class="input-text" name="username" id="username2"
                                               value="" placeholder="Username"/>
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="email2">
                                        <input type="text" class="input-text" name="email" id="email2" value=""
                                               placeholder="Email"/>
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password1">
                                        <input class="input-text" type="password" name="password1" id="password1"
                                               placeholder="Password"/>
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password2">
                                        <input class="input-text" type="password" name="password2" id="password2"
                                               placeholder="Confirm Password"/>
                                    </label>
                                </p>
                                <input type="submit" class="button border fw margin-top-10" name="register"
                                       value="Register"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>