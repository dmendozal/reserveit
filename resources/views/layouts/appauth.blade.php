<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    {{--  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> --}}
    {{-- <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Activo Fijo - Adm. Empresas</title>
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cryptocurrency-icons.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css')}}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{asset('assets/css/style-primary.css')}}">
</head>

<body>
    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                                <h4>Facultad de Administracion de Empresas</h4>
                                <center>
                                    <p>U.A.G.R.M</p>
                                </center>
                                <center> <img src="{{asset('assets/images/logo.jpg')}}"
                                        style="height: 120px;width: auto" /></center>
                                <br>
                            </div>
                            @yield("content")
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>UAGRM</h1>
                            <p>Facultad de Administracion de Empresas</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>
    <!-- Global Vendor, plugins & Activation JS -->
    @include('partials.script')
</body>

</html>