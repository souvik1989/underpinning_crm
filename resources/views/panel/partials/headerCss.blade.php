<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ isset($setting->favicon) ? config("app.url").Storage::url($setting->favicon) :asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ isset($setting->favicon) ? config("app.url").Storage::url($setting->favicon) :asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>{{ isset($setting->site_name) ? $setting->site_name : env('APP_NAME') }} - @yield('title')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/themify.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/animate.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/pe7-icon.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/pe7-icon.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{url('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>