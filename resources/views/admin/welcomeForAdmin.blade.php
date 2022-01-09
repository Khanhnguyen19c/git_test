<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Laravel</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="{{asset('public/FrontEnd/Images/icon/logo.png')}}" />

    <!--//-------Seo--------->
    <!-- //SEO -->
    <link href="{{asset('/FrontEnd/CSS/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/main.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/lightslider.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/vlite.css')}}" rel="stylesheet">
    <link href="{{asset('/FrontEnd/CSS/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('public/FrontEnd/CSS/owl.theme.default.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<!--/head-->

<body>

<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="tel:0772879116"><i class="fa fa-phone"></i> +84 77 287 79 116</a></li>
                            <li><a href="mailto:khanhlunn224@gmail.com"><i class="fa fa-envelope"></i> khanhlunn224@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(Session()->get('user'))
                            <li>
                                <a href="{{route('admin.dashboard')}}"><i class="fa fa-bell"></i> Trang chủ quản lý kho </a>
                                <a href="{{route('admin.profile')}}"><i class="fa fa-bell"></i> Thông tin admin </a>
                                <a href="{{route('logout')}}"><i class="fa fa-bell"></i> Logout </a>
                            </li>
                            @else
                                <li><a href="{{route('admin.login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="border:none;box-shadow:none;min-height:auto;">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="{{asset('./public/frontend/images/home/LOGO1.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom" id="navbar">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">

                            <li><a href="{{URL::to('/trang-chu')}}" class="active"> Trang chủ admin</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/header-bottom-->

</header>
<!--/header-->
<!--/header-->

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">

                @yield('content')

            </div>

        </div>
    </div>
</section>


<script src="{{asset('public/FrontEnd/JS/jquery.js')}}"></script>

<script src="{{asset('public/FrontEnd/JS/bootstrap.min.js')}}"></script>

<script src="{{asset('public/FrontEnd/JS/jquery.scrollUp.min.js')}}"></script>

<script src="{{asset('public/FrontEnd/JS/price-range.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/jquery.prettyPhoto.js')}}"></script>

<script src="{{asset('public/FrontEnd/JS/main.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/sweetalert.min.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/lightgallery-all.min.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/lightslider.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/prettify.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/vlite.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/simple.money.format.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/owl.autoplay.js')}}"></script>
<script src="{{asset('public/FrontEnd/JS/owl.carousel.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

</body>

</html>
