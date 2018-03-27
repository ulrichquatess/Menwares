<div class="product-slider-item">
                <div class="card card-product">
                  <div class="img-wrapper">
                    <a href="{{ url('singleproduct/'.$product->slug)}}"><img class="card-img-top" src="{{ productImage($product->image) }}" alt="Card image cap"></a>
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
                    <p class="card-text"><a href="detail.html">{{ $product->name }}</a></p>
                    <ul class="card-text list-inline">
                      <li class="list-inline-item"><span class="price">{{ $product->presentPrice() }}</span></li>
                      <li class="list-inline-item"><del class="text-muted">$15.00</del></li>
                      <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-info custom-badge arrowed-left">-10%</span></li>
                    </ul>
                  </div>
                </div>
              </div>