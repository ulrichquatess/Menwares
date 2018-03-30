@extends('layouts.main')
@section('content')
	  <!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
          </nav>
        </div>
      </div>
       <!-- Main Container -->
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
      <div class="container">
        <div class="row">
          <!-- Filter Sidebar -->
          <div class="col-lg-3 col-md-4 mb-3">
            <div class="collapse d-md-block pt-3 pt-md-0" id="collapseFilter"> 
              <div class="row">
                <div class="col-12 col-sm-6 col-md-12">
                  <div class="filter-sidebar">
                    <div class="title"><span>Categories</span></div>
                      <ul>
                        @foreach($categories as $category)
                        <li class="{{ setActiveCategory($category->slug)}}" ><a href="{{ route('product.index', ['category' => $category->slug]) }}">
                          <select class="select-dropdown" data-width="100%">
                            <option value="all">{{ $category->name }}</option>
                          </select>
                        </a>
                        </li>
                        @endforeach
                      </ul>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-12 col-sm-6 col-md-12">
                  <div class="filter-sidebar">
                    
                    
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12">
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-8">
            <div class="title"><span>{{ $categoryName }}</span></div>

            <!-- Sorting Bar -->
            <div class="sorting-bar">
              <div class="mr-5" remove-class-on-xs="mr-5" add-class-on-xs="w-100">
                <span>Sort By Price</span>
                <li><a href="{{ route('product.index', ['category' => request()->category, 'sort' => 'low_high']) }}">
                <select name="sortby" class="select-dropdown" data-width="180px" data-size="sm">
                  <option value="recomended">Low To High</option>
                </select>
              </a>

              <a href="{{ route('product.index', ['category' => request()->category, 'sort' => 'high_low']) }}">
                <select name="sortby" class="select-dropdown" data-width="180px" data-size="sm">
                  <option value="recomended">High to low</option>
                </select>
              </a>
            </li>

              </div>
            </div>

            <!-- Product Listing -->
            <div class="row equal-height" add-class-on-xs="no-gutters">

             @forelse($products as $product)
              <div class="col-xl-3 col-lg-4 col-6">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="{{ url('singleproduct/'.$product->slug)}}"><img class="card-img-top" src="{{ productImage($product->image) }}" alt="Card image cap"></a>
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
              @empty
                   <div class="title"><span>No Item Found</span></div>
              @endforelse
              <!-- Pagination -->
              <div class="col-12">
                <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                  <ul class="pagination">
                    <li class="page-item">{{ $products->appends(request()->input())->links() }}</a></li>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style type="text/css">
        .filter-sidebar li.active {
          font-weight: 600;
        }
      </style>
@endsection