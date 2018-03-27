@extends('layouts.main')
@section('content')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('men/css/strip.css') }}">
	<!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>

       <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">1</span> ADDRESS</span></div>
            <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
            	{{ csrf_field() }}
            <div class="form-group mb-1 mb-md-3">
              <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}" readonly>
            </div>
            <div class="form-group mb-1 mb-md-3">
              <label for="inputAddress" class="mb-0 mb-md-2">Address Line 1 *</label>
              <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="form-row">
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputCountry" class="mb-0 mb-md-2">Country *</label>
                <input type="text" class="form-control" name="country" id="country">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputZip" class="mb-0 mb-md-2">Zip/Postal Code *</label>
                <input type="text" class="form-control" name="zip" id="zip">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputCity" class="mb-0 mb-md-2">City *</label>
                <input type="text" class="form-control" name="city" id="city">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputRegion" class="mb-0 mb-md-2">Region *</label>
                <input type="text" class="form-control" name="region" id="region">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputPhone" class="mb-0 mb-md-2">Phone Number *</label>
                <input type="text" class="form-control" name="phone" id="phone">
              </div>
              <div class="form-group mb-1 mb-md-3 col-md-6">
                <label for="inputEmail" class="mb-0 mb-md-2">Email Address *</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}" readonly>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-3">
            <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">2</span> SHIPPING</span></div>
            <div class="mb-4">
              <div class="custom-control custom-radio">
                <input type="radio" id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked">
                <label class="custom-control-label" for="shippingOption1">Standard Delivery</label>
                <span class="float-right font-weight-bold">FREE</span>
              </div>
              <div class="ml-4 mb-2">(3-7 business days)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="shippingOption2" name="shipping-option" class="custom-control-input">
                <label class="custom-control-label" for="shippingOption2">Express Delivery</label>
                <span class="float-right font-weight-bold">$10.00</span>
              </div>
              <div class="ml-4 mb-2">(2-4 business days)</div>
              <div class="custom-control custom-radio">
                <input type="radio" id="shippingOption3" name="shipping-option" class="custom-control-input">
                <label class="custom-control-label" for="shippingOption3">Next Business day</label>
                <span class="float-right font-weight-bold">$20.00</span>
              </div>
            </div>
            <div class="title"><span><span class="bg-dark text-white rounded-circle px-2">3</span> PAYMENT METHOD</span></div>
            <p class="mb-1">BILLING ADDRESS :</p>
           
            <div class="bg-light p-3 rounded">
              <div class="form-group mb-1">
                <label class="mb-0" for="inputCard"></label>
                
              </div>
              <div class="form-group mb-1">
                <label class="mb-0" for="inputFullname">Full name</label>
                <input type="text" class="form-control form-control-sm" id="inputFullname">
              </div>

              <div class="form-group mb-1">
                <label for="card-element">
					      Credit or debit card
					    </label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-md-6 col-lg-12">
                <div class="title"><span>ORDER SUMMARY</span></div>
                <div class="border rounded p-2 bg-light">
                @foreach(Cart::content() as $item)
                  <div class="media mb-2">
                    <div class="media-body">
                      <a href="detail.html" class="mt-0 text-default"><u>{{ $item->model->name }}</u></a>
                      <div>Size: {{ $item->model->size }} <span class="mx-2">|</span> Color: Gray</div>
                      <div>Price: {{ $item->model->presentPrice() }} <span class="mx-2">|</span> Qty: {{ $item->qty}}<span class="mx-2">|</span> Subtotal: {{ Cart::subtotal() }}</div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-md-6 col-lg-12">
                <div class="d-flex mt-3">
                  <div>Sub Total</div>
                  <div class="ml-auto font-weight-bold">{{ Cart::subtotal() }}</div>
                </div>
                <div class="d-flex mt-3">
                  <div>Tax</div>
                  <div class="ml-auto font-weight-bold">{{ Cart::tax() }}</div>
                </div>
                <div class="d-flex">
                  <div>Bag Discount</div>
                  <div class="ml-auto font-weight-bold">$6.00</div>
                </div>
                <hr class="my-1">
                <div class="d-flex">
                  <div>Coupon Discount</div>
                  <div class="ml-auto font-weight-bold">-</div>
                </div>
                <div class="d-flex">
                  <div>Shipping Cost</div>
                  <div class="ml-auto font-weight-bold">FREE</div>
                </div>
                <hr>
                <div class="d-flex">
                  <div class="font-weight-bold h6">Order Total</div>
                  <div class="ml-auto price h5">{{ Cart::total() }}</div>
                </div>
                <hr>
                <div class="text-center"><button class="btn btn-theme" type="submit">SUBMIT MY ORDER</button></div>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>
  <script src="{{URL::to('men')}}/js/strip.js"></script>
@endsection