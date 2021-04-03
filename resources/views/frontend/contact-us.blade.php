@extends("frontend.layout.master")
@section('breadcrum-content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Contact Us</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <!-- How It's Work -->
    <section class="our-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-placeholder-1"></span></div>
                        <h4>Our Location</h4>
                        <p>Rishav plaza, 1-B, Rehabari, Guwahati, Assam, India</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <h4>Our Location</h4>
                        <p class="mb0">Mobile: (+91) 912 706 0701 </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-email"></span></div>
                        <h4>Write Some Words</h4>
                        <p>admin@dotcrypt.co.in</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="h600" id="map-canvas"></div>
                </div>
                <div class="col-lg-6 form_grid">
                    <h4 class="mb5">Send a Message</h4>
                    <p>For any inquiries, queries and feedbacks.</p>
                    <form class="contact_form" id="contact_form" name="contact_form" action="{{ route('contact.store') }}"
                        method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputName">Full Name</label>
                                    <input id="form_name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ old('name') }}" placeholder="Enter Name" autofocus required="required">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Your Email</label>
                                    <input id="form_email" type="email"
                                        class=" required email form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" placeholder="Enter Email" autofocus
                                        required="required">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputSubject">Subject</label>
                                    <input id="form_subject" type="text"
                                        class=" required form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                        name="subject" value="{{ old('subject') }}" placeholder="Enter Subject" autofocus
                                        required="required">
                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Message</label>
                                    <textarea id="form_message" type="text" rows="5"
                                        class=" required form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                                        name="message" value="{{ old('message') }}" placeholder="Enter Message" autofocus
                                        required="required"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group ui_kit_button mb0">
                                    <button type="submit" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
