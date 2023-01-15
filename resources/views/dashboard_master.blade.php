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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.cdnfonts.com/css/hk-groteks" rel="stylesheet" crossorigin="anonymous" /> -->
    <!-- font-family: 'HK Grotesk', sans-serif; -->

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- font-family: 'Roboto', sans-serif; -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <title>Levre - Control Panel</title>
</head>

<body>

    <section class="dash">

        @include('pages.admincp.body.admin_sidebar')

        <!-- Dashboard Content Start -->

        <article class="dash__dcontent">
            @include('pages.admincp.body.admin_header')
            <div class="dcontent__wrapper">
                @yield('dashboard_content')
            </div>
        </article>

        <!-- Dashboard Content End -->

    </section>

    <script src="{{
                asset('frontend/js/vendor/modernizr-3.11.2.min.js')
            }}"></script>
</body>

</html>