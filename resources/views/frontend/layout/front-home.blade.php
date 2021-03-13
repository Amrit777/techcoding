<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css file -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Title -->
    <!-- Favicon -->
    <link href="{{ asset('frontend/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('frontend/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <title>{{ @$metas['title'] }}</title>
    <meta name="description" content="{{ @$metas['description'] }}" />
    <meta name="keywords" content="{{ @$metas['keywords'] }}" />
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        @include('layouts.frontend.header')

        @yield('content')

        @include('layouts.frontend.footer')

        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>

    @include('layouts.frontend.footer-scripts')

</body>

</html>
