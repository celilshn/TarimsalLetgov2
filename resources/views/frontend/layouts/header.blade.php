<!DOCTYPE html>
<html lang="tr">

<head>
    <title>{{$sitesettings->site_name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('frontend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('frontend/')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{asset('frontend/')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('frontend/')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/rangeslider.css">

    <link rel="stylesheet" href="{{asset('frontend/')}}/css/style.css">

</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar container py-0 bg-white" role="banner">

        <!-- <div class="container"> -->
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="{{route('homepage')}}" class="text-black mb-0">Tarımsal<span class="text-primary">Pazarlama</span>  </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="{{route('homepage')}}">{{$sitesettings->site_tab_mainpage}}</a></li>
                        <li><a href="{{route('products')}}">{{$sitesettings->site_tab_ads}}</a></li>
                        <li>
                            <a href="about.html">{{$sitesettings->site_tab_us}}</a>
                        <li><a href="contact.html">{{$sitesettings->site_tab_contact}}</a></li>

                        <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Giriş Yap</a></li>
                        <li><a href="register.html">Kayıt</a></li>

                        <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Ilan Ekle</span></a></li>
                    </ul>
                </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

        </div>
        <!-- </div> -->

    </header>
