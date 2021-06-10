@extends("frontend.layout.master")


@section('content')

    @include('frontend.sections.home-slider')
    @include('frontend.sections.course-category')
    {{-- @include('frontend.sections.parallax-divider') --}}
    {{-- @include('frontend.sections.courses') --}}
    {{-- @include('frontend.sections.testimonials') --}}
    @include('frontend.sections.blog')
    {{-- @include('frontend.sections.app-display-section') --}}
    {{-- @include('frontend.sections.parallax-divider') --}}
    @include('frontend.sections.partners')
    {{-- @include('frontend.sections.newsletter') --}}

@endsection
