@extends('layouts.main')

@section('content')
     <!-- Main Container -->
      <div class="container">
        <div class="row justify-content-center mt-4">
          <div class="col-xs-12 col-lg-6 col-md-8">
            <div class="card">
              <div class="card-body pt-2">
                <div class="text-center">
                  <div class="d-inline-block border border-secondary rounded-circle text-center m-auto">
                    <h1 class="px-1"><i class="fa fa-user fa-fw"></i></h1>
                  </div>
                </div>
                <h5 class="card-title text-center">Create an Account</h5>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                  <div class="form-row">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" add-class-on-xs="form-control-sm" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" add-class-on-xs="form-control-sm" name="email" value="{{ old('email') }}" required>
                      @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" add-class-on-xs="form-control-sm"  name="password" required>
                       @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group col-md-6">
                      <label for="password-confirm">Confirm Password</label>
                      <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" add-class-on-xs="form-control-sm" name="password_confirmation" required>
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label class="mb-0" for="address">Address</label>
                    <textarea class="form-control" id="address" rows="2" add-class-on-xs="form-control-sm" name="address" value="{{ old('address') }}" required></textarea>
                    @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Submit</button>
                  <div class="form-group text-right">
                    <a href="{{ route('login') }}" class="text-default"><small>Already Registered ?</small></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
