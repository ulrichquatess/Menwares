@extends('layouts.main')
@section('content')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	      <!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
          </nav>
        </div>
      </div>

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

       <!-- Main Container -->
      @if(Cart::count() > 0)
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="title"><span>You have {{ Cart::count() }}item(s) in your bag</span></div>
              <!-- This part yere returns the success Message if product was added to the cart -->
            <table class="table table-bordered table-responsive-sm" add-class-on-xs="table-sm">
              <thead class="thead-light">
                <tr>
                  <th scope="col" add-class-on-xs="w-75">Item</th>
                  <th scope="col" class="text-center">Qty</th>
                  <th scope="col" class="d-none d-sm-table-cell">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach(Cart::content() as $item) 
                <tr>
                  <td scope="row">
                    <div class="media">
                      <a href="{{ url('singleproduct/'.$item->model->slug)}}" class="mr-2 d-none d-md-block"><img src="{{ productImage($item->model->image) }}" class="img-thumbnail" alt="product"></a>
                      <div class="media-body">
                        <a href="{{ url('singleproduct/'.$item->slug)}}" class="mt-0 text-default font-weight-bold"><u>{{ $item->model->name }}</u></a>
                        <div>Size: {{ $item->model->size }}<span class="mx-2">|</span> Color: Gray</div>
                        <div class="mb-2">
                          <span class="d-inline d-sm-none">Price: <span class="price"></span></span>
                          <span class="badge badge-success custom-badge arrowed-right">In stock</span>
                        </div>
                         <form action="{{ route('cart.save', $item->rowId) }}" method="POST">
                        	{{ csrf_field() }}

                        	<button class="btn btn-light btn-sm btn-cart-tools d-none d-md-block" type="submit">Save for later</button>

                        </form>
                      
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                        	{{ csrf_field() }}
                        	{{ method_field('DELETE') }}

                        	<button class="btn btn-light btn-sm btn-cart-tools" type="submit">Remove</button>

                        </form>
                      </div>
                    </div>
                  </td>
                  <td class="quantity text-center">
                    <div class="input-group input-group-sm input-group-qty d-inline-flex mb-2">
                     <select class="quantity" data-id="{{ $item->rowId }}">
                      @for($i = 1; $i < 5 + 1 ; $i++)
                      <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                      @endfor
                    </select>
                    </div>
                    <div class="d-block d-sm-none">
                      Subtotal <div class="price">{{ $item->model->presentPrice() }}</div>
                    </div>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="price">{{ $item->model->presentPrice() }}</span> 
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-2">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" placeholder="Coupon code" aria-label="Coupon code">
              <div class="input-group-append">
                <button class="btn btn-theme" type="button">Apply</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 col-xl-4">
            <div class="d-flex">
              <div>Subtotal</div>
              <div class="ml-auto font-weight-bold">{{ presentPrice(Cart::subtotal()) }}</div>
            </div>
            <div class="d-flex">
              <div>Tax</div>
              <div class="ml-auto font-weight-bold">{{ presentPrice(Cart::tax()) }}</div>
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
              <div>Order Total</div>
              <div class="ml-auto price h5 mb-0">{{ presentPrice(Cart::total()) }}</div>
            </div>
            <hr>
          </div>
          <div class="col-12 text-right" remove-class-on-xs="text-right" add-class-on-xs="text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('product.index')}}" class="d-none d-sm-inline-block btn btn-outline-theme">Continue Shopping</a>
              <a href="{{ route('checkout.index') }}" class="btn btn-theme">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
         @else
         	<div class="row p-5">
          <div class="col text-center">
            <h1><i class="fa fa-shopping-bag"></i></h1>
            <h1 class="roboto-condensed" add-class-on-xs="h2">Your shopping cart is currently empty</h1>
            <p>Add products to it. Check out our wide range of products!</p>
            <a href="{{ route('product.index')}}" role="button" class="btn btn-outline-theme"><i class="fa fa-shopping-cart"></i> SHOP NOW</a>
          </div>
        </div>
         @endif

        @if(Cart::instance('saveForLater')->count() > 0)
        <div class="row mt-5">
          <div class="col-12"><div class="title"><span> You Have Saved {{ Cart::instance('saveForLater')->count() }} item(s) for later</span></div></div>
          <div class="col pl-sm-0 pr-sm-0">
            <div class="owl-carousel owl-theme product-slider">

           @foreach(Cart::instance('saveForLater')->content() as $item)

              <div class="product-slider-item">
            <div class="card card-product">
        <div class="img-wrapper">
             <a href="{{ url('singleproduct/'.$item->model->slug)}}"><img class="card-img-top" src="{{ productImage($item->model->image) }}" alt="Card image cap"></a>
                 <div class="tools tools-bottom" data-animate-in="fadeInDown" data-animate-out="flipOutX">
                      <div class="btn-group" role="group" aria-label="card-product-tools">
                         <button class="btn btn-link btn-sm d-none d-md-inline-block quick-view"><i class="fa fa-search-plus"></i></button>
                          <form action="{{ route('saveForLater.save', $item->rowId) }}" method="POST">
                        	{{ csrf_field() }}

                        	<button class="btn btn-link btn-sm" type="submit">Move to Cart</button>

                        </form>
                      
                        <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                        	{{ csrf_field() }}
                        	{{ method_field('DELETE') }}

                        	<button class="btn btn-link btn-sm" type="submit">Remove</button>

                        </form>
                          <button class="btn btn-link btn-sm d-none d-md-inline-block"><i class="fa fa-heart"></i></button>
                      </div>
                 </div>
             <span class="badge badge-primary custom-badge arrowed-right label label-top-left">Extra Sale</span>
                </div>
                  <div class="card-body">
                     <p class="card-text"><a href="detail.html">{{ $item->model->name }}</a></p>
                       <ul class="card-text list-inline">
                          <li class="list-inline-item"><span class="price">{{ $item->model->presentPrice() }}</span></li>
                          <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                          <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-info custom-badge arrowed-left">-10%</span></li>
                       </ul>
                  </div>
               </div>
            </div>

           @endforeach
            </div>
          </div>
          @else
          <div class="col-12"><div class="title"><span> You Have Not Saved Any Item </span></div></div>
          @endif
        </div>
      </div>
        <script src="{{ asset('js/apps.js') }}"></script>
      <script>
        (function(){
          const classname = document.querySelectorAll('.quantity')

          Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function(){

              const id = element.getAttribute('data-id')
              
            axios.patch(`/cart/${id}`, {
            quantity: this.value
          })
          .then(function (response) {
            //console.log(response);
            window.location.href = '{{ route('cart.index') }}'
          })
          .catch(function (error) {
            console.log(error);
            window.location.href = '{{ route('cart.index') }}'
          });

            })
          })
        })();
      </script>
@endsection