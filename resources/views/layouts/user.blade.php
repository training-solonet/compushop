<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/mediacenter-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Dec 2021 02:21:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>CompuShop</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ url('style/assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ url('style/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('style/assets/css/colors/blue.css') }}">
    <link rel="stylesheet" href="{{ url('style/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('style/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ url('style/assets/css/animate.min.css') }}">


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ url('style/assets/css/font-awesome.min.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('style/assets/images/icon.PNG ') }}">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- ============================================================= TOP NAVIGATION ============================================================= -->
        <nav class="top-bar animate-dropdown">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul>
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                    </ul>
                </div><!-- /.col -->
                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul class="right">

                        @if (Auth::user())
                            <li><a href="/user/profile">{{ Auth::user()->username }}</a></li>
                        @endif
                        @if (Route::has('login'))
                            @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                       {{ __('Logout') }}
                                    </x-jet-dropdown-link>

                                </form>
                            </li>
                            @else
                                <li><a href="/login">login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="/regist">register</a></li>
                                @endif
                            @endauth
                        @endif

                        {{-- <li><a href="/regist ">Register</a></li>
                            <li><a href="/login">Login</a></li> --}}
                    </ul>
                </div><!-- /.col -->
            </div><!-- /.container -->
        </nav><!-- /.top-bar -->

        {{-- header --}}
        @include('layouts.user-layout.header')
        {{-- header --}}

        {{-- sidebar --}}
        @include('layouts.user-layout.sidebar')
        {{-- sidebar --}}

        <!-- Main content -->
        @yield('content')
        <!-- Main content -->
        {{-- footer --}}
        @include('layouts.user-layout.footer')
        {{-- Footer --}}
    </div>

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ url('style/assets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ url('style/assets/js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ url('style/assets/js/bootstrap.min.js') }}"></script>
    <script
        src="http://maps.google.com/maps/api/js?key=AIzaSyDDZJO4F0d17RnFoi1F2qtw4wn6Wcaqxao&amp;sensor=false&amp;language=en">
    </script> ___scripts_6___
    <script src="{{ url('style/assets/js/bootstrap-hover-dropdown.min.js') }}assets/js/bootstrap-hover-dropdown.min.js">
    </script>
    <script src="{{ url('style/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('style/assets/js/css_browser_selector.min.js') }}"></script>
    <script src="{{ url('style/assets/js/echo.min.js') }}"></script>
    <script src="{{ url('style/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ url('style/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ url('style/assets/js/jquery.raty.min.js') }}"></script>
    <script src="{{ url('style/assets/js/jquery.prettyPhoto.min.js') }}"></script>
    <script src="{{ url('style/assets/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ url('style/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('style/assets/js/buttons.js') }}"></script>
    <script src="{{ url('style/assets/js/scripts.js') }}"></script>
</body>

<!-- Mirrored from transvelo.github.io/mediacenter-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Dec 2021 02:21:54 GMT -->

</html>
