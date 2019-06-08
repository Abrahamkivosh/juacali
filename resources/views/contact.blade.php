@extends('layouts.app1')

@section('content')


<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Contact</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="js-contact-area has-color bg-dark">
    <div class="container">
      <div class="section-title mb-50">
        <h2>Contact informations.</h2>  
        <p>Aliquam vestibulum morbi blandit cursus risus. Velit dignissim sodales Condimentum ..</p>
      </div><!-- section-title -->
      <div class="row">
        <div class="col-lg-3 col-sm-6"> 
           <div class="js-contact-info-item">
             <h4>Find us.</h4>
             <p>55 East Town Avenue, London, UK</p>
           </div>
        </div><!-- col-lg-3 -->
        <div class="col-lg-3 col-sm-6"> 
           <div class="js-contact-info-item">
             <h4>Contact us.</h4>
             <p>Phone: 88 01916 444 137</p>
             <p>Email:  support@themerocket.com</p>
           </div>
        </div><!-- col-lg-3 -->
        <div class="col-lg-3 col-sm-6"> 
           <div class="js-contact-info-item">
             <h4>Follow us.</h4>
             <ul class="social-icon-without-bg list-inline">
                 <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                 <li><a href="#"><i class="fa fa-spotify"></i></a></li> 
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              </ul>
           </div>
        </div><!-- col-lg-3 -->
        <div class="col-lg-3 col-sm-6"> 
           <div class="js-contact-info-item">
             <h4>Work time.</h4>
             <p>Mon to Fri: 9.00 am - 8.00 pm</p>
             <p>Sat: 10.00 am - 6.00 pm</p>
           </div>
        </div><!-- col-lg-3 -->
      </div><!-- row -->
      <div class="row">
          <div class="col-lg-12">
            <div id="google-map"></div>
          </div>
      </div><!-- row -->
      <div class="js-contact-form">
        <div class="row">
          <div class="col-lg-5">
            <div class="shape primary-bg"></div>
            <h4>If you are interested in working with us, please get in touch.</h4>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <textarea name="meassage" placeholder="Write your message here"></textarea>
            <div class="js-contact-form-input">
              <label>What is your name? *<span class="primary-color">*</span></label>
              <input type="text" name="name" placeholder="David Mark" required="">
            </div>
            <div class="row">
              <div class="col-md-6">  
                <input type="email" name="email" placeholder="Your email address *" required=""> 
              </div>
              <div class="col-md-6">  
                <input type="submit" class="btn btn-primary" value="send a message">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- container -->
  </section><!-- Contact Area -->
  
  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>



@endsection