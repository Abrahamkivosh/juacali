@extends('layouts.app1')
@section('content')
<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>View all albums</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="album-area js-album-list-page album-bg2 has-color">
    <div class="container">
      <div class="section-title text-center mb-50">
        <h2>Feature Music <span class="primary-color">Albums</span></h2>
        <p>Check out my newest music albums. You can easily purchase our music albums on
        <span class="primary-color">iTunes</span> or <span class="primary-color">Google Play</span></p>
      </div><!-- section-title -->
      <div class="row">


        @foreach ($albums as $album)
        <div class="col-lg-3 offset-lg-1  col-sm-5 offset-sm-1">
            <div class="js-single-album-item text-center">
              <div class="js-album-thumbnail">
                <img src="{{ asset('assets/images/album/thumbnail2.jpeg') }}" alt="thumbnail1">
                <div class="js-popup-album-cover">
                  <a href="/albums/{{ $album->id }}"><i class="fa fa-plus"></i></a>
                </div>
                <div class="album-cd">
                  <img src="{{ asset('assets/images/album/cd.png') }}" alt="Album CD">
                </div><!-- Album CD -->
                <ul class="app-button list-inline"><!-- app-button -->
                  <li><a href="#"><i class="fa fa-play"></i><p><span>Available on</span>App Store</p></a></li>
                  <li><a href="#"><i class="fa fa-apple"></i><p><span>Available on</span>App Store</p></a></li>
                </ul><!-- App-button -->
              </div>
                <div class="album-content">
                  <h4 class="text-uppercase"><a href="album-single.html">{{ $album->name }}</a></h4>
                  <span class="primary-color">({{ $album->produced }})</span>
                </div>
            </div><!-- js-single-album-item -->
          </div>

        @endforeach

        <!-- col-lg -->

      </div><!-- row -->
    </div><!-- container -->
  </section><!-- Album Section End -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>

@stop
