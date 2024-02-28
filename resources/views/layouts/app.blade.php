<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- css style --}}
    		<!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css2/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/price_rangs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css2/style.css')}}">

    {{-- other links --}}
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img2/favicon.ico')}}">
    {{-- other links --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
      <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Script -->
        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('assets/js2/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js2/popper.min.js')}}"></script>
        <script src="{{asset('assets/js2/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('assets/js2/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('assets/js2/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js2/slick.min.js')}}"></script>
        <script src="{{asset('assets/js2/price_rangs.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('assets/js2/wow.min.js')}}"></script>
		<script src="{{asset('assets/js2/animated.headline.js')}}"></script>
        <script src="{{asset('assets/js2/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('assets/js2/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('assets/js2/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets/js2/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('assets/js2/contact.js')}}"></script>
        <script src="{{asset('assets/js2/jquery.form.js')}}"></script>
        <script src="{{asset('assets/js2/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js2/mail-script.js')}}"></script>
        <script src="{{asset('assets/js2/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('assets/js2/plugins.js')}}"></script>
        <script src="{{asset('assets/js2/main.js')}}"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header>
            <!-- Header Start -->
            <div class="header-area header-transparrent">
                <div class="headder-top header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-2">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="menu-wrapper">
                                    <!-- Main-menu -->
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="{{route('home')}}">Home</a></li>
                                                <li><a href="{{route('jobsearch.index')}}">Find a Job</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-blog.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Elements</a></li>
                                                        <li><a href="job_details.html">Job Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                            <div class="header-btn d-none f-right d-lg-block">
                                                @guest
                                                    @if (Route::has('login'))

                                                    <a href="{{route('getStarted')}}" class="btn head-btn1">Register</a>
                                                    <a href="{{route('login')}}" class="btn head-btn2">Login</a>

                                                    @endif
                                                @else
                                                <div class="d-flex">
                                                    <a href="{{route('profile.index')}}"><img src="{{ Auth::user()->getFirstMediaUrl('media/users') }}" alt="" style="width: 40px;height:40px;border-radius:50%;margin-right:10px;margin-bottom:15px;"></a>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button class="btn" type="submit" style="background-color: transparent;box-shadow:none;border:none">Logout</button>
                                                </form>
                                                </div>
                                                @endguest
                                            </div>

                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
