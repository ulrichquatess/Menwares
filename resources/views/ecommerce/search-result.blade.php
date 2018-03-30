@extends('layouts.main')
@section('content')
	 <!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="account-profile.html">My Account</a></li>
              <li class="breadcrumb-item active" aria-current="page">My Orders</li>
            </ol>
          </nav>
        </div>
      </div>

<div class="container">
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
</div>              

      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="title"><span>{{ $products->count() }} result(s) for '{{ request()->input('query') }}'</span></div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <th scope="row"><a href="{{ url('singleproduct/'.$product->slug)}}" class="text-default">{{ $product->name }}</a></th>
                    <td><span class="price">{{ str_limit($product->details, 20) }}</span></td>
                    <td><span class="price">{{ $product->presentPrice() }}</span></td>
                    <td><span class="badge badge-warning">In Stock</span></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection