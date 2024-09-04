<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts --> {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav> --}}

        @auth
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <!-- Menu -->
                    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                        <img src="{{ asset('./assets/love.jpg') }}" alt="..." width="80" class="mx-auto">
                        <div class="menu-inner-shadow"></div>
                        <ul class="menu-inner py-1">
                            <!-- Dashboard -->
                            <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div data-i18n="Analytics">Dashboard</div>
                                </a>
                            </li>

                            <!-- Undangan -->
                            <li
                                class="menu-item {{ request()->routeIs('undangan-alternative1', 'undangan-alternative2', 'undangan-alternative3') ? 'active' : '' }}">
                                <a href="#" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-layout"></i>
                                    <div data-i18n="Layouts">Undangan</div>
                                </a>
                                <ul class="menu-sub">
                                    <li
                                        class="menu-item {{ request()->routeIs('undangan-alternative1') ? 'active' : '' }}">
                                        <a href="{{ route('undangan-alternative1') }}" class="menu-link">
                                            <div data-i18n="Without menu">Alternative 1</div>
                                        </a>
                                    </li>
                                    <li
                                        class="menu-item {{ request()->routeIs('undangan-alternative2') ? 'active' : '' }}">
                                        <a href="{{ route('undangan-alternative2') }}" class="menu-link">
                                            <div data-i18n="Without navbar">Alternative 2</div>
                                        </a>
                                    </li>
                                    <li
                                        class="menu-item {{ request()->routeIs('undangan-alternative3') ? 'active' : '' }}">
                                        <a href="{{ route('undangan-alternative3') }}" class="menu-link">
                                            <div data-i18n="Container">Alternative 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            @if (auth()->user()->role == 1)
                                <li class="menu-item {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                                    <a href="{{ route('blog.index') }}" class="menu-link">
                                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                        <div data-i18n="Analytics">Blog</div>
                                    </a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 1)
                                <li class="menu-item {{ request()->routeIs('promo.index') ? 'active' : '' }}">
                                    <a href="{{ route('promo.index') }}" class="menu-link">
                                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                        <div data-i18n="Analytics">Promo</div>
                                    </a>
                                </li>
                            @endif
                            
                        </ul>
                    </aside>

                    <!-- / Menu -->
                    <!-- Layout container -->
                    <div class="layout-page">
                        <!-- Navbar -->
                        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                            id="layout-navbar">
                            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                    <i class="bx bx-menu bx-sm"></i>
                                </a>
                            </div>

                            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                                <ul class="navbar-nav flex-row align-items-center ms-auto">
                                    <!-- User -->
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <span class="dropdown-item disabled">{{ Auth::user()->email }}</span>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>

                                    <!--/ User -->
                                </ul>
                            </div>
                        </nav>
                        <!-- / Navbar -->

                        <!-- Content wrapper -->
                        <div class="content-wrapper">
                            <!-- Navbar admin Content -->
                            @yield('content')
                            <!-- / Navbar admin Content -->

                            <!-- Other content goes here -->
                        </div>
                        <!-- / Content wrapper -->
                    </div>
                    <!-- / Layout container -->
                </div>
            </div>
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap JS (Required for Dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
