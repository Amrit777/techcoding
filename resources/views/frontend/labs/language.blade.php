@extends("frontend.layout.master")
@section('breadcrum-content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb about-us-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">LANGUAGE LAB</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">LANGUAGE LAB</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <!-- About us -->
    <section class="our-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <p> We are an Edtech Startup, led by women, intent to fill the huge gap between the future technological
                        demands and skills of our today's children. We prepare the next generation to cope with the
                        requirement of the future by helping them to develop their critical thinking ability, logical and
                        algorithmic building capabilities and to implement their creativity to build and turn their
                        imagination into reality. </p>
                </div>
                <br>
                <br>
                <div class="col-sm-12 col-lg-12">
                    <p> The current education system is running to build students for industrial age but we are already in
                        this informative age for which our students are not ready. Indeed as a Country, we might not be able
                        to compete with others, therefore, this is high time that with the introduction of NEP, 2020 we must
                        focus on innovation, inventions, critical thinking and problem solving approve amongst our students.
                    </p>
                </div>
                <br>
                <br>
                <div class="col-sm-12 col-lg-12">
                    <p> We at Dotcrypt Technologies Private Limited have decided to build on the requirement of today
                        students to meet the skills required for the future. We are focusing on STEM education and five key
                        areas, Coding : Robotics : AI & ML : Space Science : Ehical Hacking, which are basics and as well
                        as advance skills which are required for every child who wants to compete and deliver in the future.
                        We also propose to develop software and services which are in line with the Company’s mission and
                        vision. </p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0"> Board of Directors </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="instructor_col col-md-3">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/prashant.jfif') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>MRS. SABITA JAIN</h4>
                    </div>
                </div>
                <div class="instructor_col col-md-3">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/prashant.jfif') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>MRS. AASTHA SANCHETI</h4>
                    </div>
                </div>
                <div class="instructor_col col-md-3">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/prashant.jfif') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>MRS. SUCHI AGARWALA </h4>
                    </div>
                </div>
                <div class="instructor_col col-md-3">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/prashant.jfif') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>MR. KUSHAL JAIN </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0"> Team </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="instructor_col col-md-4">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/amit.jpg') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>Amit Singh</h4>
                        <p>Tech Head</p>
                    </div>
                </div>
                <div class="instructor_col col-md-4">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/prashant.jfif') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>Prashant Pareek</h4>
                        <p>Head : Tech Coding</p>
                    </div>
                </div>
                <div class="instructor_col col-md-4">
                    <div class="thumb">
                        <img class="img-fluid img-rounded-circle team-image-rounded-circle"
                            src="{{ asset('frontend/images/team-images/pankaj.jpeg') }}" alt="2.png">
                    </div>
                    <div class="details">
                        <h4>Anna Richard</h4>
                        <p>Head : Tech Robotics</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
