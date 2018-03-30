@extends('layouts.main')
@section('content')
	<!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>

      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-3">
            <div class="title"><span>Latest Blog</span></div>
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="card blog-list">
                  <a href="blog-detail.html" class="p-1"><img class="card-img-top" src="{{ asset('men/images/blog/blog1.jpg')}}" alt="Blog image"></a>
                  <div class="card-body pb-0">
                    <h5 class="card-title"><a class="text-default" href="blog-detail.html">Lorem ipsum dolor sit amet</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="blog-detail.html" class="btn btn-theme btn-sm float-right">Read more</a>
                  </div>
                  <div class="card-footer bg-transparent border-top-0 text-muted py-0">
                    <ul class="list-inline">
                      <li class="list-inline-item"><small><i class="fa fa-clock-o"></i> Jan 01, 18</small></li>
                      <li class="list-inline-item"><small><i class="fa fa-user"></i> <a href="#" class="text-muted">Admin</a></small></li>
                      <li class="list-inline-item"><small><i class="fa fa-tag"></i> <a href="#" class="text-muted">Tags</a></small></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card blog-list">
                  <a href="blog-detail.html" class="p-1"><img class="card-img-top" src="{{ asset('men/images/blog/blog2.jpg')}}" alt="Blog image"></a>
                  <div class="card-body pb-0">
                    <h5 class="card-title"><a class="text-default" href="blog-detail.html">Lorem ipsum dolor sit amet</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="blog-detail.html" class="btn btn-theme btn-sm float-right">Read more</a>
                  </div>
                  <div class="card-footer bg-transparent border-top-0 text-muted py-0">
                    <ul class="list-inline">
                      <li class="list-inline-item"><small><i class="fa fa-clock-o"></i> Jan 01, 18</small></li>
                      <li class="list-inline-item"><small><i class="fa fa-user"></i> <a href="#" class="text-muted">Admin</a></small></li>
                      <li class="list-inline-item"><small><i class="fa fa-tag"></i> <a href="#" class="text-muted">Tags</a></small></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card blog-list">
                  <a href="blog-detail.html" class="p-1"><img class="card-img-top" src="{{ asset('men/images/blog/blog3.jpg')}}" alt="Blog image"></a>
                  <div class="card-body pb-0">
                    <h5 class="card-title"><a class="text-default" href="blog-detail.html">Lorem ipsum dolor sit amet</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="blog-detail.html" class="btn btn-theme btn-sm float-right">Read more</a>
                  </div>
                  <div class="card-footer bg-transparent border-top-0 text-muted py-0">
                    <ul class="list-inline">
                      <li class="list-inline-item"><small><i class="fa fa-clock-o"></i> Jan 01, 18</small></li>
                      <li class="list-inline-item"><small><i class="fa fa-user"></i> <a href="#" class="text-muted">Admin</a></small></li>
                      <li class="list-inline-item"><small><i class="fa fa-tag"></i> <a href="#" class="text-muted">Tags</a></small></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="card blog-list">
                  <a href="blog-detail.html" class="p-1"><img class="card-img-top" src="{{ asset('men/images/blog/blog4.jpg')}}" alt="Blog image"></a>
                  <div class="card-body pb-0">
                    <h5 class="card-title"><a class="text-default" href="blog-detail.html">Lorem ipsum dolor sit amet</a></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="blog-detail.html" class="btn btn-theme btn-sm float-right">Read more</a>
                  </div>
                  <div class="card-footer bg-transparent border-top-0 text-muted py-0">
                    <ul class="list-inline">
                      <li class="list-inline-item"><small><i class="fa fa-clock-o"></i> Jan 01, 18</small></li>
                      <li class="list-inline-item"><small><i class="fa fa-user"></i> <a href="#" class="text-muted">Admin</a></small></li>
                      <li class="list-inline-item"><small><i class="fa fa-tag"></i> <a href="#" class="text-muted">Tags</a></small></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col">
                <nav aria-label="Product Listing Page" class="d-flex justify-content-center mt-3">
                  <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&laquo;</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&lsaquo;</a></li>
                    <li class="page-item active"><span class="page-link" href="#">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&rsaquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="title"><span>Categories</span></div>
            <div class="list-group mb-4">
            @foreach($category as $category)
              <a href="{{ route('product.index', ['category' => $category->slug]) }}" class="list-group-item list-group-item-action pl-2 border-left-0 border-right-0 border-top-0">&raquo; {{ $category->name }}</a>
            @endforeach
            </div>
          </div>
        </div>
      </div>
@endsection