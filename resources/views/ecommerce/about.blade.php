@extends('layouts.main')
@section('content')
	<!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-3">
            <div class="title"><span>About Us</span></div>
            <img src="{{ asset('men/images/team.jpg')}}" alt="Our Team" class="img-thumbnail mb-3">
            <p>{!! substr(strip_tags($pages->content), 0, 1000) !!} {!! strlen(strip_tags($pages->content)) > 1000 ? "..." : "" !!}</p>
            <div id="accordion" role="tablist" class="mb-3">
              <div class="card mb-1">
                <div class="card-header p-2" role="tab" id="headingOne">
                  <a class="collapsed text-default font-weight-bold" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Click Here To Read More
                  </a>
                </div>
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    {!! substr(strip_tags($pages->content), 1000, 3000000) !!} {!! strlen(strip_tags($pages->content)) > 3000000 ? "" : "" !!}
                  </div>
                </div>
              </div>

            </div>
            <address>
              {{ $setting->address }}<br>
              <abbr title="Phone">P:</abbr> {{ $setting->phone }}
            </address>
            <address>
              <a class="text-default">{{ $setting->email }}</a>
            </address>
          </div>
          <div class="col-md-4">
            <div class="title"><span>Testimonials</span></div>
            @foreach($client as $client)
            <blockquote class="testimonial bl-1">
              <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            @endforeach
          </div>
        </div>
      </div>
@endsection