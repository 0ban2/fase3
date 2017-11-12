<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')<</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animations.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/superslides.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/masonry.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/black.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/media/page/favicon.ico') }}" />
</head>
<body>

    
    @yield('content')


    <!-- Scripts --> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.10.0.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.animate-enhanced.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.masonry.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>
