@extends('layouts.app1')

@section('content')

<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>UPCOMING EVENTS</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="js-event-ticket album-bg2 has-color bg-dark">
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
                  <div class="col-lg-3 offset-lg-1 col-sm-5 col-7">
                    <p>ANATOLIA ROCK FEST</p>
                  </div> 
                  <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                    <p>Poland</p>
                  </div>
                  <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                    <a class="btn btn-primary btn-sm" href="#">Sold Out</a>
                  </div>
                </div> 
              </li><!-- li End -->
              <li>
                <div class="row">
                  <div class="col-lg-1 col-sm-2 col-2 pr-0">
                    <p>February 1</p>
                  </div>
                  <div class="col-lg-3 offset-lg-1 col-sm-5 col-7">
                    <p>UNESCO - ROCK AND MUSIC</p>
                  </div> 
                  <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                    <p>Aydin</p>
                  </div>
                  <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                    <a class="btn btn-primary btn-sm" href="#">Buy</a>
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
                    <a class="btn btn-primary btn-sm" href="#">Free</a>
                  </div>
                </div> 
              </li><!-- li End -->
              <li>
                <div class="row">
                  <div class="col-lg-1 col-sm-2 col-2 pr-0">
                    <p>April 01</p>
                  </div>
                  <div class="col-lg-3 offset-lg-1 col-sm-5 col-7">
                    <p>ROCK'N COKE AZERI FEST</p>
                  </div> 
                  <div class="col-lg-1 offset-lg-2 col-sm-3 col-3">
                    <p>Finland</p>
                  </div>
                  <div class="col-lg-2 offset-lg-2 col-sm-2 text-center">
                    <a class="btn btn-primary btn-sm" href="#">Buy</a>
                  </div>
                </div> 
              </li><!-- li End -->
            </ul>
          </div><!-- js-event-content -->
        </div><!-- col-lg-12 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!--  Event Ticket -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
@endsection