<!-- Top Courses -->
<section id="top-courses" class="top-courses pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Browse Our Top Courses</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {{-- <div id="options" class="alpha-pag full">
                    <div class="option-isotop">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <li class="list-inline-item"><a href="#all" data-option-value="*"
                                    class="selected">Developer</a></li>
                            <li class="list-inline-item"><a href="#business" data-option-value=".business">Business</a>
                            </li>
                            <li class="list-inline-item"><a href="#design" data-option-value=".design">Design</a>
                            </li>
                            <li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
                            <li class="list-inline-item"><a href="#marketing"
                                    data-option-value=".marketing">Marketing</a></li>
                        </ul>
                    </div>
                </div><!-- FILTER BUTTONS --> --}}
                <div class="emply-text-sec">
                    <div class="row" id="masonry_abc">
                        @foreach ($courses as $course)
                            <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('frontend/images/courses/t1.jpg') }}"
                                            alt="t1.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>{{$course->title}}</p>
                                            <h5>{{$course->description}}</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
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
