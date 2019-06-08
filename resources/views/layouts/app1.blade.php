<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js"
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" type="image/png" href="{{ asset('/favicon.ico') }}">
  <!-- Place favicon.ico in the root directory -->

  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <!-- font-awesome -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <!-- owl theme default -->
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
  <!-- pe-icon-7-stroke -->
  <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.min.css') }}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- swiper -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
  <!-- audioplayer -->
  <link rel="stylesheet" href="{{ asset('assets/css/audioplayer.css') }}">
  <!-- menu -->
  <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
  <!-- main -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <!-- responsive -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <!-- default -->
  <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
  <!-- color -->
  <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">

</head>

<body>

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  @include('includes.headernav')


  <div class="js-offcanvas-menu js-index1-nav" id="js_offcanvas_menu">
    <nav class="header-nav">
      <span class="js-offcanvas-close"><i class="pe-7s-close"></i></span>
      <div class="cssmenu" data-title="Menu">
        <ul class="menu list-inline">
            <li class="active"><a href="/">HOME</a>
                <ul>
                  <li><a href="/">Home</a></li>

                </ul>
            </li>
            <li><a href="/albums">ALBUMS</a>
              <ul>
                <li><a href="/albums/1">Album Details</a></li>
              </ul>
            </li>
            <li><a href="/events">Event</a>
              <ul>
                <li><a href="/event/show">Event Details</a></li>
              </ul></li>
            <li><a href="#">GALLERY</a>
              <ul>
                <li><a href="/photo-gallary">Photo Gallary</a></li>  
                <li><a href="/video-gallary">Video Gallary</a></li>     
              </ul>
            </li>
            <li><a href="/detials">Singer</a>
              <ul>
               
                <li><a href="/detials">Artist Details</a></li>
              </ul>
            </li>
            <li><a href="/shop">Shop</a>
              <ul>
                <li><a href="/shop">Product Page</a></li>
                <li><a href="/product-details">Product Details</a></li>
                <li><a href="/cart">Product Cart</a></li>
                <li><a href="/checkout">Product Checkout</a></li>
              </ul>
            </li>
            <li><a href="/blog">BLOG</a>
              <ul>
                <li><a href="/blog">Blog Page</a></li>
                
              </ul>
            </li>
            <li><a href="/contact">CONTACT</a></li>
        </ul>
      </div><!-- #header-menu-wrap -->
      <div class="widget mt-3">
       <div class="js-widget-search">
         <form>
           <input type="text" required="" placeholder="Search Here..">
           <i><img alt="search icon" src="{{ asset('assets/images/search.png') }}"></i>
         </form>
       </div>
      </div>
    </nav> <!-- header-nav -->
  </div><!-- js-offcanvas-menu -->




@yield('content')

  @include('includes.footer')


  <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/menu.js') }}"></script>
        <script src="{{ asset('assets/js/countdown.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.jplayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jplayer.playlist.min.js') }}"></script>
        <script src="{{ asset('assets/js/audio-player.js') }}"></script>
        <script src="{{ asset('assets/js/audioplayer.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>



</body>


<!-- Mirrored from thesharthee.com/tf/devaid-preview/devaid/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2019 18:40:42 GMT -->
</html>
