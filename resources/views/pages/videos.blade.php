@extends('layouts.app1')

@section('content')

<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Video Gallery</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="js-content-memories  has-color bg-dark" >
    <div class="container-fluid">
      <div class="section-title text-center mb-50">
        <h2>TOURS <span class="primary-color">MEMORIES</span></h2>  
        <p>A complete list of festivals and concerts to be held soon! You can can <span class="primary-color">watch our gallary</span>photo from here!</p>
      </div><!-- section-title -->

      <div class="js-gallary-list">
        <div class="row"> 
          <div class="col">
            <div class="js-gallary-thumbnail">
              <img src=" {{asset('assets/images/memoris/1.jpg')}} " alt="gallary photo"> 
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>    
            
            <div class="js-gallary-thumbnail">
              <img src=" {{asset('assets/images/memoris/3.jpg')}} " alt="gallary photo">
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>           
          </div> <!-- col -->
          <div class="col">
            <div class="js-gallary-thumbnail">
              <img src=" {{asset('assets/images/memoris/2.jpg')}} " alt="gallary photo">
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>          
            <div class="js-gallary-thumbnail">
              <img src=" {{asset('assets/images/memoris/4.jpg')}} " alt="gallary photo">
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>          
          </div> <!-- col --> 
          <div class="col">
            <div class="js-gallary-thumbnail">
              <img src="  {{asset('assets/images/memoris/5.jpg')}} " alt="gallary photo">
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>          
          </div> <!-- col --> 
          <div class="col">
            <div class="js-gallary-thumbnail">
              <img src=" {{asset('assets/images/memoris/6.jpg')}} " alt="gallary photo"> 
              <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watche61b.html?v=YqeW9_5kURI"><img alt="Play" src="assets/images/video-image/play.png"></a>
            </div>          
                  
          </div> <!-- col --> 
        </div><!-- row --> 
      </div>  <!-- js-gallary-list -->
    </div><!-- container -->
  </section><!-- js-content-memories -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
  
@endsection