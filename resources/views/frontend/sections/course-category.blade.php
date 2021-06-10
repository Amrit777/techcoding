<!-- School Category Courses -->
<section id="our-courses" class="our-courses pt90 pt650-992">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#our-courses">
                    <div class="mouse_scroll">
                        <div class="icon"><span class="flaticon-download-arrow"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Our Bootcamps</h3>
                    <p>For better education offline courses</p>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $bootcamps = App\Models\Category::all();
            @endphp
            @if (count($bootcamps))
                @foreach ($bootcamps as $bootcamp)
                    <div class="col-sm-6 col-lg-4 ">
                        <a href="#{{ $bootcamp->name }}">
                            <div class="img_hvr_box"
                                style="background-image:  url({{ asset($bootcamp->media->getUrl()) }});">
                                <div class="overlay">
                                    <div class="details">
                                        <h5>{{ $bootcamp->name }}</h5>
                                        <p>{{ $bootcamp->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-lg-6 offset-lg-3">
                <div class="courses_all_btn text-center">
                    <a class="btn btn-transparent" href="#">View All Courses</a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@if (count($bootcamps))
    @foreach ($bootcamps as $key => $bootcamp)
        <!-- Divider -->
        <section id="{{ $bootcamp->name }}" class="divider_home1 parallax" data-stellar-background-ratio="0.3"
            style="background-image:  url({{ asset($bootcamp->media->getUrl()) }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="divider-one">
                            <p class="color-white">{{ $bootcamp->name }}</p>
                            <h1 class="color-white text-uppercase">{{ $bootcamp->description }}</h1>
                            @if (count($bootcamp->courses))
                                <a class="btn btn-transparent divider-btn" href="#course-{{ $bootcamp->name }}"> Check
                                    our
                                    courses </a>
                            @else
                                <p class="btn btn-transparent divider-btn">Course will be updated soon.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if (count($bootcamp->courses))
            <!-- Top Courses -->
            <section id="course-{{ $bootcamp->name }}" class="top-courses pb30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="main-title text-center">
                                <h3 class="mt0">Browse Our {{ $bootcamp->name }} Courses</h3>
                                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="emply-text-sec">
                                <div class="row" id="masonry_abc">
                                    @foreach ($bootcamp->courses as $course)
                                        <div class="col-md-6 col-lg-4 col-xl-4">
                                            <div class="top_courses">
                                                <div class="thumb">
                                                    {{-- @if (count($course->media)) --}}
                                                    <img class="img-whp" src="{{ asset($course->media->getUrl()) }}"
                                                        alt="t1.jpg">
                                                    {{-- @endif --}}
                                                    <div class="overlay">
                                                        {{-- <div class="tag">Best Seller
                                                        </div> --}}
                                                        @auth
                                                            {{-- <div class="icon"><span
                                                                    class="flaticon-like"></span></div> --}}
                                                        @endauth
                                                        {{-- <a class="tc_preview_course"
                                                            href="#"></a> --}}
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="tc_content">
                                                        <p>{{ $course->title }}</p>
                                                        <h5>{{ $course->description }}</h5>
                                                        {{-- <ul class="tc_review">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star-o"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star-o"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star-o"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star-o"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star-o"></i></a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                                        </ul> --}}
                                                    </div>
                                                    {{-- <div class="tc_footer">
                                                        <ul class="tc_meta float-left">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="flaticon-profile"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="flaticon-comment"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">25</a></li>
                                                        </ul>
                                                        <div class="tc_price float-right">$69.95</div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div class="clearfix" style="padding-bottom: 50px"></div>
        @endif
    @endforeach
@endif
{{-- rgb(58 62 85 / 80%) --}}
