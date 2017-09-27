@extends('main')
@section('title','Register')

@section('content')

<div class="col-md-3 float-left"></div>
	<div id="contactform" class="card border-primary mb-3 col-md-6 " style="padding:10px; margin: 50px; box-shadow: 5px 10px 80px;">
	<h1 class="text-center" style="font-family: 'Coca cola ii', cursive; font-size: 60px; text-shadow: 1px 0px 20px;">Log in</h1>
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-8">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-8">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Login
              </button>

              <a class="btn btn-link" href="{{ route('password.request') }}">
                  Forgot Your Password?
              </a>
          </div>
      </div>
  </form>
	</div>
@endsection
