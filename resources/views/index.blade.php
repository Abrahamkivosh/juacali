
@extends('layouts.app1')

@section('content')
<div class="slider-area" id="home">
    <div class="slider-carousel owl-theme">
      <div class="single-slides"></div>
      <div class="single-slides2"></div>
      <div class="single-slides3"></div>
    </div> <!-- slider-carousel -->

<div class="js-info-album-player" id="js-info-album-player">
    <div class="container-fluid pr-0">
      <div class="row">
        <div class="col-lg-10 offset-lg-2 offset-sm-0">
          <div class="row">
            <div class="col-lg-12 dark-overlay">
              <div class="audio-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                      <div class="jp-gui jp-interface row">
                          <div class="col-lg-1 col-sm-2 pr-0">
                            <div class="jp-controls">
                                <button class="jp-previous" tabindex="0"><i class="fa fa-step-backward"></i></button>
                                <button class="jp-play" tabindex="0"><i class="fa fa-play"></i></button>
                                <button class="jp-next" tabindex="0"><i class="fa fa-step-forward"></i></button>
                            </div>
                          </div>
                          <div class="col-lg-2 col-sm-2 js-album-playing-text">
                            <a href="javascript:void(0);" id="playlist-text">
                                <div class="jp-now-playing flex-item">
                                    <div class="jp-track-name"></div>
                                    <div class="jp-artist-name"></div>
                                </div>
                            </a>
                          </div>
                          <div class="col-lg-2 col-sm-3">
                            <div class="jp-toggles">
                                <button id="playlist-toggle" class="jp-show-playlist" tabindex="0" title="Playlist"><i class="fa fa-music"></i>
                                </button>
                                <button class="jp-shuffle" tabindex="0" title="Shuffle">
                                    <i class="fa fa-random"></i>
                                </button>
                                <button class="jp-repeat" tabindex="0" title="Repeat"><i class="fa fa-exchange"></i>
                                </button>
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-5 jp-volume-controls">
                            <div class="">
                              <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>
                              <div class="jp-volume-bar">
                                  <div class="jp-volume-bar-value">
                                      <div class="bullet">
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-sm-2">
                            <div class="js-info-album-player-content float-right">
                              <span class="wpcf7-form-control-wrap Selectbox">
                                <select class="Wide wpcf7-form-control wpcf7-select" name="quality-selectbox" aria-invalid="true">
                                  <option value="0">Quality</option>
                                  <option value="1">HD</option>
                                  <option value="2">HIGH</option>
                                  <option value="3">MEDIUM</option>
                                  <option value="4">LOW</option>
                                </select>
                              </span>
                            </div><!-- js-info-album-player-content -->
                          </div>
                          <div class="col-lg-12">
                            <div class="jp-progress-container">
                                <div class="jp-time-holder">
                                    <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                    <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar">
                                            <div class="bullet">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>

                      </div>
                      <div id="playlist-wrap" class="jp-playlist">
                          <ul>
                              <li>&nbsp;</li>
                          </ul>
                      </div>
                      <div class="jp-no-solution">
                          <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="../../../../get.adobe.com/flashplayer/index.html" target="_blank">Flash plugin</a>.
                      </div>
                  </div>
                </div>
              </div><!-- audio-player -->
            </div><!-- col-lg-9 -->
          </div><!-- row -->
        </div><!-- col-lg-10 -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- js-info-album-player -->

  <div id="js-play-song" class="primary-bg has-color">
    <div class="js-song-list-thumbnail">
      <img src="{{ asset('assets/images/playlists/playlists-sm8.jpg') }}" alt="playlists">
    </div>
    <div class="js-song-list-content">
      <h6>Without You</h6>
      <span class="js-song-artist-name">Mushroom Records</span>
    </div>
    <div class="js-play-left-arrow">
      <span><i class="pe-7s-angle-right"></i></span>
    </div>
  </div><!-- js-play-song -->

  <div class="js-song-list primary-bg">
    <ul class="list-inline">
      <li><a href="#"><i class="pe-7s-download"></i><span>download now</span></a></li>
      <li><a href="#"><i class="pe-7s-like"></i><span>Add To Favourites now</span></a></li>
      <li><a href="#"><i class="pe-7s-musiclist"></i><span>Add To PlayList</span></a></li>
      <li><a href="#"><i class="pe-7s-share"></i><span>Share</span></a></li>
      <li class="js-play-right-arrow"> <i class="pe-7s-angle-left"></i></li>
    </ul>
  </div><!-- js-song-list -->
</div><!-- slider-area End-->

<section class="album-area album-bg has-color" id="album">
    <div class="container">
      <div class="section-title text-center mb-50">
        <h2>Featured <span class="primary-color">Albums</span></h2>
        <p>Check out my newest albums. You can easily purchase my music on
        <span class="primary-color">iTunes</span> or <span class="primary-color">Google Play</span></p>
      </div><!-- section-title -->
      <div class="row">
        <div class="col-lg-3 col-sm-5">
          <div class="js-single-album-item text-center">
            <div class="js-album-thumbnail">
              <img src="{{ asset('assets/images/album/thumbnail1.jpeg') }}" alt="thumbnail1">
              <div class="js-popup-album-cover">
                <a href="#"><i class="fa fa-plus"></i></a>
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
                <h4 class="text-uppercase"><a href="#">Ngeli Ya Genge</a></h4>
                <span class="primary-color">(December 2013)</span>
              </div>
          </div><!-- js-single-album-item -->
        </div><!-- col-lg -->
        <div class="col-lg-3 offset-lg-1 col-sm-5 offset-sm-1">
          <div class="js-single-album-item text-center">
            <div class="js-album-thumbnail">
              <img src="{{ asset('assets/images/album/thumbnail2.jpeg') }}" alt="thumbnail1">
              <div class="js-popup-album-cover">
                <a href="#"><i class="fa fa-plus"></i></a>
              </div>
              <div class="album-cd">
                <img src="assets/images/album/cd.png" alt="Album CD">
              </div><!-- Album CD -->
              <ul class="app-button list-inline"><!-- app-button -->
                <li><a href="#"><i class="fa fa-play"></i><p><span>Available on</span>App Store</p></a></li>
                <li><a href="#"><i class="fa fa-apple"></i><p><span>Available on</span>App Store</p></a></li>
              </ul><!-- App-button -->
            </div>
              <div class="album-content">
                <h4 class="text-uppercase"><a href="#">Tugenge Yajayo</a></h4>
                <span class="primary-color">(December 2008)</span>
              </div>
          </div><!-- js-single-album-item -->
        </div><!-- col-lg -->
        <div class="col-lg-3 offset-lg-1 col-sm-5">
          <div class="js-single-album-item text-center">
            <div class="js-album-thumbnail">
              <img src="{{ asset('assets/images/album/thumbnail3.jpeg') }}" alt="thumbnail1">
              <div class="js-popup-album-cover">
                <a href="#"><i class="fa fa-plus"></i></a>
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
                <h4 class="text-uppercase"><a href="#">Juacali Sekta</a></h4>
                <span class="primary-color">(October 2006)</span>
              </div>
          </div><!-- js-single-album-item -->
        </div><!-- col-lg -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- Album Section End -->


<section class="js-next-consert has-color">
  <div class="container  text-center">
    <div class="section-title text-center mb-50">
      <h2>NEXT SHOW COUNT DOWN</h2>
      <div class="shape primary-bg"></div>
    </div><!-- section-title -->
    <div class="js-concert-date-location text-center mb-4">
      <p class="lead"><i class="fa fa-calendar"></i>25 April, 2019</p>
      <p class="lead"><i class="fa fa-map-marker"></i>London, DIvision No. 63, Unorganize</p>
    </div>
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <div class='countdown' data-date="2028-01-01"></div>
      </div>
    </div>
    <a href="#" class="btn btn-alt">Register Now</a>
  </div>
</section>

<section class="js-event-ticket has-color bg-dark" id="event">
  <div class="container">
    <div class="section-title text-center mb-50">
      <h2>UPCOMING <span class="primary-color">EVENTS</span></h2>
      <p>A complete list of festivals and concerts to be held soon! You can buy the latest concert <span class="primary-color">tickets here!</span></p>
    </div><!-- section-title -->
    <div class="row">
      <div class="col-lg-12">
        <div class="js-event-content">
          <ul class="js-event-title">
            <li>
              <div class="row">
                <div class="col-lg-1 col-sm-2 col-3">
                  <p>Date</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-5 col-3">
                  <p>Venue</p>
                </div>
                <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                  <p>Location</p>
                </div>
                <div class="col-lg-2 offset-lg-2 col-sm-2 text-right col-3">
                  <p>Ticket</p>
                </div>
              </div>
            </li><!-- li End -->
          </ul>

          <ul>
            <li>
              <div class="row">
                <div class="col-lg-1 col-sm-2 col-2 pr-0">
                  <p>January 01</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-5 col-7 ">
                  <p>ANATOLIA ROCK FEST</p>
                </div>
                <div class="col-lg-1 offset-lg-2 col-sm-3 col-3 ">
                  <p>Poland</p>
                </div>
                <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                  <a href="#" class="btn btn-primary btn-sm">Sold Out</a>
                </div>
              </div>
            </li><!-- li End -->
            <li>
              <div class="row">
                <div class="col-lg-1 col-sm-2 col-2 pr-0">
                  <p>February 1</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-5 col-7 ">
                  <p>UNESCO - ROCK AND MUSIC</p>
                </div>
                <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                  <p>Aydin</p>
                </div>
                <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                  <a href="#" class="btn btn-primary btn-sm">Buy</a>
                </div>
              </div>
            </li><!-- li End -->
            <li>
              <div class="row">
                <div class="col-lg-1 col-sm-2 col-2 pr-0">
                  <p>March 01</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-5 col-7">
                  <p>THE DARKNESS (SPECIAL EVENT)</p>
                </div>
                <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                  <p>Swetzane</p>
                </div>
                <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                  <a href="#" class="btn btn-primary btn-sm">Free</a>
                </div>
              </div>
            </li><!-- li End -->
            <li>
              <div class="row">
                <div class="col-lg-1 col-sm-2 col-2 pr-0">
                  <p>April 01</p>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-5 col-7">
                  <p>ROCK COKE AZERI FEST</p>
                </div>
                <div class="col-lg-1 offset-lg-2 col-sm-2 col-3">
                  <p>Finland</p>
                </div>
                <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                  <a href="#" class="btn btn-primary btn-sm">Buy</a>
                </div>
              </div>
            </li><!-- li End -->
          </ul>
        </div><!-- js-event-content -->
      </div><!-- col-lg-12 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!--  js Event Ticket  -->

<section class="js-content-memories  pt-0 has-color bg-dark">
  <div class="container-fluid">
    <div class="section-title text-center mb-50">
      <h2>TOURS <span class="primary-color">MEMORIES</span></h2>
      <p>A complete list of festivals and concerts to be held soon! You can can<span class="primary-color"> watch our gallary</span> photo from here!</p>
    </div><!-- section-title -->
    <div class="js-gallary-list">
      <div class="row">
        <div class="col">
          <div class="js-gallary-thumbnail">
            <a href="assets/images/memoris/1.jpg" class="js-full-size-image"><img src="assets/images/memoris/1.jpg" alt="gallary photo"></a>
          </div>
          <div class="js-gallary-thumbnail">
            <a href="assets/images/memoris/3.jpg" class="js-full-size-image"><img src="assets/images/memoris/3.jpg" alt="gallary photo"></a>
          </div>
        </div>
        <div class="col">
          <div class="js-gallary-thumbnail">
            <a class="js-full-size-image" href="assets/images/memoris/2.jpg"><img src="assets/images/memoris/2.jpg" alt="gallary photo"></a>
          </div>
          <div class="js-gallary-thumbnail">
            <img src="{{ asset('assets/images/memoris/4.jpg') }}" alt="gallary photo">
            <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watchadd5.html?v=KAca7KQ9p-A">
                <img alt="Play" src="{{ asset('assets/images/video-image/play.png') }}"></a>
          </div>
        </div>
        <div class="col">
          <div class="js-gallary-thumbnail">
            <a class="js-full-size-image" href="{{ asset('assets/images/memoris/5.jpg') }}">
                <img src="{{ asset('assets/images/memoris/5.jpg') }}" alt="gallary photo"></a>
          </div>
        </div>
        <div class="col">
          <div class="js-gallary-thumbnail">
            <img src="{{ asset('assets/images/memoris/6.jpg') }}" alt="gallary photo">
            <a class="video-thumbnail1-popup js-video-popup" href="../../../../www.youtube.com/watchadd5.html?v=KAca7KQ9p-A">
                <img alt="Play" src="{{ asset('assets/images/video-image/play.png') }}"></a>
          </div>
          <div class="js-gallary-thumbnail">
            <a class="js-full-size-image" href="assets/images/memoris/8.jpg">
                <img src="{{ asset('assets/images/memoris/8.jpg') }}" alt="gallary photo"></a>
          </div>
        </div>
        <div class="col">
          <div class="js-gallary-thumbnail">
            <a class="js-full-size-image" href="{{ asset('assets/images/memoris/7.jpg') }}">
                <img src="{{ asset('assets/images/memoris/7.jpg') }}" alt="gallary photo"></a>
          </div>
          <div class="js-gallary-thumbnail">
            <a class="js-full-size-image" href="{{ asset('assets/images/memoris/9.jpg') }}">
                <img src="{{ asset('assets/images/memoris/9.jpg') }}" alt="gallary photo"></a>
          </div>
        </div>
      </div><!-- row -->
    </div>
  </div><!-- container -->
</section><!-- js-content-memories -->

<section class="album-area album-bg2 has-color">
    <div class="container">
      <div class="section-title text-center mb-50">
          <h2>Our Latest <span class="primary-color">Album</span></h2>
          <p>Check out my newest music albums. You can easily purchase our music albums on
          <span class="primary-color">iTunes</span> or <span class="primary-color">Google Play</span></p>
      </div><!-- section-title -->
      <div class="row">
        <div class="col-lg-4 offset-md-0 offset-lg-0 col-sm-5">
          <div class="js-latest-album-item">
            <div class="js-latest-album-thumbnails text-center">
              <div class="js-latest-album-thumbnail">
                <img alt="album-thumbnail" src="{{ asset('assets/images/album/latest-album-item.png') }}">
                <div class="js-latest-album-icon">
                  <a class="js-video-popup" href="../../../../www.youtube.com/watchadd5.html?v=KAca7KQ9p-A"><img alt="icon" src="assets/images/play-icon.png"></a>
                </div>
                <p>Next Album</p>
              </div>
              <div class="js-latest-album-title">
                <h4>Despacito</h4>
                <span>(2018 by Luis Fonsi)</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod</p>
                <a class="btn btn-primary" href="#">Buy $5.49</a>
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
        </div><!-- col-lg-8 -->
      </div><!-- row -->
    </div><!-- contaniner -->
</section><!--  Album area -->

<section class="js-singer-area bg-dark has-color" id="singer">
  <div class="container">
    <div class="section-title text-center mb-50">
      <h2>TALENTED <span class="primary-color">MEMBERS</span></h2>
      <p>Check out my newest music albums. You can easily purchase our music albums on
      <span class="primary-color">iTunes</span> or <span class="primary-color">Google Play</span></p>
    </div><!-- section-title -->
    <div id="js-singer-slider">
      <div class="js-singer-slider-item row">
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/1.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVID</a></h4>
              <p>Main Vocal</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/2.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">ZAVED RICHARD</a></h4>
              <p>Drummer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/3.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVI</a></h4>
              <p>Dj</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/4.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">SONIYA</a></h4>
              <p>Guitarist</p>
            </div>
          </div>
        </div>
      </div>  <!-- js-singer-slider-item -->
      <div class="js-singer-slider-item row">
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/1.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVID</a></h4>
              <p>Main Vocal</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/2.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">ZAVED RICHARD</a></h4>
              <p>Drummer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/3.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVI</a></h4>
              <p>Dj</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/4.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">SONIYA</a></h4>
              <p>Guitarist</p>
            </div>
          </div>
        </div>
      </div>  <!-- js-singer-slider-item -->
      <div class="js-singer-slider-item row">
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/1.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVID</a></h4>
              <p>Main Vocal</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/2.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">ZAVED RICHARD</a></h4>
              <p>Drummer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/3.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">DAVI</a></h4>
              <p>Dj</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="js-single-singer">
            <div class="js-singer-thumbnail">
              <img src="assets/images/singer/4.jpg" alt="Singer Thumbnail">
               <ul class="social-icon list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li>
                 <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                 <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="js-singer-content">
              <h4><a href="single-artist.html">SONIYA</a></h4>
              <p>Guitarist</p>
            </div>
          </div>
        </div>
      </div>  <!-- js-singer-slider-item -->
    </div> <!-- js-singer-slider -->
  </div><!-- container -->
</section><!-- js-singer-area End -->

<section class="js-blog-area  bg-dark  has-color" id="blog">
  <div class="container">
    <div class="section-title text-center mb-50">
      <h2>LATEST <span class="primary-color">NEWS</span></h2>
      <p>Check out my newest music albums. You can easily purchase our music albums on
      <span class="primary-color">iTunes</span> or <span class="primary-color">Google Play</span></p>
    </div><!-- section-title -->
    <div class="row">
      <div class="col-lg-4 col-sm-6">
         <div class="js-single-blog">
           <div class="js-blog-thumbnail">
             <img src="assets/images/blog/1.jpg" alt="Blog Thumbnail">
             <div class="js-blog-post-date">
               <p>02 SEPTEMBER 2018</p>
             </div>
           </div>
           <div class="js-blog-post-content has-color">
             <h4><a href="blog.html">Soniya makes dig at music.</a></h4>
             <p>We provide great quality of Hip Hop music, dj party, rock music and music festivals.</p>
           </div>
           <div class="js-blog-admin-reade-more">
             <ul class="list-inline">
               <li><a href="#"><img src="assets/images/blog/blog-author.png" alt="Blog Author"><b>By Lara</b></a></li>
               <li class="float-right"><a href="#">Read More</a></li>
             </ul>
           </div>
         </div>
      </div><!-- col-lg-4 -->
      <div class="col-lg-4 col-sm-6">
         <div class="js-single-blog">
           <div class="js-blog-thumbnail">
             <img src="assets/images/blog/2.jpg" alt="Blog Thumbnail">
             <div class="js-blog-post-date">
               <p>02 SEPTEMBER 2018</p>
             </div>
           </div>
           <div class="js-blog-post-content has-color">
             <h4><a href="blog.html">Soniya makes dig at music.</a></h4>
             <p>We provide great quality of Hip Hop music, dj party, rock music and music festivals.</p>
           </div>
           <div class="js-blog-admin-reade-more">
             <ul class="list-inline">
               <li><a href="#"><img src="assets/images/blog/blog-author.png" alt="Blog Author"><b>By Lara</b></a></li>
               <li class="float-right"><a href="#">Read More</a></li>
             </ul>
           </div>
         </div>
      </div><!-- col-lg-4 -->
      <div class="col-lg-4 col-sm-6">
         <div class="js-single-blog">
           <div class="js-blog-thumbnail">
             <img src="assets/images/blog/3.jpg" alt="Blog Thumbnail">
             <div class="js-blog-post-date">
               <p>02 SEPTEMBER 2018</p>
             </div>
           </div>
           <div class="js-blog-post-content has-color">
             <h4><a href="blog.html">Soniya makes dig at music.</a></h4>
             <p>We provide great quality of Hip Hop music, dj party, rock music and music festivals.</p>
           </div>
           <div class="js-blog-admin-reade-more">
             <ul class="list-inline">
               <li><a href="#"><img src="{{ asset('assets/images/blog/blog-author.png') }}" alt="Blog Author"><b>By Lara</b></a></li>
               <li class="float-right"><a href="#">Read More</a></li>
             </ul>
           </div>
         </div>
      </div><!-- col-lg-4 -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- js-blog-area End -->

<span class="scrolltop"><i class="pe-7s-angle-up"></i></span>


@stop

