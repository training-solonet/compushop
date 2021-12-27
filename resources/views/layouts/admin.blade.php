<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CompuShop| Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ url('assets/assets/img/c1.PNG') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ url('assets/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ url('assets/assets/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/assets/css/atlantis.min.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
                    <img src="{{ url('assets/assets/img/logo11.PNG') }}" height="45" width="110" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            @include('layouts.admin-layout.header')
            <!-- Navbar Header -->
        </div>

        <!-- Sidebar -->
        @include('layouts.admin-layout.sidebar')

        <div class="main-panel">
            <!-- content -->
            @yield('content')

            <!-- footer -->
            @include('layouts.admin-layout.footer')
        </div>

        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="{{ url('assets/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ url('assets/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ url('assets/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ url('assets/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

</body>

</html>
