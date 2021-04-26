<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>My Home Spaceconomic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    @include('layout.header')

    @include('area.home')
    @include('area.about')
    @include('area.service')
    @include('area.faq')
    @include('area.review')
    @include('area.portfolio')
    @include('area.pricing')
    @include('area.testimony')
    @include('area.order')
    @include('area.contact')

    @include('layout.footer')

    <a href="https://api.whatsapp.com/send?phone=+628169777 11&text=Halo Saya Ingin bertanya" class="back-to-top" style="border-radius: 100px;"><i class="fa fa-whatsapp fa-3x"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>

</html>
