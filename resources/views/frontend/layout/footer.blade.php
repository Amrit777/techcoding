<!-- Our Footer -->
<section class="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_contact_widget">
                    <h4>CONTACT</h4>
                    <p> 1-B, First Floor, Rishav Plaza</p>
                    <p> A.K Azad Road, Rehabari</p>
                    <p> Gauhati, 781008</p>
                    <p> Assam, India </p>
                    <p> Contact : +91 912-706-0701 </p>
                    <p>techcoding.dot@gmail.com</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_company_widget">
                    <h4>COMPANY</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        {{-- <li><a href="#">Blog</a></li>
                        --}}
                        <li><a href="page-contact.html">Contact</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_program_widget">
                    <h4>PROGRAMS</h4>
                    <ul class="list-unstyled">
                        @php
                        $bootcamps = App\Models\Category::all();
                        @endphp
                        @if (count($bootcamps))
                            @foreach ($bootcamps as $bootcamp)
                                <li><a href="#{{ $bootcamp->name }}">{{ $bootcamp->name }}</a></li>
                            @endforeach
                        @endif


                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                <div class="footer_social_widget mt15">
                    <ul>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        {{-- <li class="list-inline-item"><a href="#"><i
                                    class="fa fa-twitter"></i></a></li> --}}
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        {{-- <li class="list-inline-item"><a href="#"><i
                                    class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        --}}
                    </ul>
                </div>
            </div>
            {{-- <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_support_widget">
                    <h4>SUPPORT</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Language Packs</a></li>
                        <li><a href="#">Release Status</a></li>
                    </ul>
                </div> --}}
            </div>
            {{-- <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                <div class="footer_apps_widget">
                    <h4>MOBILE</h4>
                    <div class="app_grid">
                        <button class="apple_btn btn-dark">
                            <span class="icon">
                                <span class="flaticon-apple"></span>
                            </span>
                            <span class="title">App Store</span>
                            <span class="subtitle">Available now on the</span>
                        </button>
                        <button class="play_store_btn btn-dark">
                            <span class="icon">
                                <span class="flaticon-google-play"></span>
                            </span>
                            <span class="title">Google Play</span>
                            <span class="subtitle">Get in on</span>
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!-- Our Footer Middle Area -->
{{-- <section class="footer_middle_area p0">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                <div class="logo-widget home1">
                    <img class="img-fluid" src="{{ asset('frontend/images/header-logo.png') }}" alt="header-logo.png">
                    <span>Dotcrypt Technologies Pvt Ltd</span>
                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                <div class="footer_menu_widget">
                    <ul>
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#our-courses">Courses</a></li>
                        {{-- <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Sitemap</a></li>
                        <li class="list-inline-item"><a href="#">Purchase</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                <div class="footer_social_widget mt15">
                    <ul>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Footer Bottom Area -->
<section class="footer_bottom_area pt25 pb25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="copyright-widget text-center">
                    <p>Copyright Dotcrypt Technologies Pvt Ltd © 2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
