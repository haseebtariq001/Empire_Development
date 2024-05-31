@php
    $temp_lang = \App::getLocale('lang');
    if ($temp_lang == 'ar' || $temp_lang == 'he') {
        $rtl = 'on';
    } else {
        $rtl = admin_setting('site_rtl');
    }
    $color = !empty(admin_setting('color')) ? admin_setting('color') : 'theme-11';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $rtl == 'on' ? 'rtl' : '' }}">

<head>
    <title>@yield('page-title') |
        {{ !empty(admin_setting('title_text')) ? admin_setting('title_text') : config('app.name', 'Empire Developments') }}
    </title>

    <meta name="title"
        content="{{ !empty(admin_setting('meta_title')) ? admin_setting('meta_title') : 'Empire Developments' }}">
    <meta name="keywords"
        content="{{ !empty(admin_setting('meta_keywords')) ? admin_setting('meta_keywords') : 'Empire Developments,SaaS solution,Multi-workspace' }}">
    <meta name="description"
        content="{{ !empty(admin_setting('meta_description')) ? admin_setting('meta_description') : 'Discover the efficiency of Dash, a user-friendly web application by Rajodiya Apps.' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:title"
        content="{{ !empty(admin_setting('meta_title')) ? admin_setting('meta_title') : 'Empire Developments' }}">
    <meta property="og:description"
        content="{{ !empty(admin_setting('meta_description')) ? admin_setting('meta_description') : 'Discover the efficiency of Dash, a user-friendly web application by Rajodiya Apps.' }} ">
    <meta property="og:image"
        content="{{ get_file(!empty(admin_setting('meta_image')) ? (check_file(admin_setting('meta_image')) ? admin_setting('meta_image') : 'uploads/meta/meta_image.png') : 'uploads/meta/meta_image.png') }}{{ '?' . time() }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:title"
        content="{{ !empty(admin_setting('meta_title')) ? admin_setting('meta_title') : 'Empire Developments' }}">
    <meta property="twitter:description"
        content="{{ !empty(admin_setting('meta_description')) ? admin_setting('meta_description') : 'Discover the efficiency of Dash, a user-friendly web application by Rajodiya Apps.' }} ">
    <meta property="twitter:image"
        content="{{ get_file(!empty(admin_setting('meta_image')) ? (check_file(admin_setting('meta_image')) ? admin_setting('meta_image') : 'uploads/meta/meta_image.png') : 'uploads/meta/meta_image.png') }}{{ '?' . time() }}">

    <meta name="author" content="Empire Developments.io">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon"
        href="{{ !empty(admin_setting('favicon')) && check_file(admin_setting('favicon')) ? get_file(admin_setting('favicon')) : get_file('uploads/logo/favicon.png') }}{{ '?' . time() }}"
        type="image/x-icon" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

    @if ($rtl == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom-auth-rtl.css') }}" id="main-style-link">
    @else
        <link rel="stylesheet" href="{{ asset('css/custom-auth.css') }}" id="main-style-link">
    @endif

    @if ($rtl != 'on' && admin_setting('cust_darklayout') != 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    @endif

    @if (admin_setting('cust_darklayout') == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}" id="main-style-link">
        <link rel="stylesheet" href="{{ asset('css/custom-auth-dark.css') }}" id="main-style-link">
    @endif

    <style>
        .navbar-brand .auth-navbar-brand {
            max-height: 38px !important;
        }

        .custom-login {
            background: #1c232f;
        }
    </style>
    @stack('css')
</head>

<body class="{{ $color }}">
    <!-- [custom-login] start -->
    <div class="custom-login">
        <div class="login-bg-img">
            {{-- <img src="{{ asset('images/' . $color . '.svg') }}" class="login-bg-1"> --}}
            <img src="{{ asset('assets/images/logo/showcase.png') }}" class="login-bg-1" width="40%">
        </div>
        <div class="bg-login bg-dark"></div>
        <div class="custom-login-inner">
            <header class="dash-header">
                <nav class="navbar navbar-expand-md default">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-brand" href="{{ route('start') }}">
                                <img src="{{ get_file(sidebar_logo()) }}{{ '?' . time() }}"
                                    alt="{{ config('app.name', 'Empire Developments') }}"
                                    class="navbar-brand-img auth-navbar-brand">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarlogin">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarlogin">
                            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact Us') }}</a>
                                </li>
                                @yield('language-bar')
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main class="custom-wrapper">
                <div class="custom-row">
                    <div class="card">
                        @yield('content')
                    </div>
                </div>
            </main>
            <footer>
                <div class="auth-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <span>
                                    @if (!empty(admin_setting('footer_text')))
                                        {{ admin_setting('footer_text') }} @else{{ __('Copyright') }} &copy;
                                        {{ config('app.name', 'Empire Developments') }}
                                    @endif{{ date('Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- [custom-login] end -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 99999">
        <div id="liveToast" class="toast text-white  fade" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body"> </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    @if (admin_setting('enable_cookie') == 'on')
        @include('layouts.cookie_consent')
    @endif
    @stack('custom-scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    @stack('script')
    @if (admin_setting('cust_darklayout') == 'on')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const recaptcha = document.querySelector('.g-recaptcha');
                recaptcha.setAttribute("data-theme", "dark");
            });
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            toastrs('Success', '{!! $message !!}', 'success');
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            toastrs('Error', '{!! $message !!}', 'error');
        </script>
    @endif
</body>

</html>
