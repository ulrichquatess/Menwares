@extends('layouts.main')
@section('content')
  <!-- This part yere returns the success Message if product was added to the cart -->
                @if(session()->has('success_message'))
                 <div class="alert alert-success">
                  {{ session()->get('success_message')}}
                 </div>
                 @endif

                 @if(count($errors) > 0)
                   <div class="alert alert-danger">
                     <ul>
                       @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                     </ul>
                   </div>
                 @endif  
              <!-- End Of Success Message -->
      <div class="container-fluid mb-3">
        <div class="row">
          <div class="owl-carousel owl-theme home-slider">
            <div class="owl-cover" data-src="{{ asset('storage/slides/slide1.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
              <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                  <div class="col-8 col-lg-6 text-center">
                    <div class="animated d-none d-sm-block" data-animate="slideInRight">
                      <h1 class="bg-theme text-white d-inline-block px-2">TOP BRANDS</h1>
                    </div>
                    <div class="animated" data-animate="bounceInUp">
                      <h2 class="text-white font-weight-bold display-4 d-inline-block" remove-class-on-xs="display-4 font-weight-bold">MINIMUM<br/>30% - 70% OFF</h2>
                    </div>
                    <a href="{{ route('product.index') }}" class="btn btn-theme animated delay-1" data-animate="fadeInDown" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('storage/slides/slide2.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
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
                    <a href="{{ route('product.index') }}" class="btn btn-theme animated delay-1" data-animate="fadeInUp" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('storage/slides/slide3.png')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
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
                    <a href="{{ route('product.index') }}" class="btn btn-theme animated delay-1" data-animate="flipInX" add-class-on-xs="btn-sm">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-cover" data-src="{{ asset('storage/slides/slide4.jpg')}}" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="450px">
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
                    <a href="{{ route('product.index') }}" class="btn btn-theme animated delay-2" data-animate="fadeInUp" add-class-on-xs="btn-sm">Shop Now</a>
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
          @foreach($categories as $category)
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card overlay-thumbnail mb-sm-4">
              <img src="{{ asset('storage/'.$category->image) }}" alt="" class="card-img">
              <a href="{{ url('singleproduct/'.$category->slug)}}">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                  <div class="card-text">{{ $category->name }}</div>
                </div>
              </a>
            </div>
          </div>
          @endforeach
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
                  <form action="{{ route('cart.store')}}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->name }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <input type="hidden" name="size" value="{{ $product->size }}">
                  <div class="btn-group" role="group" aria-label="card-product-tools">
                    <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"></button>
                    <button class="btn btn-link btn-sm">Add to Cart</button>
                    <button class="btn btn-link btn-sm d-none d-md-inline-block"></button>
                  </div>
                </form>
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

       <!-- Popular Products -->
        <div class="row">
          <div class="col-12"><div class="title"><span>Popular Products</span></div></div>
          <div class="col pl-sm-0 pr-sm-0">
            <div class="owl-carousel owl-theme product-slider">
              @foreach($dresses as $product)
              <div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="{{ url('singleproduct/'.$product->slug)}}"><img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap"></a>
                    <div class="tools tools-bottom" data-animate-in="fadeInDown" data-animate-out="flipOutX">
                      <form action="{{ route('cart.store')}}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->name }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <input type="hidden" name="size" value="{{ $product->size }}">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                        <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"></button>
                        <button class="btn btn-link btn-sm">Add to Cart</button>
                        <button class="btn btn-link btn-sm d-none d-md-inline-block"></button>
                      </div>
                    </form>
                    </div>
                    <span class="badge badge-primary custom-badge arrowed-right label label-top-left">Extra Sale</span>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><a href="{{ url('singleproduct/'.$product->slug)}}">{{ $product->name }}</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">{{ $product->presentPrice() }}</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-info custom-badge arrowed-left">-10%</span></li>
                    </ul>
                  </div>
                </div>
              </div>
             @endforeach
            </div>
          </div>
        </div>


        <!-- Our Clients -->
        <div class="row">
          <div class="col-12"><div class="title text-center"><span>Our Clients</span></div></div>
          <div class="col">
            <div class="owl-carousel owl-theme brand-slider">
              @foreach($client as $client)
              <div class="card">
                <div class="card-body py-2 px-0">
                  <a><img class="card-img-top" src="{{ asset('storage/'.$client->image) }}" alt="Card image cap"></a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
@endsection