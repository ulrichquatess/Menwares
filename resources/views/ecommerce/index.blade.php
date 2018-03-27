@extends('layouts.main')
@section('content')
	<!-- Full Width Slider -->
      <div class="container-fluid mb-3">
        <div class="row">
          <div class="owl-carousel owl-theme home-slider">
            <div class="owl-cover" data-src="{{ asset('men/images/slider/1.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
              <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-8 col-lg-6 text-center">
                    <div class="animated d-none d-sm-block" data-animate="slideInRight">
                      <h1 class="bg-theme text-white d-inline-block px-2">TOP BRANDS</h1>
                    </div>
                    <div class="animated" data-animate="bounceInUp">
                      <h2 class="text-white font-weight-bold display-4 d-inline-block" remove-class-on-xs="display-4 font-weight-bold">MINIMUM<br/>30% - 70% OFF</h2>
                    </div>
                    <a href="products.html" class="btn btn-theme animated delay-1" data-animate="fadeInDown" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('men/images/slider/2.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
              <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-end">
                  <div class="col col-sm-6 text-center">
                    <div class="animated" data-animate="lightSpeedIn">
                      <h1 class="bg-dark display-4 text-white d-inline-block px-2" remove-class-on-xs="display-4">T-LOVE</h1>
                    </div>
                    <div class="animated" data-animate="rotateIn">
                      <h3 class="d-none d-sm-inline-block" add-class-on-xl="font-weight-bold">
                        A COMPLETE SHOPPING GUIDE ON WHAT AND HOW TO WEAR THE BEST T-SHIRTS
                      </h3>
                      <h5 class="d-inline-block d-sm-none" add-class-on-xs="text-white">
                        A COMPLETE SHOPPING GUIDE
                      </h5>
                    </div>
                    <a href="products.html" class="btn btn-theme animated delay-1" data-animate="fadeInUp" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('men/images/slider/3.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
              <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                  <div class="col text-center">
                    <div class="animated d-none d-lg-block" data-animate="zoomIn">
                      <h1 class="bg-warning d-inline-block px-2">YOUR PRAYERS ANSWERED!</h1>
                    </div>
                    <div class="animated" data-animate="bounceInDown">
                      <h2 class="display-4 bg-light d-inline-block px-2" remove-class-on-xs="display-4">UPTO 70% OFF</h2>
                    </div>
                    <div class="animated d-none d-sm-block" data-animate="slideInLeft">
                      <h1 class="bg-dark text-white d-inline-block px-2">+ EXTRA 10% OFF</h1>
                    </div>
                    <a href="products.html" class="btn btn-theme animated delay-1" data-animate="flipInX" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('men/images/slider/4.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
              <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-between" remove-class-on-xs="justify-content-between">
                  <div class="d-none d-sm-block col-sm-5 text-center">
                    <div class="animated text-danger" data-animate="slideInRight">
                      <i class="fa fa-truck fa-5x"></i>
                    </div>
                    <div class="animated delay-1" data-animate="bounceInUp">
                      <h3 class="d-none d-sm-inline-block bg-white p-2" add-class-on-xl="font-weight-bold">FREE SHIPPING</h3>
                    </div>
                    <div class="animated delay-2" data-animate="rotateInDownRight">
                      <h2 class="d-none d-sm-inline-block px-2 bg-dark text-white">ON ALL ORDERS !</h2>
                    </div>
                  </div>
                  <div class="d-none d-sm-block col-sm-5 text-center">
                    <div class="animated delay-3 text-info" data-animate="fadeInLeft">
                      <i class="fa fa-phone fa-5x"></i>
                    </div>
                    <div class="animated delay-4" data-animate="bounceInDown">
                      <h2 class="d-none d-sm-inline-block px-2 bg-white">24 HOURS</h2>
                    </div>
                    <div class="animated delay-5" data-animate="lightSpeedIn">
                      <h2 class="d-none d-sm-inline-block px-2 bg-dark text-white">ONLINE SUPPORT</h2>
                    </div>
                  </div>
                  <div class="col d-sm-none text-center">
                    <div class="animated" data-animate="fadeInDown">
                      <h6 class="bg-white d-inline-block px-2">FREE SHIPPING</h6>
                    </div>
                    <div class="animated delay-1" data-animate="fadeInDown">
                      <h4 class="bg-dark text-white d-inline-block px-2">ON ALL ORDERS</h4>
                    </div>
                    <a href="products.html" class="btn btn-theme animated delay-2" data-animate="fadeInUp" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Top Categories Thumbnail -->
      <div class="container">
        <div class="row" add-class-on-xs="no-gutters">
          <div class="col-12">
            <div class="title text-center"><span>Top Categories</span></div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card overlay-thumbnail mb-sm-4">
              <img src="{{ asset('men/images/product/type-polo.jpg')}}" alt="" class="card-img">
              <a href="products.html">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                  <div class="card-text">Polo T-Shirts</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card overlay-thumbnail mb-sm-4">
              <img src="{{ asset('men/images/product/type-round.jpg')}}" alt="" class="card-img">
              <a href="products.html">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                  <div class="card-text">Round Neck T-Shirts</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card overlay-thumbnail mb-sm-4">
              <img src="{{ asset('men/images/product/type-vneck.jpg')}}" alt="" class="card-img">
              <a href="products.html">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                  <div class="card-text">V Neck T-Shirts</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3 d-block d-md-none d-lg-block">
            <div class="card overlay-thumbnail mb-sm-4">
              <img src="{{ asset('men/images/product/type-hooded.jpg')}}" alt="" class="card-img">
              <a href="products.html">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                  <div class="card-text">Hooded T-Shirts</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Container -->
      <div class="container">

        <!-- Featured Products -->
        <div class="row equal-height" add-class-on-xs="no-gutters">
          <div class="col-12"><div class="title"><span>Featured Products</span></div></div>
           @foreach($product as $product)
          <div class="col-xl col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card card-product">
              <div class="img-wrapper">
                <a href="{{ url('singleproduct/'.$product->slug)}}"><img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap"></a>
                <div class="tools tools-bottom" data-animate-in="fadeInUp" data-animate-out="fadeOutDown">
                  <div class="btn-group" role="group" aria-label="card-product-tools">
                    <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                    <button class="btn btn-link btn-sm">Add to Cart</button>
                    <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                  </div>
                </div>
                <span class="badge badge-info custom-badge arrowed-left label label-top-right">New Arrival</span>
              </div>
              <div class="card-body">
                <p class="card-text"><a href="{{ url('singleproduct/'.$product->slug)}}">{{ $product->name }}</a></p>
                <ul class="card-text list-inline">
                  <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                  <li class="list-inline-item"><span class="price">{{ $product->presentPrice() }}</span></li>
                  <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-success custom-badge arrowed-left">-10%</span></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- Top Brands -->
        <div class="row mb-4">
          <div class="col-12">
            <div class="title"><span>Top Brands</span></div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 list-menu">
            <div class="list-group">
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-renren"></i> Cras justo odio</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-resistance"></i> Dapibus ac facilisis in</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-safari"></i> Morbi leo risus</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-scribd"></i> Porta ac consectetur ac</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-sellsy"></i> Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 list-menu">
            <div class="list-group">
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-share-alt"></i> Cras justo odio</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-share-alt-square"></i> Dapibus ac facilisis in</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-shirtsinbulk"></i> Morbi leo risus</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-simplybuilt"></i> Porta ac consectetur ac</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-skyatlas"></i> Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 list-menu d-none d-md-block">
            <div class="list-group">
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-skype"></i> Cras justo odio</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-slack"></i> Dapibus ac facilisis in</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-slideshare"></i> Morbi leo risus</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-snapchat"></i> Porta ac consectetur ac</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-snapchat-ghost"></i> Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 list-menu d-none d-lg-block">
            <div class="list-group">
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-snapchat-square"></i> Cras justo odio</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-soundcloud"></i> Dapibus ac facilisis in</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-spotify"></i> Morbi leo risus</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-stack-exchange"></i> Porta ac consectetur ac</a>
              <a href="products.html" class="list-group-item list-group-item-action"><i class="fa fa-fw fa-stack-overflow"></i> Vestibulum at eros</a>
            </div>
          </div>
        </div>
       <!-- Popular Products -->
        <div class="row">
          <div class="col-12"><div class="title"><span>Popular Products</span></div></div>
          <div class="col pl-sm-0 pr-sm-0">
            <div class="owl-carousel owl-theme product-slider">
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck1.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-bottom" data-animate-in="fadeInDown" data-animate-out="flipOutX">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm">Add to Cart</button>
                        <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-primary custom-badge arrowed-right label label-top-left">Extra Sale</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Gas Mustard Yellow Solid Slim Fit</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-info custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <a href="#" class="d-none d-sm-inline-block">(6 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck2.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-bottom" data-animate-in="zoomIn" data-animate-out="fadeOutLeft">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm">Add to Cart</button>
                        <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-secondary custom-badge arrowed-right label label-top-left">Best Offer</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Basics Black Striped</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-warning custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <a href="#" class="d-none d-sm-inline-block">(5 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck3.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-right" data-animate-in="flipInX" data-animate-out="flipOutY">
                      <div class="btn-group-vertical" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-sm-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm"><i class="fa fa-shopping-cart"></i></button>
                        <button class="btn btn-link btn-sm"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-success custom-badge arrowed-right label label-top-left">Special Discount</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Superdry Blue Solid Slim Fit</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-danger custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <a href="#" class="d-none d-sm-inline-block">(4 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck5.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-right" data-animate-in="slideInRight" data-animate-out="slideOutUp">
                      <div class="btn-group-vertical" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-sm-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm"><i class="fa fa-shopping-cart"></i></button>
                        <button class="btn btn-link btn-sm"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-warning custom-badge arrowed-right label label-top-left">Best Price</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Gritstones Olive Solid</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-secondary custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <a href="#" class="d-none d-sm-inline-block">(2 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck4.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-bottom" data-animate-in="rotateInDownLeft" data-animate-out="rotateOutDownLeft">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm">Add to Cart</button>
                        <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-danger custom-badge arrowed-left label label-top-right">Buy 1 Get 1 Free</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Celio Brown Textured</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-success custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
                      <a href="#" class="d-none d-sm-inline-block">(3 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="detail.html"><img class="card-img-top" src="{{ asset('men/images/product/vneck6.jpg')}}" alt="Card image cap"></a>
                    <div class="tools tools-bottom" data-animate-in="lightSpeedIn" data-animate-out="zoomOut">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                        <button class="btn btn-link btn-sm">Add to Cart</button>
                        <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                      </div>
                    </div>
                    <span class="badge badge-info custom-badge arrowed-left label label-top-right">Limited Offer</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="detail.html">Numero Uno White Striped Regular Fit</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">$13.50</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-primary custom-badge arrowed-left">-10%</span></li>
                    </ul>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <a href="#" class="d-none d-sm-inline-block">(1 reviews)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Our Clients -->
        <div class="row">
          <div class="col-12"><div class="title text-center"><span>Our Clients</span></div></div>
          <div class="col">
            <div class="owl-carousel owl-theme brand-slider">
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand1.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand2.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand3.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand4.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand5.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand1.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand2.png')}}" alt="Card image cap"></a>
                </div>
              </div>
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a href="index.html"><img class="card-img-top" src="{{ asset('men/images/brand/brand3.png')}}" alt="Card image cap"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection