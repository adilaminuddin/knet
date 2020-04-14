<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon">
    <!-- Fonts -->
    <link href="{{asset('fonts/cloudicon/cloudicon.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('fonts/fontawesome/css/all.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('fonts/opensans/opensans.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <!-- CSS styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/filter.css')}}" rel="stylesheet">
    <!-- Custom color styles -->
    
    <link href="{{asset('css/colors/blue.css')}}" rel="stylesheet" title="blue" media="none" onload="if(media!='all')media='all'"/>
    {{-- <link href="{{asset('css/colors/pink.css')}}" rel="stylesheet" title="pink" media="none" onload="if(media!='all')media='all'"/>
    <link href="{{asset('css/colors/green.css')}}" rel="stylesheet" title="green" media="none" onload="if(media!='all')media='all'"/> --}}
  </head>
  <body>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
  <!-- ***** LOADING PAGE ****** -->
  <div id="spinner-area">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
      <div class="spinner-txt">Loading...</div>
    </div>
  </div>
  <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
  <header id="header">
      {{-- @include('frontpart.header') --}}
    </header>
  <!-- ***** SLIDER ***** -->
  @yield('content')
<!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
 <footer id="footer">
    {{-- @include('frontpart.footer') --}}
 </footer>
<!-- ***** BUTTON GO TOP ***** -->
<a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
<!-- Javascript -->
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollme.min.js')}}"></script>
<script src="{{asset('js/lazysizes.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>

@yield('js')
</body>
</html>