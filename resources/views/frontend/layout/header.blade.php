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
            <a href="{{ route('welcome') }}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{ asset('frontend/images/header-logo.png') }}" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{ asset('frontend/images/header-logo2.png') }}"
                    alt="header-logo2.png">
                <span>Dotcrypt Technologies Pvt Ltd</span>
                 
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">

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
                        @if (!empty($bootcamps))
                            @foreach ($bootcamps as $bootcamp)
                                <li><a href="#{{ $bootcamp->name }}">{{ $bootcamp->name }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                {{-- <li>
                    <a href="#"><span class="title">Events</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Blog</span></a>
                </li> --}}
                <li class="last">
                    <a href="{{ route('contact.index') }}"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                @guest
                    @if (Route::has('login'))
                        <li class="list-inline-item list_s"><a href="{{ route('login') }}" class="btn flaticon-user"> <span
                                    class="dn-lg">Login</span></a></li>
                    @endif
                @else
                    <li class="nav-item dropdown list-inline-item list_s">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle btn flaticon-user" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
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
                <span>Dotcrypt Technologies Pvt Ltd</span>
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
                    <li><a href="{{ route('login') }}">LogIn</a></li>
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
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
            <li><a href="{{ route('login') }}"><span class="flaticon-user"></span> Login</a></li>
        </ul>
    </nav>
</div>
