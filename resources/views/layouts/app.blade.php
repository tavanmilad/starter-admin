<!DOCTYPE html>
<html class="loading dark-layout" data-layout="dark-layout" data-textdirection="ltr"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <title>{{ config('app.name') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('') }}app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/vendors.min.css">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('') }}app-assets/css/core/menu/menu-types/vertical-menu.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.css">
    @stack('styles')
</head>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.app.header')

    <!-- BEGIN: Sidebar-->
    @include('layouts.app.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @yield('content')
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.app.footer')

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('') }}app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('') }}app-assets/vendors/js/jquery/jquery.js"></script>

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('') }}app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('') }}app-assets/js/core/app.js"></script>

    <!-- BEGIN: Page JS-->
    @stack('scripts')
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
