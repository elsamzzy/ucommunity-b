<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.ico') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UCommunity') }}</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/vendors/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('css/vendors/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendors/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_89e4ce7b780c4f88b6dc0a1bb417dcf23'
        });
    </script>
</head>

<body class="">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                @if(auth()->guard('admin')->user())
                    <div class="header__logo">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('/img/icons/logo-white.png') }}" alt="Ziraatbankasi" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>{{ __('Dashboard') }}
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="{{ route('admin.settings') }}">
                                    <i class="fas fa-gear"></i>{{ __('Settings') }}
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ asset('img/admin.jpeg') }}" alt="{{ $admin->user()->username }}" />
                                </div>
                                <div class="content">
                                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>
                                        {{  $admin->user()->username }}{{ __(' | Logout') }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">

                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                {{  $admin->user()->username }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>
                                            {{ __('Logout') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('/img/icons/logo-white.png') }}" alt="Ziraatbankasi" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{ route('home') }}">
                                    <i class="fas fa-tachometer-alt"></i>{{ __('Dashboard') }}
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('send') }}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>{{ __('Transfers') }}</a>
                            </li>
                            <li class="has-sub">
                                <a href="JavaScript:void(0)">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>{{ __('Features') }}</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="#balance">{{ __('Account Balance') }}</a>
                                    </li>
                                    <li>
                                        <a href="#balance">{{ __('Recent Transaction') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('send') }}">{{ __('Cards') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('support') }}">{{ __('Support') }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ $user->pics() }}" alt="{{  $user->name() }}" />
                                </div>
                                <div class="content">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>

                                        {{  $user->name() }} {{ __(' | Logout') }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <img src="{{ $user->pics() }}" alt="{{  $user->name() }}" />

                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                {{  $user->name() }}
                                            </h5>
                                            <span class="email">{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#account">
                                                <i class="zmdi zmdi-account"></i>{{ __('Account') }}</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('send') }}">
                                                <i class="zmdi zmdi-money-box"></i>{{ __('Transfer/Withdrawal') }}</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>

                                            {{ __('Logout') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo">
                        <img src="{{ asset('img/icon/logo-white.png') }}" alt="Ziraatbankasi" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        @if(auth()->guard('admin')->user())
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>{{ __('Dashboard') }}</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('admin.settings') }}">
                                <i class="fas fa-tachometer-alt"></i>{{ __('Settings') }}</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ asset('img/admin.jpeg') }}" alt="{{ $admin->user()->username }}" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{  $admin->user()->username }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <img src="{{ asset('img/admin.jpeg') }}" alt="{{ $admin->user()->username }}" />
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        {{ $admin->user()->username }}
                                    </h5>
                                    <span class="email">{{ $admin->user()->username }}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i>{{ __('Dashboard') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('send') }}">
                                <i class="fas fa-chart-bar"></i>{{ __('Transfers') }}</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="JavaScript:void(0)">
                                <i class="fas fa-desktop"></i>{{ __('Features') }}</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#balance">{{ __('Account Balance') }}</a>
                                </li>
                                <li>
                                    <a href="#balance">{{ __('Recent Transaction') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('send') }}">{{ __('Cards') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('support') }}">{{ __('Support') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            </header>
            <div class="sub-header-mobile-2 d-block d-lg-none">
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ $user->pics() }}" alt="{{  $user->name() }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{  $user->name() }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <img src="{{ $user->pics() }}" alt="{{  $user->name() }}" />
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            {{  $user->name() }}
                                        </h5>
                                        <span class="email">{{  auth()->user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#account">
                                            <i class="zmdi zmdi-account"></i>{{ __('Account') }}</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('send') }}">
                                            <i class="zmdi zmdi-money-box"></i>{{ __('Transfer/Withdrawal') }}</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @if(auth()->guard('admin')->user())
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endif
    <!-- END HEADER MOBILE -->
    @yield('content')

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('css/vendors/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('css/vendors/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('css/vendors/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('css/vendors/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('css/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('css/vendors/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('css/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('css/vendors/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('css/vendors/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('css/vendors/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('css/vendors/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('css/vendors/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#nav div').click(function(){
                var id = "#" + $(this).attr('goto');
                var top = $(id).position().top;
                $('html').scrollTop(top);
            });
        });
    </script>
    <script src="//code.tidio.co/rea9wjsiprnfmymw8meuixwdnjmh5buz.js"></script>
    </body>

</html>
<!-- end document-->
