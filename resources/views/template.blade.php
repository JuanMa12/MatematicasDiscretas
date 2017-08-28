<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matematicas Discretas</title>
    <link rel="icon" type="image/png" href="{{ asset('/images/logo.png') }}" />

    <!-- Styles -->
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/meanmenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/hover-min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/icofont.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="home">
    <div id="preloader">
        <div class="preloader_spinner"></div>
    </div>
    @include('partials.header')
      @yield('content')

    @include('partials.footer')
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/active.js') }}"></script>
</body>
</html>
