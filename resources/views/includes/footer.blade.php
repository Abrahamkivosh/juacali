<footer class="js-footer-area has-color">
    <div class="js-footer-subscribe pt-100 pb-150 bg-dark has-color">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="section-title">
              <h2><span class="primary-color">Subscribe</span></h2>
              <p>Sign up for new releases to your inbox every month</p>
            </div><!-- section-title -->
          </div><!-- col-lg-5 -->
          <div class="col-lg-7">
            <form class="js-footer-subscribe-form">
              <div class="js-input-icon">
                <i class="fa fa-envelope-o icon"></i>
                <input type="email" placeholder="Email Address" required="">
              </div>
              <input type="submit" value="Subscribe" class="btn-primary">
            </form>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- js-footer-subscribe -->

    <div class="js-footer-section">
      <div class="container-pluid">
        <div class="js-instagram-feed pl-3 pr-3">
          <div class="js-feed-thumbnail">
            <img src=" {{asset('assets/images/igfeed/1.jpg')}} " alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>
          <div class="js-feed-thumbnail">
            <img src="assets/images/igfeed/2.jpg" alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>
          <div class="js-feed-thumbnail">
            <img src="assets/images/igfeed/3.jpg" alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>

          <div class="js-feed-thumbnail">
            <img src="{{ asset('assets/images/igfeed/5.jpg')}}" alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>
          <div class="js-feed-thumbnail">
            <img src="{{ asset('assets/images/igfeed/6.jpg')}}" alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>
          <div class="js-feed-thumbnail">
            <img src="{{ asset('assets/images/igfeed/7.jpg')}}" alt="Ig Feed thumbnail">
            <a href="#" class="btn btn-alt js-igfeed-btn">@sajibdesigns</a>
          </div>

        </div><!-- .row -->
      </div><!-- Container Fluid -->
      <div class="container">
        <div class="row mb-90">
          <div class="col-lg-3 col-sm-8">
            <div class="js-footer-widget">
              <h1 class="js-footer-logo"><a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="Footer Logo"></a></h1>
              <p>We provide great quality of Hip Hop music, dj party, rock music and music festivals. A man should hear a little music, read a little poetry.</p>
             <ul class="social-icon list-inline">
               <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
               <li><a href="#"><i class="fa fa-spotify"></i></a></li>
               <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             </ul>
            </div>
          </div><!-- col end -->
          <div class="col-lg-2 col-sm-4">
            <div class="js-footer-widget">
              <h5>Download</h5>
              <ul class="app-button"><!-- app-button -->
                <li><a href="#"><i class="fa fa-play"></i><p><span>Available on</span>App Store</p></a></li>
                <li><a href="#"><i class="fa fa-apple"></i><p><span>Available on</span>App Store</p></a></li>
                <li><a href="#"><i class="fa fa-amazon"></i><p><span>Available on</span>App Store</p></a></li>
              </ul>
            </div>
          </div><!-- col end -->
          <div class="col-lg-4 col-sm-6">
            <div class="js-footer-widget">
              <h5>Recent Post</h5>
              <ul>

                @foreach ($users as $user)

                <li class="js-primary-border-bottom-gradient">
                    <div class="js-widget-recent-post mb-3 pb-3">
                      <div class="js-widget-post-thumbnail">
                        <a href="#"><img src=" {{asset('assets/images/blog/footer-widget-thumbnail.jpg')}} " alt="Thumbnail"></a>
                      </div>
                      <div class="js-widget-post--content">
                        <p><a href="#">Lorem ipsum dolor sit, consectetur adipisicing elit. Rerum amet.</a></p>
                        <span class="js-post-date">20 June  2018</span>
                      </div>
                    </div>
                  </li>

                @endforeach


              </ul>
            </div><!-- js-footer-widget -->
          </div><!-- col end -->
          <div class="col-lg-3 col-sm-6">
            <div class="js-footer-widget">
              <h5>Contact Info</h5>
              <ul class="js-contact-info">
                <li><i class="fa fa-map-marker"></i><p><span>ADDRESS:</span>55 Green Tower, Street Name New York City, USA</p></li>
                <li><i class="fa fa-phone"></i><p><span>Phone:</span> +88 0191 444 137</p></li>
                <li><i class="fa fa-envelope"></i><p><span>Email: </span>nfo@themerocket.com</p></li>
                <li><i class="fa fa-globe"></i><p><span>WEbsite: </span>themerocket.com</p></li>
              </ul>
            </div>
          </div><!-- col end -->
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="js-copyright">© Copyright 2018 <a href="../../../../themeforest.net/user/pixelthemez/portfolio.html" target="_blank" class="primary-color">ThemeRocket</a> All Rights Reserved.</p>
          </div>
        </div><!-- row end -->
      </div><!-- container -->
    </div><!-- footer-area -->
  </footer> <!-- footer End-->
