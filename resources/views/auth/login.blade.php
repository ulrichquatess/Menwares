@extends('layouts.main')

@section('content')
     <!-- Main Container -->
      <div class="container">
        <div class="row justify-content-center mt-4">
          <div class="col-xs-12 col-sm-auto">
            <div class="card">
              <div class="card-body pt-2">
                <div class="text-center">
                  <div class="d-inline-block border border-secondary rounded-circle text-center m-auto">
                    <h1 class="px-1"><i class="fa fa-user fa-fw"></i></h1>
                  </div>
                </div>
                <h5 class="card-title text-center">Please Enter Your Information</h5>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-Mail Address" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="remember">
                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                  </div>
                  <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Enter</button>
                  <div class="form-group mb-0">
                    <a href="{{ route('register') }}" class="text-default"><small>Register</small></a>
                    <a href="{{ route('password.request') }}" class="float-right text-default"><small>Forgot Password ?</small></a>
                  </div>
                </form>
                <a href="{{ route('guessCheckout.index')}}" style="color: white;">
                <button type="submit" class="btn btn-theme btn-sm btn-block my-3">Continue Guess</button>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
