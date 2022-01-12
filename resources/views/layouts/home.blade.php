<!DOCTYPE html>
<html lang="en">
  <head>
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Melisa Temel">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('assets')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/mediaelementplayer.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="{{ asset('assets')}}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    
    @yield('css')
    @yield('headerjs')



  </head>
  <body>
@section('content')
içerik alanı
@show

@include('home._header')
@include('home._footer')
@yield('footerjs')



  </body>
</html>