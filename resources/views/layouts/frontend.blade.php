<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">


    @include('frontpart.css')
    @yield('css')

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('frontpart.header')

    
    <div class="site-wrapper-reveal section-space--pt__120">
        @yield('content')
    </div>


    @include('frontpart.footer')


    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    @include('frontpart.toolbar')
    <!-- End Toolbar -->

    @include('frontpart.mobilemenu')
    @include('frontpart.search')
    @include('frontpart.js')
    @yield('js')

</body>

</html>