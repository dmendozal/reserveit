<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login | Reserveit</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
    <link href="{{asset('css/demo/nifty-demo.min.css')}}" rel="stylesheet">
</head>

<body>
    <div id="container" class="cls-container">
        
		<div id="bg-overlay"></div>
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
                            @yield("content")
                            <div class="demo-bg">
                                    <div id="demo-bg-list">
                                        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-1.jpg')}}" alt="Background Image">
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-2.jpg')}}" alt="Background Image">
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-3.jpg')}}" alt="Background Image">
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-4.jpg')}}" alt="Background Image">
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-5.jpg')}}" alt="Background Image">
                                        <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-6.jpg')}}" alt="Background Image">
                                    <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-7.jpg')}}" alt="Background Image">
                                    </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/nifty.min.js')}}"></script>
    <script src="{{asset('js/demo/bg-images.js')}}"></script>
</body>

</html>