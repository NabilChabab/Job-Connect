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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto"> <!-- Change me-auto to mx-auto -->
                        <!-- Add your additional nav links here -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('jobsearch.index')}}">Find a Job</a>
                        </li>
                    </ul>
        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif



                                <li class="nav-item">


                            @if (Route::has('getStarted'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('getStarted') }}">{{ __('Register') }}</a>

                                </li>

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
