<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{--My Files Start--}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Task, Task Management, Time Management, Task Management System"/>
    <meta name="keywords" content="Task, Management System, Task Management System, Time,">
    <meta name="author" content="Alfred Twaambo Matakala"/>
    {{--    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">--}}

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/authentication.css')}}">
    {{--My Files End--}}
</head>
<body>
<div id="app">

    @guest
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/login') }}">
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
                    </ul>
                    @else

                        <!-- [ Layout wrapper ] Start -->
                        <div class="layout-wrapper layout-2">
                            <div class="layout-inner">
                                <!-- [ Layout sidenav ] Start -->
                                <div id="layout-sidenav"
                                     class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                                    <div class="app-brand  demo">
                                        {{--                    <span class="app-brand-logo demo">--}}
                                        {{--                        <img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">--}}
                                        {{--                    </span>--}}
                                        <a class="app-b rand app-bran d-l ogo de mo text-white"
                                           href="{{ url('/login') }}">
                                            {{ strtoupper(config('app.name', 'Laravel')) }}
                                        </a>
                                        {{--                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                                        {{--                                            <span class="navbar-toggler-icon"></span>--}}
                                        {{--                                        </button>--}}
                                        {{--                                        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>--}}
                                        <a href="javascript:"
                                           class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                                            <i class="ion ion-md-menu align-middle"></i>
                                        </a>
                                    </div>
                                    <div class="sidenav-divider mt-0"></div>

                                    <!-- Links -->
                                    <ul class="sidenav-inner py-1">

                                        <!-- Dashboards -->
                                        <li class="sidenav-item active">
                                            <a href="{{route('home')}}" class="sidenav-link">
                                                <i class="sidenav-icon feather icon-home"></i>
                                                <div>Dashboard</div>
                                            </a>
                                        </li>

                                        <!-- Layouts -->
                                        <li class="sidenav-divider mb-1"></li>
                                        <li class="sidenav-header small font-weight-semibold"><i
                                                class="feather icon-users"></i> USER ACCOUNTS
                                        </li>
                                        <li class="sidenav-item">
                                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                                <i class="sidenav-icon feather icon-user"></i>
                                                <div>User Accounts</div>
                                            </a>
                                            <ul class="sidenav-menu">
                                                <li class="sidenav-item ">
                                                    <a href="{{route('user.create')}}" class="sidenav-link">
                                                        <i class="feather icon-user-plus mx-1"></i> Create Account
                                                    </a>
                                                </li>
                                                <li class="sidenav-item">
                                                    <a href="{{route('user.delete')}}" class="sidenav-link">
                                                        <i class="lnr lnr-trash mx-1"></i> Delete Account
                                                    </a>
                                                </li>
                                                <li class="sidenav-item">
                                                    <a href="{{route('user.edit')}}"  class="sidenav-link">
                                                        <i class="feather icon-edit mx-1"></i> Edit Account
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <!-- UI elements -->
                                        <li class="sidenav-divider mb-1"></li>
                                        <li class="sidenav-header small font-weight-semibold">
                                            <i class="feather icon-calendar"></i> TASKS
                                        </li>
                                        <li class="sidenav-item">
                                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                                <i class="sidenav-icon lnr lnr-clock mx-1"></i>
                                                <div>Scheduled Tasks</div>
                                            </a>
                                            <ul class="sidenav-menu">
                                                <li class="sidenav-item">
                                                    <a href="bui_badges.html" class="sidenav-link">
                                                        <i class="lnr lnr-hourglass mr-md-1"></i>
                                                        <div>Schedule a Task</div>
                                                    </a>
                                                </li>
                                                <li class="sidenav-item">
                                                    <a href="bui_button.html" class="sidenav-link">
                                                        <i class="feather icon-edit mx-1"></i> Edit Tasks
                                                    </a>
                                                </li>
                                                <li class="sidenav-item">
                                                    <a href="charts_morrisjs.html" class="sidenav-link">
                                                        <i class="lnr lnr-trash mx-1"></i> Delete Tasks
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Forms & Tables -->
                                        <li class="sidenav-divider mb-1"></li>
                                        <li class="sidenav-header small font-weight-semibold">
                                            <i class="lnr lnr-book mx-1"></i> REPORTS
                                        </li>
                                        <li class="sidenav-item">
                                            <a href="javascript:" class="sidenav-link sidenav-toggle">
                                                <i class="sidenav-icon feather icon-clipboard"></i>
                                                <div>Progress Reports</div>
                                            </a>
                                            <ul class="sidenav-menu">
                                                <li class="sidenav-item">
                                                    <a href="forms_layouts.html" class="sidenav-link">
                                                        <i class="lnr lnr-chart-bars mx-1"></i> Graphical
                                                    </a>
                                                </li>
                                                <li class="sidenav-item">
                                                    <a href="forms_input-groups.html" class="sidenav-link">
                                                        <i class="lnr lnr-menu mx-1"></i> Tabular
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- [ Layout sidenav ] End --> <!-- [ Layout container ] Start -->
                                <div class="layout-container">
                                    <!-- [ Layout navbar ( Header ) ] Start -->
                                    <nav
                                        class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x"
                                        id="layout-navbar">

                                        <!-- Brand demo (see assets/css/demo/demo.css) -->
                                        <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                                            <span
                                                class="app-brand-text demo font-weight-normal ml-2"> {{ strtoupper(config('app.name', 'Laravel')) }}</span>
                                        </a>

                                        <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                                        <div
                                            class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                                            <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                                                <i class="ion ion-md-menu text-large align-middle"></i>
                                            </a>
                                        </div>

                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#layout-navbar-collapse">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                                            <!-- Divider -->
                                            <hr class="d-lg-none w-100 my-2">

                                            <div class="navbar-nav align-items-lg-center">
                                            </div>

                                            <div class="navbar-nav align-items-lg-center ml-auto">
                                                {{--                                                <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">--}}
                                                {{--                                                    <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">--}}
                                                {{--                                                        <i class="feather icon-bell navbar-icon align-middle"></i>--}}
                                                {{--                                                        <span class="badge badge-danger badge-dot indicator"></span>--}}
                                                {{--                                                        <span class="d-lg-none align-middle">&nbsp; Notifications</span>--}}
                                                {{--                                                    </a>--}}
                                                {{--                                                    <div class="dropdown-menu dropdown-menu-right">--}}
                                                {{--                                                        <div class="bg-primary text-center text-white font-weight-bold p-3">--}}
                                                {{--                                                            4 New Notifications--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                        <div class="list-group list-group-flush">--}}
                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>--}}
                                                {{--                                                                <div class="media-body line-height-condenced ml-3">--}}
                                                {{--                                                                    <div class="text-dark">Login from 192.168.1.1</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Aliquam ex eros, imperdiet vulputate hendrerit et.--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">12h ago</div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>--}}
                                                {{--                                                                <div class="media-body line-height-condenced ml-3">--}}
                                                {{--                                                                    <div class="text-dark">You have--}}
                                                {{--                                                                        <strong>4</strong> new followers</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>--}}
                                                {{--                                                                <div class="media-body line-height-condenced ml-3">--}}
                                                {{--                                                                    <div class="text-dark">Server restarted</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        19h ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>--}}
                                                {{--                                                                <div class="media-body line-height-condenced ml-3">--}}
                                                {{--                                                                    <div class="text-dark">99% server load</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Etiam nec fringilla magna. Donec mi metus.--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        20h ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                        <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}

                                                {{--                                                <div class="demo-navbar-messages nav-item dropdown mr-lg-3">--}}
                                                {{--                                                    <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">--}}
                                                {{--                                                        <i class="feather icon-mail navbar-icon align-middle"></i>--}}
                                                {{--                                                        <span class="badge badge-success badge-dot indicator"></span>--}}
                                                {{--                                                        <span class="d-lg-none align-middle">&nbsp; Messages</span>--}}
                                                {{--                                                    </a>--}}
                                                {{--                                                    <div class="dropdown-menu dropdown-menu-right">--}}
                                                {{--                                                        <div class="bg-primary text-center text-white font-weight-bold p-3">--}}
                                                {{--                                                            4 New Messages--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                        <div class="list-group list-group-flush">--}}
                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>--}}
                                                {{--                                                                <div class="media-body ml-3">--}}
                                                {{--                                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Josephin Doe &nbsp;·&nbsp; 58m ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>--}}
                                                {{--                                                                <div class="media-body ml-3">--}}
                                                {{--                                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Lary Doe &nbsp;·&nbsp; 1h ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>--}}
                                                {{--                                                                <div class="media-body ml-3">--}}
                                                {{--                                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Alice &nbsp;·&nbsp; 2h ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}

                                                {{--                                                            <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">--}}
                                                {{--                                                                <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>--}}
                                                {{--                                                                <div class="media-body ml-3">--}}
                                                {{--                                                                    <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>--}}
                                                {{--                                                                    <div class="text-light small mt-1">--}}
                                                {{--                                                                        Suzen &nbsp;·&nbsp; 5h ago--}}
                                                {{--                                                                    </div>--}}
                                                {{--                                                                </div>--}}
                                                {{--                                                            </a>--}}
                                                {{--                                                        </div>--}}

                                                {{--                                                        <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}

                                                <!-- Divider -->
                                                <div
                                                    class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">
                                                    |
                                                </div>
                                                <div class="demo-navbar-user nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="{{asset('assets/img/avatars/1.png')}}" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{Auth::user()->name}}</span>
                                    </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:" class="dropdown-item">
                                                            <i class="feather icon-user text-muted"></i> &nbsp; My
                                                            profile</a>
                                                        <a href="javascript:" class="dropdown-item">
                                                            <i class="feather icon-settings text-muted"></i> &nbsp;
                                                            Account settings</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            <i class="feather icon-power text-danger"></i> &nbsp; Log
                                                            Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                             @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- [ Layout navbar ( Header ) ] End -->
                                    <!-- [ Main Content ]  -->
                                    @yield('content')
                                    <!-- [ Main Content ] End -->
                                </div>
                                <!-- Overlay -->
                                <div class="layout-overlay layout-sidenav-toggle"></div>
                            </div>
                            <!-- [ Layout wrapper] End -->
                            @endguest
                        </div>
                </div>
        </nav>

        {{--        <main class="py-4 bg-info">--}}
        @yield('guest')
        {{--        </main>--}}
</div> <!-- Core scripts -->
<script src="{{asset('../assets/js/pace.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/sidenav.js')}}"></script>
<script src="{{asset('assets/js/layout-helpers.js')}}"></script>
<script src="{{asset('assets/js/material-ripple.js')}}"></script>

<!-- Libs -->
<script src="{{asset('../assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/libs/eve/eve.js')}}"></script>
<script src="{{asset('assets/libs/flot/flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/curvedLines.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/core.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/charts.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/animated.js')}}"></script>
<!-- Demo -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/js/analytics.js')}}"></script>
<script src="{{asset('assets/js/pages/dashboards_index.js')}}"></script>
</body>
</html>
