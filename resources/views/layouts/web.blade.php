<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progress-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles

    @yield('css')
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!-- ScrollTop Button -->
    <div class="go-top-btn"><span><i class="fas fa-long-arrow-alt-up"></i></span></div>

    <!--info Bar -->
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="top-left">
                        <div class="date">
                            <p>
                                <span class="current-date"><i class="far fa-calendar-alt margin-right-8"></i> Date: 3th
                                    December 2020</span> |
                            </p>
                        </div>
                        <div class="infobar-ticker">
                            <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Give a Helping Hand
                                to those Who Need it</div>
                            <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Help children
                                proverty and safe environment</div>
                            <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Childrens are going
                                hungry around the world</div>
                            <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Donate Food for the
                                poor people and children</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="social">
                        <a href="index.html#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="index.html#"><i class="fab fa-twitter"></i></a>
                        <a href="index.html#"><i class="fab fa-instagram"></i></a>
                        <a href="index.html#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section -->
    @livewire('layouts.navigation');

    @if (request()->segment(1))
        <!-- Breadcrumb Section -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb-left">
                            <img src="assets/images/slide-left.png" alt="">
                            <h1>{{ title_case(str_replace('-', ' ', request()->segment(1))) }}</h1>
                            <h3><a href="{{ url('/') }}">Home</a> - {{ title_case(str_replace('-', ' ', request()->segment(1))) }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- main body --}}
    @yield('content')

    <!-- Footer Section -->
    @livewire('layouts.footer')

    <!-- Javascript Files -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countrySelect.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/progress-bar.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts

    @yield('js')
</body>

</html>
