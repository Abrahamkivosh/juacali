
@extends('layouts.app1')

@section('content')

  <section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Single Album</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="album-area album-bg2 has-color">
    <div class="container">
      <div class="section-title text-center mb-50">
        <h2>ABOUT <span class="primary-color">ALBUMS</span></h2>
      </div><!-- section-title -->

        <div class="row">
          <div class="col-lg-4 col-sm-5">
            <div class="js-latest-album-item">
              <div class="js-latest-album-thumbnails">
                <div class="js-latest-album-thumbnail">
                  <img src="{{ asset('assets/images/album/latest-album-item.png') }}" alt="album-thumbnail">
                  <div class="js-latest-album-icon">
                    <a href="#"><img src="{{ asset('assets/images/play-icon.png') }}" alt="icon"></a>
                  </div>
                  <p>Next Album</p>
                </div>
                <div class="js-latest-album-title">
                  <h4>Despacito</h4>
                  <p><span class="primary-color">Artist:</span> Luis Fonsi  |  <span class="primary-color">Release Date:</span> Jan 10, 2019
                  <span class="primary-color">Genre:</span> Funk</p>
                  <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>


                  <div class="js-app-availabilaty">
                    <h4 class="text-uppercase">Available On</h4>
                    <a href="#" class="btn btn-sm btn-alt">iTunes</a>
                    <a href="#" class="btn btn-sm btn-primary">Google Play</a>
                  </div>

                  <h4 class="mb-2">Share</h4>
                  <div class="social-icon">
                   <ul class="list-inline">
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                     <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                   </ul>
                </div>
                </div>
              </div><!-- js-latest-album-thumbnails -->
            </div>
          </div><!-- col-lg-4 -->
          <div class="col-lg-8 col-sm-7">

            <div class="js-audio-playlist scroll">
              <div class="js-audio-playlist-item active">
                <ul class="list-inline">
                  <li><h5>Despacito <span>- Luis Fonsi</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Perfect Places<span> - Lorde</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Why? <span>- Dj Ashraf</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>High <span>- Raper Tomal</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>The Zing <span>- Luchi</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                   </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Smooth <span>- Florida Georgia</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Smooth <span>- Florida Georgia</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Smooth <span>- Florida Georgia</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
              <div class="js-audio-playlist-item">
                <ul class="list-inline">
                  <li><h5>Smooth <span>- Florida Georgia</span></h5> </li>
                  <li class="float-right">
                    <div class="icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                      </ul>
                  </div>
                </li>
                </ul>
                <audio controls="" preload="auto">
                      <source src="assets/images/horse.mp3">
                </audio>
              </div>  <!-- js-audio-playlist-item -->
            </div><!-- js-audio-playlist -->

            <div class="js-new-album pt-5">
              <h4 class="text-uppercase">Latest album</h4>
              <div class="row">
                <div class="col-lg-6">
                  <img src="{{ asset('assets/images/album/single-album-thumbnail.jpg') }}" alt="music Latest album">
                </div>
                <div class="col-lg-6">
                  <img src="{{ asset('assets/images/album/single-album-thumbnail2.jpg') }}" alt="music Latest album">
                </div>
              </div>
            </div>
          </div><!-- col-lg-8 -->
        </div><!-- row -->
    </div><!-- container -->
  </section><!-- Album Section End -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
@stop

