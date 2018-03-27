@extends('layouts.main')
@section('content')
		<!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/product">Products</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
          </nav>
        </div>
      </div>

            <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-12 d-block d-md-none">
            <div class="title"><span>{{ $product->name }}</span></div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-6">
            <img src="{{ productImage($product->image) }}" class="img-fluid mb-2 border w-100 image-detail" data-zoom-image="{{ asset('storage/'.$product->image) }}" alt="" style="cursor: pointer;">
            <div class="products-slider-detail owl-carousel owl-theme mb-2">
              @if($product->images)
              @foreach(json_decode($product->images, true) as $image)
              <a href="#"><img src="{{ productImage($image) }}" data-zoom-image="{{ productImage($image) }}" alt="" class="img-thumbnail"></a>
              @endforeach
              @endif
            </div>
            <div class="title d-none d-md-block"><span>Share to</span></div>
            <ul class="list-inline d-none d-md-block">
              <li class="list-inline-item"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-facebook"></i></button></li>
              <li class="list-inline-item"><button type="button" class="btn btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i></button></li>
              <li class="list-inline-item"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i></button></li>
              <li class="list-inline-item"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-linkedin"></i></button></li>
              <li class="list-inline-item"><button type="button" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-envelope"></i></button></li>
            </ul>
          </div>
          <div class="col-xl-8 col-lg-7 col-md-6">
            <table class="table table-detail" add-class-on-xs="table-sm">
              <tbody>
                <tr class="d-none d-md-table-row">
                  <td class="border-top-0" colspan="2"><h5>{{ $product->name }}</h5></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td>
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item"><span class="price"><h5 class="mb-0">{{ $product->presentPrice() }}</h5></span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge custom-badge arrowed-left badge-primary">-10%</span></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>Availability</td>
                  <td>
                    <span class="badge badge-success custom-badge arrowed-left">In Stock</span>
                  </td>
                </tr>
                <tr>
                  <td>Quantity</td>
                  <td>
                    <div class="input-group input-group-sm input-group-qty">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-theme btn-down" type="button"><i class="fa fa-minus"></i></button>
                      </div>
                      <input type="text" class="form-control" aria-label="Quantity" value="1" data-min="1" data-max="10">
                      <div class="input-group-append">
                        <button class="btn btn-outline-theme btn-up" type="button"><i class="fa fa-plus"></i></button>
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
                <tr>
                  <td></td>
                  <td>
                    
                    <form action="{{ route('cart.store')}}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="name" value="{{ $product->name }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <input type="hidden" name="size" value="{{ $product->size }}">
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="submit" class="btn btn-theme"><i class="fa fa-plus-circle"></i> Add to cart</button>
                    </div>
                    </form>

                  </td>
                </tr>
              </tbody>
            </table>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link text-default active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-default" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Detail</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane border border-top-0 p-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>{!! $product->description !!}</p>
                
              </div>
              <div class="tab-pane border border-top-0 p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-bordered mb-0">
                  <tbody>
                    <tr>
                      <td class="bg-light w-25">Lorem</td>
                      <td>Ipsum</td>
                    </tr>
                    <tr>
                      <td class="bg-light w-25">Dolor</td>
                      <td>Sit Amet</td>
                    </tr>
                    <tr>
                      <td class="bg-light w-25">Consectetur</td>
                      <td>Adipisicing</td>
                    </tr>
                    <tr>
                      <td class="bg-light w-25">Excepteur</td>
                      <td>Occaecat</td>
                    </tr>
                    <tr>
                      <td class="bg-light w-25">Excepteur</td>
                      <td>Occaecat</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12"><div class="title"><span>People who bought this also bought</span></div></div>
          <div class="col pl-sm-0 pr-sm-0">
            <div class="owl-carousel owl-theme product-slider">
            	@foreach($prod as $product)
                @include('layouts.partial')
              @endforeach
            </div>
          </div>
        </div>
      </div>

@endsection