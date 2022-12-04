<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.cdnfonts.com/css/hk-groteks" rel="stylesheet" />
    <!-- font-family: 'HK Grotesk', sans-serif; -->

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">



    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <title>@yield('title')</title>
</head>

<body>
    @include('body.header')

    @yield('main')

    @include('body.footer')

    <script src="{{
                asset('frontend/js/vendor/modernizr-3.11.2.min.js')
            }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>