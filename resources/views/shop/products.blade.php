@extends('layouts.app1')

@section('content')


<section class="js-breadcrumb-area">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center has-color">
          <div class="js-breadcrumb-content">
            <h2>Music_Shop</h2>
          </div>
        </div>
      </div>
    </div>
  </section><!-- js-breadcrumb-area -->

  <section class="js-product-area js-shop bg-dark pb-0">
    <div class="container">
      <div class="row align-self-center">
        <div class="col-lg-12 has-color">
          <div class="shop-header overlay"> 
            <h3>HUGE COLLECTION FOR</h3>
            <h2>2018</h2> 
          </div>
        </div>
      </div><!-- row -->
      <div class="js-shop-main.content">
        <div class="row">
          <div class="col-lg-3">
            <aside class="js-shop-widget">
              <div class="widget bg-white">
                <h2 class="logo"><a href="#"><img alt="Logo" src="assets/images/logo.png"></a></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                <div class="text-right js-widget-read-more">
                  <a href="#" class="primary-color">Read More</a>
                </div>
              </div><!-- widget --> 
              <div class="widget js-post-catogories bg-white"> 
                <div class="shape primary-bg"></div>
                <h3>Product category.</h3>
                <ul>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Classic <span>8 367</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Dj <span>2 003</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Hip Hop <span>605</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Lifestyle <span>107</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Shop <span>82</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Photography <span>30</span></a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i> Tour <span>6</span></a></li>
                </ul>    
              </div><!-- widget -->  
              <div class="widget bg-white">
                <img alt="add" src="assets/images/blog/widget-add.png">
              </div><!-- widget -->
              <div class="widget bg-white">
               <div class="js-widget-social-icon">
                 <ul class="list-inline">
                   <li>
                     <a href="#">
                       <i><img alt="facebook" src="assets/images/blog/facebook.png"></i>
                       <span class="js-follower">5k</span> 
                       <span>Follow</span>      
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i><img alt="twitter" src="assets/images/blog/twitter.png"></i>
                       <span class="js-follower">999</span> 
                       <span>Like</span>      
                     </a>
                   </li>
                   <li>
                     <a href="#">
                       <i><img alt="ig" src="assets/images/blog/ig.png"></i>
                       <span class="js-follower">6k</span> 
                       <span>Follow</span>      
                     </a>
                   </li>
                 </ul>
               </div>
              </div>
            </aside><!-- aside -->
          </div><!-- col-lg-3 -->

          <div class="col-lg-9 pb-5">
            <div class="js-shop-content bg-white">
              <div class="js-shop-title">
                <div class="row">
                  <div class="col-lg-4 d-lg-block d-sm-none">
                    <h4>Music Product List</h4>
                  </div><!-- col-lg-4 -->
                  <div class="col-lg-6 col-sm-8">
                    <h4 class="js-catagory-title">Short By</h4>
                    <div class="js-shop-catagory-select">
                      <select>
                        <option>Select Catagories:</option>
                        <option value="1">Classic</option>
                        <option value="2"> Hip Hop </option>
                        <option value="3"> Lifestyle </option>
                        <option value="4"> Photography </option>
                      </select>
                    </div> <!-- custom-select -->
                  </div><!-- col-lg-4 -->
                  <div class="col-lg-2 col-sm-4 text-lg-right text-center">

                    <ul class="nav nav-tabs js-product-grid" id="myTab" role="tablist">
                      <li><a class="active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true">
                        <i class="pe-7s-keypad"></i></a> 
                      </li>
                      <li><a class="" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">
                        <i class="pe-7s-menu"></i></a>
                      </li>
                    </ul>
                  </div><!-- col-lg-4 -->
                </div><!-- row -->
              </div><!-- js-shop-title -->
              
              <div class="tab-content" id="myTabContent">
                <div  class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product1.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product3.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product3.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product4.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product5.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product6.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product7.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product8.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product9.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product10.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product1.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product2.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product3.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product4.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4 col-sm-6">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product5.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- row -->
                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product1.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src=" {{asset('assets/images/product/product3.jpg')}} " alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src=" {{asset('assets/images/product/product3.jpg')}} " alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product4.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product5.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product6.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product7.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product8.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product9.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product10.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product1.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product2.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product3.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product4.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                      <div class="js-single-product">
                        <div class="js-product-thumbnail">
                          <img src="assets/images/product/product5.jpg" alt="product Thubmnail">
                          <div class="js-product-price">
                            <h6>$57</h6>
                          </div>
                          <div class="ja-cart-icon">
                            <ul>
                              <li><a href="#"><i class="fa fa-shopping-cart "></i></a></li>
                              <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                          </div>
                          <div class="js-add-to-cart">
                            <a href="#" class="btn btn-light btn-sm">add to cart</a>
                          </div>
                        </div>
                        <div class="js-product-content">
                          <h6>Kobita</h6>
                          <p>Moner Jala</p>
                        </div>
                      </div><!-- js-single-product -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- row -->
              </div><!-- row -->
            </div><!-- js-shop-content -->
          </div><!-- col-lg-9 -->
        </div><!-- row -->
      </div><!-- row -->
    </div><!--container -->
  </section><!-- js-product-details-area -->
 
  <span class="scrolltop"><i class="pe-7s-angle-up"></i></span>


@endsection