@extends('layouts.app1')

@section('content')


<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Shopping_CheckOut</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="js-product-checkout-area has-color bg-dark pb-0">
    <div class="container">
      <div class="border">
        <div class="js-product-checkout-content">
          <div class="row">
            <div class="col-lg-6">
              <h3>01. checkout method</h3>
              <div class="js-checkout-guest-register">
                <h4>check as a guest or register</h4>
                <span>Register with us for future convenience:</span>
                <ul>
                  {{--  <li><a href="#"><img class="mr-2" src="assets/images/user.png" alt="user">Checkt as guest</a></li>  --}}
                  <li><a href="/register"><img class="mr-2" src="{{ asset('assets/images/check.png') }}" alt="Check">Register</a></li>
                </ul>
                <h4>register and save time</h4>
                <span>Register with us for future convenience:</span>
                <span>Fast and easy check out Easy access to your order history and status</span>
                <a href="#" class="btn btn-primary no-border-radius">continue</a>
              </div>
            </div><!-- col-lg-6 -->
            <div class="col-lg-6">
              <div class="js-checkout-form">
                <h4>already registed ?</h4>
                <span>Please proceed to login page :</span>


                  <div class="w-100 mt-50">
                    <a href="//password/reset">Forgot Your Password ?</a>
                   <a href="/login"> <button type="submit" class="btn btn-primary no-border-radius float-right">Log in Page</button></a>
                  </div>
               <!-- form -->


              </div><!-- js-checkout-form -->
            </div><!-- col-lg-6 -->
          </div><!-- row -->
        </div><!-- js-product-checkout -->

        <div class="js-checkout-accordion">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    02. BILLING INFORMATION
                  </button>
                </h5>
              </div> <!-- card-header -->
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiuainable VHS.</p>
                </div>
              </div>
            </div><!-- Card Close-->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    03. SHIPPING INFORMATION
                  </button>
                </h5>
              </div> <!-- card-header -->
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it</p>
                  <p>squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</p>
                </div>
              </div>
            </div><!-- Card Close-->
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    04. SHIPPING METHOD
                  </button>
                </h5>
              </div> <!-- card-header -->
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,</p>
                  <p>craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven not heard of them accusamus labore sustainable VHS.</p>
                </div>
              </div>
            </div><!-- Card Close-->
            <div class="card">
              <div class="card-header" id="headingfour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                   05. PAYMENT INFORMATION
                  </button>
                </h5>
              </div><!-- card-header -->
              <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                <div class="card-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur </p>
                  <p>butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven not heard of them accusamus labore sustainable VHS.</p>
                </div>
              </div>
            </div><!-- Card Close-->
          </div> <!-- Accordion -->
        </div><!-- js-checkout-accordion -->
      </div><!-- border -->
    </div><!--container -->
  </section><!-- js-product-details-area -->

   <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>



@endsection
