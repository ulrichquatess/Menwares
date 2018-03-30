@extends('layouts.main')
@section('content')
	      <!-- Breadcrumb -->
      <div class="breadcrumb-container">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
        </div>
      </div>

      <!-- Main Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-3">
            <div class="title"><span>Contact Us</span></div>
            <form method="POST" action="{{url('contact')}}">
            	{{ csrf_field() }}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Your Name (*)</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
                @if ($errors->has('name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
    			     </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email1">Email address (*)</label>
                <input type="email" class="form-control" id="email1" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter name">
              </div>
              <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                <label for="message">Message (*)</label>
                <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                @if ($errors->has('message'))
                     <span class="help-block">
                         <strong>{{ $errors->first('message') }}</strong>
    			     </span>
                @endif
              </div>
              <button type="submit" class="btn btn-theme btn-sm">Submit</button>
            </form>
          </div>
          <div class="col-md-4">
            <div class="title"><span>Contact Info</span></div>
            <ul class="list-group mb-4">
              <li class="list-group-item pl-2 border-left-0 border-right-0 border-top-0">&raquo; {{ $setting->address}}</a>
              <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; {{ $setting->phone }}</a>
              <li class="list-group-item pl-2 border-left-0 border-right-0">&raquo; {{ $setting->email }}</a>
            </ul>
            <div class="title"><span>Our Location</span></div>
            <div class="embed-responsive embed-responsive-4by3 rounded">
              <iframe class="embed-responsive-item" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=central%2Bpark&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed"></iframe>
            </div>
          </div>
        </div>
      </div>
@endsection