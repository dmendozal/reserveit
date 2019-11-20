<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Activos Fijos - @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cryptocurrency-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link id="cus-style" rel="stylesheet" href="{{asset('assets/css/style-primary.css')}}">
</head>

<body>

    <div class="main-wrapper">

        <!-- Parte superio de la pagina -->
        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <img src="{{asset('assets/images/logo.jpg')}}" style="height: 80px;width: auto" />
                        <center>
                            <h6>Facultad de Administracion de Empresas</h6>
                        </center>
                        {{-- <a href="index.html">
                    <img src="assets/images/Escudo_FICCT.jpg" alt=""  height="50%" width="50%">
                </a> --}}
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i
                                                class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i
                                                    class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i
                                                        class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag"
                                                src="assets/images/flags/flag-1.jpg" alt=""><i
                                                class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="assets/images/flags/flag-1.jpg" alt="">
                                                    English</a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-2.jpg" alt="">
                                                    Japanese</a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-3.jpg" alt=""> Spanish
                                                </a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-4.jpg" alt="">
                                                    Germany</a></li>
                                        </ul>

                                    </li>

                                    <!--Mail-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span
                                                class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-mail">
                                            <div class="head">
                                                <h4 class="title">You have 3 new mail.</h4>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img
                                                                    src="assets/images/avatar/avatar-2.jpg" alt="">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Sub: New Account</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum
                                                                    available. </p>
                                                            </div>
                                                            <span class="reply"><i
                                                                    class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img
                                                                    src="assets/images/avatar/avatar-1.jpg" alt="">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum
                                                                    available. </p>
                                                            </div>
                                                            <span class="reply"><i
                                                                    class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img
                                                                    src="assets/images/avatar/avatar-2.jpg" alt="">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Sub: Product inquiry</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum
                                                                    available. </p>
                                                            </div>
                                                            <span class="reply"><i
                                                                    class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img
                                                                    src="assets/images/avatar/avatar-1.jpg" alt="">
                                                            </div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum
                                                                    available. </p>
                                                            </div>
                                                            <span class="reply"><i
                                                                    class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span
                                                class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 4 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am Today</span>
                                                        </a>
                                                        <button class="delete"><i
                                                                class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>

                                    </li>
                                    
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="avatar">
                                                    <img src="{{asset(Auth::User()->foto)}}" alt="">
                                                    <span class="status"></span>
                                                </span>
                                                <span class="name">{{Auth::User()->name}}</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">{{Auth::User()->name}}
                                                        {{Auth::User()->apellido}}</a></h5>
                                                <a class="mail" href="#">{{Auth::User()->email}}</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="{{route('usuarios.show',Auth::User()->id)}}"><i
                                                                class="zmdi zmdi-account"></i>Perfil</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                            <i class="zmdi zmdi-lock-open"></i>Cerrar Sesion</a></li>
                                                    <li>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                                <ul>

                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        @include('partials.menu')
        <!-- Parte del contenido de la pagina-->
        <div class="content-body">
            <div class="row mbn-30">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
    </div>
    @include('partials.script')
</body>

</html>