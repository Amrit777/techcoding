<!-- 2nd Home Slider -->
<div class="home1-mainslider">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-banner-wrapper">
                    <div class="banner-style-one owl-theme owl-carousel">
                        @if ($sliders)
                            @foreach ($sliders as $slider)
                                <div class="slide slide-one"
                                    style="background-image: url({{ asset($slider->media->getUrl()) }}); height: 95vh;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-12 text-center p0">
                                                <h3 class="banner-title">{{ $slider->title }}</h3>
                                                <p>{{ $slider->description }}</p>
                                                {{-- <div class="btn-block"><a href="{{ $slider->link_to }}"
                                                        class="banner-btn">{{ $slider->link_title }}</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> </span>
                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow-1 right"></i></span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
            </div>
        </div>
    </div>
    {{-- <div class="container home_iconbox_container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="home_icon_box">
                            <div class="icon"><img src="{{ asset('frontend/images/home/hicon1.png') }}"
                                    alt="hicon1.png"></div>
                            <p>Learn From The Experts</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="home_icon_box">
                            <div class="icon mt15"><img src="{{ asset('frontend/images/home/hicon2.png') }}"
                                    alt="hicon2.png"></div>
                            <p>Book Library & Store</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="home_icon_box">
                            <div class="icon"><img src="{{ asset('frontend/images/home/hicon3.png') }}"
                                    alt="hicon3.png"></div>
                            <p>Worldwide Recognize</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="home_icon_box">
                            <div class="icon"><img src="{{ asset('frontend/images/home/hicon4.png') }}"
                                    alt="hicon4.png"></div>
                            <p>Best Industry Leaders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
