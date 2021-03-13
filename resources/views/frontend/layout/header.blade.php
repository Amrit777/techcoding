<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{ asset('frontend/images/header-logo.png') }}"
                    alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{route('welcome')}}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{ asset('frontend/images/header-logo.png') }}" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{ asset('frontend/images/header-logo2.png') }}"
                    alt="header-logo2.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                {{-- <li>
                    <a href="#"><span class="title">Home</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                        <li><a href="index5.html">Home 5</a></li>
                        <li><a href="index6.html">Home - University</a></li>
                        <li><a href="index7.html">Home College</a></li>
                        <li><a href="index8.html">Home Kindergarten</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="#"><span class="title">Courses</span></a>
                    <!-- Level Two-->
                    <ul>
                        {{-- <li>
                            <a href="#">Courses List</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-v1.html">Courses v1</a></li>
                                <li><a href="page-course-v2.html">Courses v2</a></li>
                                <li><a href="page-course-v3.html">Courses v3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Courses Single</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-single-v1.html">Single V1</a></li>
                                <li><a href="page-course-single-v2.html">Single V2</a></li>
                                <li><a href="page-course-single-v3.html">Single V3</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="page-instructors.html">Instructors</a></li>
                        <li><a href="page-instructors.html">Instructors</a></li>
                        <li><a href="page-instructors-single.html">Instructor Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Events</span></a>
                    {{-- <ul>
                        <li><a href="page-event.html">Event List</a></li>
                        <li><a href="page-event-single.html">Event Single</a></li>
                    </ul> --}}
                </li>
                {{-- <li>
                    <a href="#"><span class="title">Pages</span></a>
                    <ul>
                        <li>
                            <a href="#"><span class="title">Shop Pages</span></a>
                            <ul>
                                <li><a href="page-shop.html">Shop</a></li>
                                <li><a href="page-shop-single.html">Shop Single</a></li>
                                <li><a href="page-shop-cart.html">Cart</a></li>
                                <li><a href="page-shop-checkout.html">Checkout</a></li>
                                <li><a href="page-shop-order.html">Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">User Admin</span></a>
                            <ul>
                                <li><a href="page-dashboard.html">Dashboard</a></li>
                                <li><a href="page-my-courses.html">My Courses</a></li>
                                <li><a href="page-my-order.html">My Order</a></li>
                                <li><a href="page-my-message.html">My Message</a></li>
                                <li><a href="page-my-review.html">My Review</a></li>
                                <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                <li><a href="page-my-listing.html">My Listing</a></li>
                                <li><a href="page-my-setting.html">My Setting</a></li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="{{route('login')}}">LogIn</a></li>
                        <li><a href="page-pricing.html">Membership</a></li>
                        <li><a href="page-error.html">404 Page</a></li>
                        <li><a href="page-terms.html">Terms and Conditions</a></li>
                        <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="#"><span class="title">Blog</span></a>
                    {{-- <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-list.html">Blog List 3</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul> --}}
                </li>
                <li class="last">
                    <a href="{{route('contact')}}"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                <li class="list-inline-item list_s"><a href="{{route('login')}}" class="btn flaticon-user"> <span
                            class="dn-lg">Login</span></a></li>
                {{-- <li class="list-inline-item list_s">
                    <div class="cart_btn">
                        <ul class="cart">
                            <li>
                                <a href="#" class="btn cart_btn flaticon-shopping-bag"><span>5</span></a>
                                <ul class="dropdown_content">
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Dolar Sit Amet</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Lorem Ipsum</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Is simply</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <h5>Subtotal: $57.70</h5>
                                        <a href="#" class="btn btn-thm cart_btns">View cart</a>
                                        <a href="#" class="btn btn-thm3 checkout_btns">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                <li class="list-inline-item list_s">
                    <div class="search_overlay">
                        <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                        </a>
                    </div>
                </li>
            </ul><!-- Button trigger modal -->
        </nav>
    </div>
</header>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="{{ asset('frontend/images/header-logo.png') }}"
                    alt="header-logo.png">
                <span>edumy</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                        <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                        </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                    class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                                <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Search courses..."
                                        id="mk-fullscreen-search-input2">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value=""
                                            type="submit"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            {{-- <li><span>Home</span>
                <ul>
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index2.html">Home 2</a></li>
                    <li><a href="index3.html">Home 3</a></li>
                    <li><a href="index4.html">Home 4</a></li>
                    <li><a href="index5.html">Home 5</a></li>
                    <li><a href="index6.html">Home - University</a></li>
                    <li><a href="index7.html">Home College</a></li>
                    <li><a href="index8.html">Home Kindergarten</a></li>
                </ul>
            </li> --}}
            <li><span>Courses</span>
                <ul>
                    {{-- <li><span>Courses List</span>
                        <ul>
                            <li><a href="page-course-v1.html">Courses v1</a></li>
                            <li><a href="page-course-v2.html">Courses v2</a></li>
                            <li><a href="page-course-v3.html">Courses v3</a></li>
                        </ul>
                    </li>
                    <li><span>Courses Single</span>
                        <ul>
                            <li><a href="page-course-single-v1.html">Single V1</a></li>
                            <li><a href="page-course-single-v2.html">Single V2</a></li>
                            <li><a href="page-course-single-v3.html">Single V3</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="page-instructors.html">Instructors</a></li>
                    <li><a href="page-instructors.html">Instructors</a></li>
                    <li><a href="page-instructors-single.html">Instructor Single</a></li>
                </ul>
            </li>
            <li><a href="page-event.html">Event</a></li>
                {{-- <ul>
                    <li><a href="page-event.html">Event List</a></li>
                    <li><a href="page-event-single.html">Event Single</a></li>
                </ul> 
            </li>--}}
            {{-- <li><span>Pages</span>
                <ul>
                    <li><span>Shop Pages</span>
                        <ul>
                            <li><a href="page-shop.html">Shop</a></li>
                            <li><a href="page-shop-single.html">Shop Single</a></li>
                            <li><a href="page-shop-cart.html">Cart</a></li>
                            <li><a href="page-shop-checkout.html">Checkout</a></li>
                            <li><a href="page-shop-order.html">Order</a></li>
                        </ul>
                    </li>
                    <li><span>User Admin</span>
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-my-courses.html">My Courses</a></li>
                            <li><a href="page-my-order.html">My Order</a></li>
                            <li><a href="page-my-message.html">My Message</a></li>
                            <li><a href="page-my-review.html">My Review</a></li>
                            <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                            <li><a href="page-my-listing.html">My Listing</a></li>
                            <li><a href="page-my-setting.html">My Setting</a></li>
                        </ul>
                    </li>
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="page-gallery.html">Gallery</a></li>
                    <li><a href="page-faq.html">Faq</a></li>
                    <li><a href="{{route('login')}}">LogIn</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-pricing.html">Membership</a></li>
                    <li><a href="page-error.html">404 Page</a></li>
                    <li><a href="page-terms.html">Terms and Conditions</a></li>
                    <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                    <li><a href="page-ui-element.html">UI Elements</a></li>
                </ul>
            </li> --}}
            <li><a href="blog">Blog</a></li>
                {{-- <ul>
                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
                    <li><a href="page-blog-list.html">Blog List 3</a></li>
                    <li><a href="page-blog-single.html">Single Post</a></li>
                </ul>
            </li> --}}
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('login')}}"><span class="flaticon-user"></span> Login</a></li>
        </ul>
    </nav>
</div>
