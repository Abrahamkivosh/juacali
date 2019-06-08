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
           
  <section class="js-product-cart-area has-color bg-dark pb-0">
    <div class="container">
      <div class="js-product-cart"> 
        <div class="row">
          <div class="col-lg-12">
            <h3>Product informations.</h3>  
              <div class="js-product-cart-single-item">
                <div class="row">
                  <div class="col-lg-8">
                    <span>Product name</span>
                  </div>
                  <div class="col-lg-4">
                    <ul class="list-inline">
                      <li>Price</li>
                      <li>Quantity</li>
                      <li>Total</li>
                    </ul>
                  </div>
                </div><!-- row -->  
              </div>

              <div class="js-product-cart-single-item pb-5 pt-5">
                <div class="row">
                  <div class="col-lg-8 col-sm-5">
                    <div class="js-cart-item">
                      <div class="js-cart-item-item-thumbnail">
                        <img src=" {{asset('assets/images/product/cart1.jpg')}} " alt="cart thumbnail">
                      </div>
                      <div class="js-cart-item-content">
                        <h5>HipHop T-Shirt</h5>
                        <p>Color : <span class="primary-color">White</span></p>
                        <p>Size :<span class="primary-color"> XL</span></p> 
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-7">
                    <ul class="list-inline">
                      <li>$45.05</li>
                      <li><span class="btn btn-primary btn-sm no-border-radius">1</span></li>
                      <li><span>$45.05</span> <div><a href="#"><i class="fa fa-times"></i> </a>
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- row -->
              </div><!-- js-product-cart-single-item -->

              <div class="js-product-cart-single-item pb-5 pt-5">
                <div class="row">
                  <div class="col-lg-8 col-sm-5">
                    <div class="js-cart-item">
                      <div class="js-cart-item-item-thumbnail">
                        <img src=" {{asset('assets/images/product/cart2.jpg')}} " alt="cart thumbnail">
                      </div>
                      <div class="js-cart-item-content">
                        <h5>DJ Cap</h5>
                        <p>Color : <span class="primary-color">White</span></p>
                        <p>Size :<span class="primary-color"> XL</span></p> 
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-7">
                    <ul class="list-inline">
                      <li>$45.05</li>
                      <li><span class="btn btn-primary btn-sm no-border-radius">1</span></li>
                      <li><span>$45.05</span> <div><a href="#"><i class="fa fa-times"></i> </a>
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- row -->
              </div><!--  js-product-cart-single-item -->
          </div><!-- js-product-cart -->
        </div><!-- row -->
      </div><!-- js-product-cart -->
      <div class="js-product-shipping pt-5">
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <div class="js-shopping-update-cart">
                <a href="#" class="btn btn-alt no-border-radius">clear shopping cart</a>
                <a href="#" class="btn btn-primary no-border-radius">update shopping cart</a>
              </div>
            </div>   
            <div class="row">
              <div class="col-lg-6">
                <h3>calculate shipping</h3>
                <form action="#">
                  <input type="text" placeholder="United Kingdom (UK)">
                  <input type="text" placeholder="State / Country">
                  <input type="text" placeholder="Postcode / Zip">
                  <button type="submit" class="btn btn-primary no-border-radius">get a quote</button>
                </form>
              </div>
              <div class="col-lg-6">
                <h3>coupon discount</h3>
               <form action="#">
                  <span class="js-cupon-text primary-color">Enter your coupon code if you have one.</span>
                  <input type="text" placeholder="Enter your code here !">
                  <button type="submit" class="btn btn-primary no-border-radius">apply coupon</button> 
               </form>
              </div>
            </div>    
          </div><!-- col-lg-8 -->
          <div class="col-lg-4 text-lg-right">
            <a href="#" class="btn btn-primary no-border-radius">continue shopping</a>
            <div class="js-shopping-account">
              <h6>sub total <span>$126.00</span></h6>
              <h4>grand total     <span>$126.00</span></h4>
              <div class="js-checkout-button bb-2">
                <a href="#" class="btn btn-primary no-border-radius">proceed to checkout</a>
              </div>
              <span class="primary-color">Checkout with Mutilple Address</span>
            </div>
          </div><!-- col-lg-4 -->
        </div><!-- row -->
      </div><!-- js-product-shipping -->
    </div><!--container -->
  </section><!-- js-product-details-area -->
 
   <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>
   


@endsection