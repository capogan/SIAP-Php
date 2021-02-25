<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/fontello.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <!-- Flaticon -->
    <link href="/css/flaticon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <title>SIAP | {{Request::segment(1)}}</title>
</head>
<body>
@include('sweetalert::alert')
@if( Request::is('users/login') || Request::is('users/register') )
    @yield('content')
@else
    @include('templates.users.layouts.header')
    @yield('content')
    @include('templates.users.layouts.footer')
@endif

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/menumaker.js"></script>

<!-- sticky header -->
<script type="text/javascript" src="/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/js/sticky-header.js"></script>
<!-- slider script -->
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/slider-carousel.js"></script>
<script type="text/javascript" src="/js/service-carousel.js"></script>
<!-- Back to top script -->
<script src="/js/back-to-top.js" type="text/javascript"></script>
<script src="/js/jquery-ui.js"></script>

@yield('js')
</body>
</html>
