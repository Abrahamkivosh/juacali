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

              {{--  <div class="js-product-cart-single-item pb-5 pt-5">
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
              </div><!-- js-product-cart-single-item -->  --}}
              <?php $total = 0 ?>
              @if (session('cart') && session('cart') !== null )

                    @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <div class="js-product-cart-single-item pb-5 pt-5">
                            <div class="row">
                              <div class="col-lg-8 col-sm-5">
                                <div class="js-cart-item">
                                  <div class="js-cart-item-item-thumbnail">
                                    <img src=" {{asset('assets/images/product/cart2.jpg')}} " alt="cart thumbnail">
                                  </div>
                                  <div class="js-cart-item-content">
                                    <h5>{{ $details['name'] }}</h5>
                                    <p>Color : <span class="primary-color">{{ $details['color'] }}</span></p>
                                    <p>Size :<span class="primary-color">{{ $details['size'] }}</span></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-7">
                                <ul class="list-inline">
                                  <li>KSh {{ $details['price'] }}</li>
                                  <li class="Quantity"><span >
                                        <input type="number" value="{{ $details['quantity'] }}" class="btn btn-primary btn-sm no-border-radius quantity" />
                                      </span></li>
                                  <li><span>Ksh {{ ($details['price']) * $details['quantity'] }}</span>

                                    <div class="actions" data-th="">
                                        <button id="update-cart" class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                            <button id="remove-from-cart" class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                    </div>

                                  </li>
                                </ul>
                              </div>
                            </div><!-- row -->
                          </div><!--  js-product-cart-single-item -->
                    @endforeach
              @endif






          </div><!-- js-product-cart -->
        </div><!-- row -->
      </div><!-- js-product-cart -->
      <div class="js-product-shipping pt-5">
        <div class="row">
          <div class="col-lg-8">


          </div><!-- col-lg-8 -->
          <div class="col-lg-4 text-lg-right">
            <a href="/shop" class="btn btn-primary no-border-radius">continue shopping</a>
            <div class="js-shopping-account">
              <h6>sub total <span>Ksh  {{ $total }}</span></h6>
              <h4>grand total     <span>Ksh  {{ $total }}</span></h4>
              <div class="js-checkout-button bb-2">
                <a href="/checkout" class="btn btn-primary no-border-radius">proceed to checkout</a>
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
@section('scripts')


    <script type="text/javascript">


        $("#update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("div").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection
