<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Reserveit - @yield('title')</title>
    <link href="{{asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/pages/dashboard1.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

    <link href="{{asset('assets/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/node_modules/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet')}}" />
    <link href="{{asset('assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/node_modules/dropify/dist/css/dropify.min.css')}}">

</head>

<body class="skin-default fixed-layout">
   
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Reserveit</p>
        </div>
    </div>

    <div id="main-wrapper">
    
          @include('partials.header')
   
         @include('partials.menu')
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                @include('partials.sidebar')
            </div>
        </div>
     
        @include('partials.footer')
      
    </div>
    @include('partials.script')

</body>

</html>