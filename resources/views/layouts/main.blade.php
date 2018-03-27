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

    <!-- Offcanvas Menu -->
    <nav class="offcanvas">
      <div class="offcanvas-content">
        <div id="list-menu" class="list-menu list-group" data-children=".sub-menu1">
          <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
          <a href="products.html"><i class="fa fa-fw fa-tags"></i> Product List</a>
          <a href="cart.html"><i class="fa fa-fw fa-shopping-cart"></i> Shopping Cart <span class="badge badge-secondary badge-pill float-right mt-1">4</span></a>
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
                <a class="nav-item nav-link d-none d-sm-block" href="#"><i class="fa fa-question-circle"></i> Help</a>
                <a class="nav-item nav-link d-none d-sm-block" href="#"><i class="fa fa-phone"></i> +123-456-789</a>
                <a class="nav-item nav-link d-none d-sm-block" href="#"><i class="fa fa-apple"></i> Download App</a>
              </nav>
              <ul class="nav">
                <select class="select-dropdown-nav" data-width="95px">
                  <option value="en" data-before='<img src="{{ asset('men/images/en.jpg')}} " class="align-baseline" /> '>English</option>
                  <option value="fr" data-before='<img src="{{ asset('men/images/fr.jpg')}} " class="align-baseline" /> '>French</option>
                </select>
                <select class="select-dropdown-nav" data-width="70px">
                  <option value="USD">$ USD</option>
                  <option value="EUR">€ EUR</option>
                </select>
                <li class="nav-item d-none d-md-block">
                  <a href="#" class="nav-link"><i class="fa fa-align-left"></i> Track Order</a>
                </li>
                <li class="nav-item d-sm-none">
                  <a href="#" class="nav-link" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-sign-in"></i> Login</a>
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
          <div class="col-8 col-sm-6 col-md-7 col-lg-6">
            <div class="d-flex align-items-center h-100">
              <div class="input-group input-group-search">
                <div class="input-group-prepend d-none d-md-flex">
                  <select class="select-dropdown">
                    <option value="all">All Categories</option>
                    <option value="1">Dresses</option>
                    <option value="2">Tops</option>
                    <option value="3">Bottoms</option>
                    <option value="4">Jackets / Coats</option>
                    <option value="5">Sweaters</option>
                    <option value="6">Gym Wear</option>
                    <option value="7">Others</option>
                  </select>
                </div>
                <input type="text" class="form-control" placeholder="Search here..." aria-label="Search here...">
                <span class="input-group-append">
                  <button class="btn btn-theme btn-search" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
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
              <div class="navbar p-0 mr-3" hidden>
                <div class="dropdown">
                  <button class="btn btn-light active btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi, John Thor
                  </button>
                  <div class="dropdown-menu dropdown-menu-right smooth" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="account-order.html"><i class="fa fa-fw fa-shopping-bag"></i> Orders</a>
                    <a class="dropdown-item" href="account-profile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="account-wishlist.html"><i class="fa fa-fw fa-heart"></i> Wishlist (3)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                  </div>
                </div>
              </div>
              <a href="account-wishlist.html" class="d-none d-xl-block pos-r mr-3"><img src="{{ asset('men/images/wishlist.png')}}" alt="" width="31"><span class="badge badge-counter badge-theme">3</span></a>

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
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-cart smooth" aria-labelledby="dropdown-cart">
                    <div class="media">
                      <a href="detail.html"><img class="img-thumbnail d-flex mr-2" src="{{ asset('men/images/product/polo1-small.jpg')}}" alt="product" width="50"></a>
                      <div class="media-body">
                        <div><a href="detail.html" class="mt-0 text-default">U.S. Polo Assn. Green Solid Slim Fit</a></div>
                        <span class="price font-weight-normal">$13.50</span> <a href="#" class="float-right" data-toggle="tooltip" title="Remove"><span class="badge badge-light"><i class="fa fa-remove"></i></span></a>
                      </div>
                    </div>
                    <div class="media">
                      <a href="detail.html"><img class="img-thumbnail d-flex mr-2" src="{{ asset('men/images/product/polo2-small.jpg')}}" alt="product" width="50"></a>
                      <div class="media-body">
                        <div><a href="detail.html" class="mt-0 text-default">U.S. Polo Assn. Red Solid Slim Fit</a></div>
                        <span class="price font-weight-normal">$13.50</span> <a href="#" class="float-right" data-toggle="tooltip" title="Remove"><span class="badge badge-light"><i class="fa fa-remove"></i></span></a>
                      </div>
                    </div>
                    <div class="media">
                      <a href="detail.html"><img class="img-thumbnail d-flex mr-2" src="{{ asset('men/images/product/polo3-small.jpg')}}" alt="product" width="50"></a>
                      <div class="media-body">
                        <div><a href="detail.html" class="mt-0 text-default">U.S. Polo Assn. Yellow Solid</a></div>
                        <span class="price font-weight-normal">$13.50</span> <a href="#" class="float-right" data-toggle="tooltip" title="Remove"><span class="badge badge-light"><i class="fa fa-remove"></i></span></a>
                      </div>
                    </div>
                    <div class="media">
                      <a href="detail.html"><img class="img-thumbnail d-flex mr-2" src="{{ asset('men/images/product/polo4-small.jpg')}}" alt="product" width="50"></a>
                      <div class="media-body">
                        <div><a href="detail.html" class="mt-0 text-default">Red Tape Blue Solid Slim Fit</a></div>
                        <span class="price font-weight-normal">$13.50</span> <a href="#" class="float-right" data-toggle="tooltip" title="Remove"><span class="badge badge-light"><i class="fa fa-remove"></i></span></a>
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    Subtotal: <span class="price">$54.00</span>
                    <div class="dropdown-divider"></div>
                    <div class="text-center">
                      <div class="btn-group btn-group-sm" role="group" aria-label="View Cart and Checkout Button">
                        <a href="/cart" role="button" class="btn btn-outline-theme"><i class="fa fa-shopping-cart"></i> View Cart</a>
                        <a href="/checkout" role="button" class="btn btn-outline-theme"><i class="fa fa-check"></i> Checkout</a>
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                  </div>
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
                  <a class="dropdown-item" href="about.html">About Us</a>
                  <a class="dropdown-item" href="blog.html">Blog</a>
                  <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                  <a class="dropdown-item" href="compare.html">Compare</a>
                  <a class="dropdown-item" href="contact.html">Contact Us</a>
                  <a class="dropdown-item" href="cart-empty.html">Empty Shopping Cart</a>
                  <a class="dropdown-item" href="404.html">Error 404</a>
                  <a class="dropdown-item" href="faq.html">FAQ</a>
                  <a class="dropdown-item" href="login.html">Login</a>
                  <a class="dropdown-item" href="detail.html">Product Detail</a>
                  <a class="dropdown-item" href="register.html">Register</a>
                  <div class="dropdown-submenu">
                    <a href="#" class="dropdown-item">My Account</a>
                    <ul class="dropdown-menu smooth">
                      <a href="account-order.html" class="dropdown-item">Orders</a>
                      <a href="account-profile.html" class="dropdown-item">Profile</a>
                      <a href="account-address.html" class="dropdown-item">Addresses</a>
                      <a href="account-wishlist.html" class="dropdown-item">Wishlist</a>
                      <a href="account-password.html" class="dropdown-item">Change Password</a>
                      <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item">Submenu</a>
                        <ul class="dropdown-menu smooth">
                          <a href="#" class="dropdown-item">Submenu1</a>
                          <a href="#" class="dropdown-item">Submenu2</a>
                        </ul>
                      </div>
                    </ul>
                  </div>
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
                        <div class="list-group">
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Polo T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Round Neck T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">V Neck T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Hooded T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Polo T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Round Neck T-Shirt</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">V Neck T-Shirt</a>
                        </div>
                      </div>
                      <div class="col">
                        <h6 class="p-2 font-weight-bold border border-top-0 border-right-0 border-left-0">Categories</h6>
                        <div class="list-group">
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Dresses</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Tops</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Bottoms</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Jackets / Coats</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Sweaters</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Gym Wear</a>
                          <a href="products.html" class="list-group-item list-group-item-action py-1 px-3 border-0">Others</a>
                        </div>
                      </div>
                      <div class="col">
                        <div class="row">
                          <div class="col-12 mb-2">
                            <div class="card overlay-thumbnail">
                              <img src="{{ asset('men/images/product/type-polo.jpg')}}" alt="" class="card-img">
                              <a href="products.html">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                  <div class="card-text">
                                    <div>Polo T-Shirts <br/><small>40% OFF</small></div>
                                    <button class="btn btn-sm btn-info rounded"><small>SHOP NOW</small></button>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="card overlay-thumbnail">
                              <img src="{{ asset('men/images/product/type-hooded.jpg')}}" alt="" class="card-img">
                              <a href="products.html">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                  <div class="card-text">
                                    <div>New Collection</div>
                                    <button class="btn btn-sm btn-warning rounded"><small>SHOP NOW</small></button>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <a href="#"><img class="img-thumbnail" src="{{ asset('men/images/product/mega-menu.jpg')}}" alt=""></a>
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
              <div class="title-footer"><span>Information</span></div>
              <ul>
                <li><i class="fa fa-angle-double-right"></i> <a href="faq.html">FAQ</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="#">Policy Privacy</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="#">Terms and Conditions</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="#">Shipping Methods</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Categories</span></div>
              <ul>
                <li><i class="fa fa-angle-double-right"></i> <a href="products.html">Cras justo odio</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="products.html">Dapibus ac facilisis in</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="products.html">Morbi leo risus</a></li>
                <li><i class="fa fa-angle-double-right"></i> <a href="products.html">Porta ac consectetur ac</a></li>
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
                <li><span><i class="fa fa-map-marker"></i></span> 212 Lorem Ipsum. Dolor Sit</li>
                <li><span><i class="fa fa-phone"></i></span> +123-456-789</li>
                <li><span><i class="fa fa-envelope"></i></span> <a href="mailto:cs@domain.tld">cs@domain.tld</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>Follow Us</span></div>
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum</p>
              <ul class="follow-us">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
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
            <div class="col-lg-3 col-md-6">
              <div class="title-footer"><span>My Account</span></div>
                <ul>
                  <li><i class="fa fa-angle-double-right"></i> <a href="account-order.html">Orders</a></li>
                  <li><i class="fa fa-angle-double-right"></i> <a href="account-profile.html">Profile</a></li>
                  <li><i class="fa fa-angle-double-right"></i> <a href="account-wishlist.html">Wishlist</a></li>
                  <li><i class="fa fa-angle-double-right"></i> <a href="#">Logout</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="text-center copyright">
          Copyright © 2017 Mimity All right reserved
        </div>
      </div>

      <!-- Quick View Modal -->
      <div class="modal fade" id="QuickViewModal" tabindex="-1" role="dialog" aria-labelledby="QuickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-quickview" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><a href="detail.html" class="text-default">U.S. Polo Assn. Green Solid Slim Fit</a></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col col-sm-6">
                    <div class="owl-carousel owl-theme quickview-slider">
                      <div><img src="{{ asset('men/images/product/polo1.jpg')}}" alt="image"></div>
                      <div><img src="{{ asset('men/images/product/polo2.jpg')}}" alt="image"></div>
                      <div><img src="{{ asset('men/images/product/polo3.jpg')}}" alt="image"></div>
                    </div>
                  </div>
                  <div class="col col-sm-6">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="border-top-0">Price</td>
                          <td class="border-top-0">
                            <ul class="list-inline mb-0">
                              <li class="list-inline-item"><span class="price">$13.50</span></li>
                              <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                              <li class="list-inline-item d-none d-sm-inline-block"><span class="badge custom-badge arrowed-left badge-primary">-10%</span></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>Quantity</td>
                          <td>
                            <div class="input-group input-group-sm input-group-qty">
                              <div class="input-group-prepend">
                                <button class="btn btn-theme btn-down" type="button"><i class="fa fa-minus"></i></button>
                              </div>
                              <input type="text" class="form-control" aria-label="Quantity" value="1" data-min="1" data-max="10">
                              <div class="input-group-append">
                                <button class="btn btn-theme btn-up" type="button"><i class="fa fa-plus"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Size</td>
                          <td>
                            <select class="select-dropdown" data-width="65px" data-size="sm">
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                            </select>
                          </td>
                        </tr>
                        <tr class="d-none d-md-table-row">
                          <td>Checkbox</td>
                          <td>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="quickviewCheck">
                              <label class="custom-control-label" for="quickviewCheck">Check this</label>
                            </div>
                          </td>
                        </tr>
                        <tr class="d-none d-md-table-row">
                          <td class="align-middle">Radio Option</td>
                          <td>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="quickviewOption1" name="quickview-option" class="custom-control-input">
                              <label class="custom-control-label" for="quickviewOption1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="quickviewOption2" name="quickview-option" class="custom-control-input">
                              <label class="custom-control-label" for="quickviewOption2">No</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <button class="btn btn-sm btn-theme btn-block btn-add-quickview">Add to Cart</button>
                            <button class="btn btn-sm btn-outline-theme"><i class="fa fa-heart"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
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