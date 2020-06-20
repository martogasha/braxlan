<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/bigdeal/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 05:29:05 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <link rel="icon" href="{{asset('assets/images/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.ico')}}" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&amp;display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color2.css')}}" media="screen" id="color">
</head>
<body class="bg-light ">

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="{{asset('assets/images/loader.gif')}}" alt="loader">
    </div>
</div>
<!-- loader end -->

<!--header start-->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-5 col-md-7 col-sm-6">
                    <div class="top-header-left">
                        <div class="shpping-order">
                        </div>
                        <div class="app-link">
                            <h6>
                                free Delivery on order over Ksh:5000

                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-5 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block">
                            <ul>
                                <li><a href="#">gift cards</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">help & contact</a></li>
                                <li><a href="#">todays deal</a></li>
                                <li><a href="#">track order</a></li>
                                <li><a href="#">shipping </a></li>
                                <li><a href="#">easy returns</a></li>
                            </ul>
                        </div>
                        <div class="language-block">
                            <div class="language-dropdown">
                  <span  class="language-dropdown-click">
                      @if(\Illuminate\Support\Facades\Auth::check())
                    {{\Illuminate\Support\Facades\Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                      @endif
                  </span>
                                <ul class="language-dropdown-open">
                                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('trackOrder')}}">Orders</a></li>
                                    <form action="{{route('logout')}}" method="post" id="logout">
                                        @csrf
                                    <li><a href="javascript:document.getElementById('logout').submit();">Logout</a></li>
                                    </form>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-header2">
        <div class="container">
            <div class="col-md-12">
                <div class="main-menu-block">
                    <div class="sm-nav-block">
                        <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                        <ul class="nav-slide">
                            <li>
                                <div class="nav-sm-back">
                                    back <i class="fa fa-angle-right pl-2"></i>
                                </div>
                            </li>
                            <li><a href="{{url('supermarket')}}">Supermarket</a></li>
                            <li><a href="{{url('homestead')}}">Homestead Essentials</a></li>
                            <li><a href="{{url('saftey')}}">Safety Essentials</a></li>
                            <li><a href="{{url('drinks')}}">Drinks</a></li>

                            <li>
                                <a class="mor-slide-click">
                                    mor category
                                    <i class="fa fa-angle-down pro-down" ></i>
                                    <i class="fa fa-angle-up pro-up" ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-block">
                        <a href="{{url('/')}}"><img src="{{asset('assets/images/layout-2/logo/braxLogo.png')}}" class="img-fluid  " alt="logo"></a>
                    </div>
                    <div class="input-block">
                        <div class="input-box">
                            <form class="big-deal-form">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="search"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search a Product" >
                                    <div class="input-group-prepend">
                                        <select>
                                            <option>All Category</option>
                                            <option>indurstrial</option>
                                            <option>sports</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cart-block cart-hover-div">
                        <div class="cart ">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                @if(\App\Cart::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->count()==0)
                                @else
                                    <span class="cart-product">{{\App\Cart::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->count()}}</span>
                            @endif
                            @endif
                            <ul>
                                <li class="mobile-cart  ">
                                    <a href="{{url('cart')}}">
                                        <i class="icon-shopping-cart "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{url('cart')}}">
                        <div class="cart-item">
                            <h5>shopping</h5>
                            <h5>cart</h5>
                        </div>
                        </a>
                    </div>
                    <div class="menu-nav">
              <span class="toggle-nav">
                <i class="fa fa-bars "></i>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-header-2">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="navbar-menu">
                        <div class="category-left">
                            <div class="nav-block">
                                <div class="nav-left" >
                                    <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                        </button>
                                        <h5 class="mb-0  text-white title-font">Shop by category</h5>
                                    </nav>
                                    <div class="collapse  nav-desk" id="navbarToggleExternalContent">
                                        <ul class="nav-cat title-font">
                                            <li> <img src="{{asset('assets/images/layout-1/nav-img/07.png')}}" alt="category-product"> <a href="{{url('supermarket')}}">Supermarket </a></li>
                                            <li> <img src="{{asset('assets/images/layout-1/nav-img/02.png')}}" alt="category-product"> <a href="{{url('homestead')}}">Homestead Essentials</a></li>
                                            <li> <img src="{{asset('assets/images/layout-1/nav-img/09.png')}}" alt="category-product"> <a href="{{url('saftey')}}">Safety Essentials</a></li>
                                            <li> <img src="{{asset('assets/images/layout-1/nav-img/08.png')}}" alt="category-product"> <a href="{{url('drinks')}}">Drinks</a></li>
                                            <li>
                                                <a class="mor-slide-click">more category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li>
                                        <!--HOME-->
                                        <!--HOME-END-->

                                        <!--SHOP-->
                                        <li>
                                            <a href="{{url('supermarket')}}" class="dark-menu-item">Supermarket</a>
                                        </li>
                                        <!--SHOP-END-->


                                        <!--product-meu start-->
                                        <li class="mega"><a href="{{url('homestead')}}" class="dark-menu-item">Homestead Essentials
                                            </a>
                                        </li>
                                        <li class="mega" >
                                            <a href="{{url('saftey')}}" class="dark-menu-item">Safety Essentials</a>
                                        </li>

                                        <li><a href="{{url('drinks')}}" class="dark-menu-item">Drinks</a>

                                        </li>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                        @else
                                        <li>
                                            <a href="{{url('login')}}" class="dark-menu-item">Login</a>
                                        </li>
                                    @endif
                                        <!--blog-meu end-->
                                    </ul>
                                </nav>
                            </div>
                            <div class="icon-block">
                                <ul>
                                    <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                        <div class ="search-overlay">
                                            <div>
                                                <span class="close-mobile-search">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                    <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-user"></i></a>
                                    </li>
                                    @else
                                        <li class="mobile-setting mobile-setting-hover" onclick="openAccount()"><a href="#"><i class="icon-user"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="category-right">
                            <div class="contact-block">
                                <div>
                                    <i class="fa fa-volume-control-phone"></i>
                                    <span>call us<span>123-456-76890</span></span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div  class="gift-block" data-toggle="dropdown">
                                    <div class="grif-icon">
                                        <i class="icon-gift"></i>
                                    </div>
                                    <div class="gift-offer">
                                        <p>gift box</p>
                                        <span>Festivel Offer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
