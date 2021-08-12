<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!--
    <div class="pro-banner" id="pro-banner">
        <div class="card pro-banner-bg border-0 rounded-0">
            <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                <p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Like what you see? Checkout our premium version for more.</p>
                <div class="d-flex">
                    <a href="https://github.com/Bootstrapdash/Kapella-Free-Bootstrap-Admin-Template" target="_blank" class="btn btn-outline-light mr-2">Download free version</a>
                    <a href="http://www.bootstrapdash.com/demo/kapella/template/" target="_blank" class="btn btn-outline-light mr-2 bg-white text-dark">Upgrade to Pro</a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container-fluid">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="{{route('admin.dashboard.index')}}"><img src="{{asset('images/LogoMain.png')}}" alt="logo"/></a>
                        <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard.index')}}"><img src="{{asset('images/LogoMain.png')}}" alt="logo"/></a>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-lg-flex d-none">
                            <button type="button" class="btn btn-inverse-primary btn-sm" onclick='window.location.href = "{{route('admin.dashboard.settings')}}"'>Settings</button>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <span class="nav-profile-name">{{auth()->guard()->user()->first_name}}</span>
                                <span class="online-status"></span>
                                <img src="{{asset('images/faces/face28.png')}}" alt="profile"/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a href="{{route('admin.dashboard.settings')}}" class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a  href="{{ route('admin.dashboard.logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('admin.dashboard.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard.index')}}">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a href="{{route('dashboard.transactions')}}" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Transactions</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dashboard.contact')}}" class="nav-link">
                            <i class="mdi mdi-email menu-icon"></i>
                            <span class="menu-title">Contact</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    -->
                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
</div>
<script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('js/dashboard/template.js')}}"></script>
<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{asset('vendors/justgage/raphael-2.1.4.min.js')}}"></script>
<script src="{{asset('vendors/justgage/justgage.js')}}"></script>
<script src="{{asset('js/dashboard/dashboard.js')}}"></script>
</body>
</html>
