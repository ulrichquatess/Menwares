<!DOCTYPE html>
<html lang="en">
  <!-- Built By Ulrich Quatess -->  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Home - MensWare</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('men/bootstrap/css/bootstrap.min.css')}}">

    <!-- Third Party CSS -->
    <link rel="stylesheet" href="{{ asset('men/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('men/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('men/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('men/css/owl.theme.default.min.css')}}">

    <!-- Mimity CSS -->
    <link rel="stylesheet" href="{{ asset('men/css/style.min.css')}}">
  </head>
  <body>

    <?php
      $settings = App\Social::findorFail(1);
      $categories = App\Category::all();
      $slug = App\Category::all();
    ?>

    <!-- Offcanvas Menu -->
    <nav class="offcanvas">
      <div class="offcanvas-content">
        <div id="list-menu" class="list-menu list-group" data-children=".sub-menu1">
          <a href="/"><i class="fa fa-fw fa-home"></i> Home</a>
          <a href="{{ route('product.index') }}"><i class="fa fa-fw fa-tags"></i> Product List</a>
          @if(Cart::instance('default')->count() > 0)
          <a href="/cart"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Cart <span class="badge badge-secondary badge-pill float-right mt-1">{{ Cart::instance('default')->count() }}</span></a>
          @endif
          <a href="/checkout"><i class="fa fa-fw fa-check"></i> Checkout</a>

        </div>
      </div>
    </nav>

    <div class="content-overlay"></div>

    <!-- Top Header -->
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-between">
              <nav class="nav">
                <a class="nav-item nav-link d-none d-sm-block" href="/contact"><i class="fa fa-question-circle"></i> Help</a>
                <a class="nav-item nav-link d-none d-sm-block" href="/contact"><i class="fa fa-phone"></i>{{ $settings->phone }}</a>
              </nav>
              <ul class="nav">
                <li class="nav-item d-none d-md-block">
                  <a class="nav-link"><i class="fa fa-align-left"></i> English</a>
                </li>
                <li class="nav-item d-none d-md-block">
                  <a class="nav-link"><i class="fa fa-align-left"></i> $ USD</a>
                </li>
                <li class="nav-item d-sm-none">
                  <a href="#" class="nav-link" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-sign-in"></i> {{ route('login') }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Middle Header -->
    <div class="middle-header">
      <div class="container">
        <div class="row py-2 py-lg-0">
          <div class="col-2 col-sm-1 d-block d-lg-none">
            <div class="d-flex align-items-center h-100 justify-content-center menu-btn-wrapper">
              <button class="btn btn-lg border-0 btn-link offcanvas-btn p-0" type="button">
                <i class="fa fa-bars"></i/>
              </button>
            </div>
          </div>
          <div class="col-2 col-sm-1 col-lg-3 pr-0">
            <div class="d-flex align-items-center h-100 logo-wrapper">
              <a href="/" class="d-lg-none"><img alt="Logo" src="{{ asset('men/images/logo-teal-small.png')}}" class="img-fluid"/></a>
              <a href="/" class="d-none d-lg-flex mb-2 mb-lg-0"><img alt="Logo" src="{{ asset('men/images/logo-teal.png')}}" class="img-fluid"/></a>
            </div>
          </div>
          <div class="col-8 col-sm-6 col-md-7 col-lg-6" style="margin-top: 10px;">
            <form action="{{ route('search') }}" method="GET" class="search-form">
            {{ csrf_field() }}
            <div class="d-flex align-items-center h-100">
              <div class="input-group input-group-search">
                <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search here..." aria-label="Search here...">
                <span class="input-group-append">
                  <button class="btn btn-theme btn-search" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
          </form>
          </div>

          <div class="col-4 col-sm-4 col-md-3 col-lg-3 d-none d-sm-block">
            <div class="d-flex align-items-center h-100 float-right abg-secondary">
              <div class="btn-group btn-group-sm mr-3" role="group" aria-label="Login Sign Up">
                @if (Auth::guest())
                <a class="btn btn-outline-theme" href="{{ route('login') }}" role="button"><i class="fa fa-sign-in d-none d-lg-inline-block"></i> Login</a>
                <a class="btn btn-outline-theme" href="{{ route('register') }}" role="button"><i class="fa fa-user-plus d-none d-lg-inline-block"></i> Sign Up</a>
                @else
                   <li class="dropdown">
                                  <a class="dropdown-toggle btn btn-outline-theme" data-toggle="dropdown" href="#" role="button"><i class="fa fa-user-plus d-none d-lg-inline-block"></i> {{ Auth::user()->name }}</a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
              </div>

              <a href="cart.html" class="d-lg-none pos-r"><img src="{{ asset('men/images/cart.png')}}" alt="" width="31">
                @if(Cart::instance('default')->count() > 0)
                <span class="badge badge-counter badge-theme">{{ Cart::instance('default')->count() }}</span>
                @endif
              </a>

              <div class="navbar p-0 d-none d-lg-block"> <!-- Disable Popper.js for Dropdown in Navbar, this will make it easier to animate -->
                <div class="dropdown dropdown-cart">
                  <a class="d-block pos-r" href="#" role="button" id="dropdown-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Cart::instance('default')->count() > 0)
                    <img src="{{ asset('men/images/cart.png')}}" alt="" width="31">
                    <span class="badge badge-counter badge-theme">{{ Cart::instance('default')->count() }}</span>
                    @endif
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="container">

      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 d-none d-lg-flex navbar-theme">
        <div class="container">
          <div class="pos-r d-flex w-100">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/product">Product List</a></li>
              <li class="nav-item"><a class="nav-link" href="/cart">Shopping Cart</a></li>
              <li class="nav-item"><a class="nav-link" href="/checkout">Checkout</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu t-90 smooth" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                  <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                  <a class="dropdown-item" href="/contact">Contact Us</a>
                </div>
              </li>
              <li class="nav-item dropdown mega-menu">
                <a class="nav-link dropdown-toggle" href="#" id="navbarMegaMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Mega Menu
                </a>
                <div class="dropdown-menu w-100 t-90 smooth" aria-labelledby="navbarMegaMenu">
                  <div class="mega-menu-content">
                    <div class="row">
                      <div class="col">
                        <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Top Categories</h6>
                         @foreach($categories as $category)
                        <div class="list-group">
                          <a href="{{ route('product.index', ['category' => $category->slug]) }}" class="list-group-item list-group-item-action py-1 px-3 border-0">{{ $category->name }}</a>
                        </div>
                          @endforeach
                      </div>
                      <div class="col">
                        <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Categories</h6>
                        @foreach($slug as $category)
                        <div class="list-group">
                          <a class="list-group-item list-group-item-action py-1 px-3 border-0">{{ $category->slug }}</a>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <span class="navbar-text">
              <a><i class="fa ml-4 fa-truck"></i> Free Shipping</a>
              <a><i class="fa ml-4 fa-money"></i> Cash on Delivery</a>
              <a class="d-none d-xl-inline-block"><i class="fa ml-4 fa-lock"></i> Secure Payment</a>
            </span>
          </div>
        </div>
      </nav>

          <!-- The Body Should yield here in all pages -->

          @yield('content')

           <!-- Footer -->
      <div class="footer">
        <div class="container">
          <div class="row equal-height">
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>About Us</span></div>
              <ul>
                <li>
                  Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremmagna aliqua. Ut enim ad minim... <a href="about.html">Read More</a>
                </li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Categories</span></div>
              <ul>
                @foreach($categories as $category)
                <li><i class="fa fa-angle-double-right"></i> <a href="{{ route('product.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Newsletter</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
              <div class="input-group input-group-sm">
                <input class="form-control" type="text" placeholder="Email Address" aria-label="Email Address">
                <div class="input-group-append">
                  <button class="btn btn-theme" type="button">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Our Store</span></div>
              <ul class="footer-icon">
                <li><span><i class="fa fa-map-marker"></i></span> {{ $settings->address }}</li>
                <li><span><i class="fa fa-phone"></i></span> {{ $settings->phone }}</li>
                <li><span><i class="fa fa-envelope"></i></span> <a href="mailto:cs@domain.tld">{{ $settings->email }}</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Follow Us</span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum</p>
              <ul class="follow-us">
                <li><a href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ $settings->instagram }}"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Payment Method</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
              <img src="{{ asset('men/images/payment-1.png')}}" alt="Payment-1">
              <img src="{{ asset('men/images/payment-2.png')}}" alt="Payment-2">
              <img src="{{ asset('men/images/payment-3.png')}}" alt="Payment-3">
              <img src="images/payment-4.png')}}" alt="Payment-4">
              <img src="{{ asset('men/images/payment-5.png')}}" alt="Payment-5">
            </div>
          </div>
        </div>
        <div class="text-center copyright">
          Copyright © 2018 Quatess All right reserved
        </div>
      </div>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
      <i class="fa fa-angle-double-up"></i>
    </a>

    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{URL::to('men')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{URL::to('men')}}/js/popper.min.js"></script>
    <script src="{{ URL::to('men')}}/bootstrap/js/bootstrap.min.js"></script>

    <!-- Third Party JS -->
    <script src="{{ URL::to('men')}}/js/owl.carousel.min.js"></script>

    <!-- Mimity JS -->
    <script src="{{ URL::to('men')}}/js/mimity.min.js"></script>

  </body>
</html>