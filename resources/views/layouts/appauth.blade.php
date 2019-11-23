<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login | Reserveit</title>

    <link href="{{asset('dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body class="skin-default card-no-border">
        <div class="preloader">
                <div class="loader">
                    <div class="loader__figure"></div>
                    <p class="loader__label">Reserveit</p>
                </div>
            </div>
            <section id="wrapper">
                    <div class="login-register" style="background-image:url(../assets/images/background/image.jpg);">
                        <div class="login-box card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
            </section>
    <script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>