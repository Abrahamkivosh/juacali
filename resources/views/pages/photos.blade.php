@extends('layouts.app1')

@section('content')

<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Photo Gallery</h2>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- js-breadcrumb-area -->

  <section class="js-content-memories  has-color bg-dark">
    <div class="container-fluid">
      <div class="section-title text-center mb-50">
        <h2>TOURS <span class="primary-color">MEMORIES</span></h2>
        <p>A complete list of festivals and concerts to be held soon! You can can <span class="primary-color">watch our gallary</span>photo from here!</p>
      </div><!-- section-title -->

      <div class="js-gallary-list">

        <div class="row">

         @foreach ($photos as $photo)
         <div class="col">
            <div class="js-gallary-thumbnail">
              <a href="/storage/memories/{{ $photos->name }} " class="js-full-size-image">
                <img src="/storage/memories/{{ $photo->name }} " alt="gallary photo"></a>
            </div>
            <div class="js-gallary-thumbnail">
              <a href=" /storage/memories/{{ $photos->name }} " class="js-full-size-image">
                <img src=" /storage/memories/{{ $photos->name }} " alt="gallary photo"></a>
            </div>
          </div>
         @endforeach


        </div><!-- row -->

      </div>  <!-- js-gallary-list -->
    </div><!-- container -->
  </section><!-- js-content-memories -->

  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>

@endsection
