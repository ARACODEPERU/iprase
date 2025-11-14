<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>iPrase</title>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('themes/webpage/ico/favicon-16x16.png') }}" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('themes/webpage/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/js/minicolors/miniColors.css') }}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('themes/webpage/css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="themes/webpage/css/themecss/so-categories.css" rel="stylesheet">
    <link href="themes/webpage/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="themes/webpage/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="themes/webpage/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="themes/webpage/css/footer/footer1.css" rel="stylesheet">
    <link href="themes/webpage/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="themes/webpage/css/theme.css" rel="stylesheet">
    <link href="themes/webpage/css/responsive.css" rel="stylesheet">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>

<body class="common-home res layout-1">

    @yield('content')



    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('themes/webpage/js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/slick-slider/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/modernizr/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/minicolors/jquery.miniColors.min.js') }}"></script>

    <!-- Theme files
============================================ -->

    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/application.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/homepage.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/toppanel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/webpage/js/themejs/addtocart.js') }}"></script>




</body>

</html>
