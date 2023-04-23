<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#c3c3c3" />
    <!-- Site Properties -->
    <title>@yield('title') | Prologistrust</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('front/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('front/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('front/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('front/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="icon" href="{{asset('front/img/logo-3.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/apple-touch-icon.png')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/uikit.min.css')}}">
    <link href="{{asset('front/css/vendors/venobox/venobox.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vendors/aos/aos.js')}}">
    <link href="{{asset('front/css/vendors/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
</head>
<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    @include('Includes.front.header')

    @yield('content')

    @include('Includes.front.footer')

    <!-- Javascript -->
    <script src="{{asset('front/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('front/js/vendors/indonez.min.js')}}"></script>
    <script src="{{asset('front/js/config-theme.js')}}"></script>
    <script src="{{asset('front/css/vendors/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/aos/aos.js')}}"></script>
    <script src="{{asset('front/css/vendors/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/owl.carousel/owl.carousel.min.js')}}"></script>
</body>
</html>