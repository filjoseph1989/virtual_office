@extends('layouts.app') 

@section('content')
<div class="login-page">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
      <img src="images/logo.png" class="login__logo" />
      <h1>OFFICE LOGIN</h1>
      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-md-12">
            <input id="email" type="email" class="form-control input-underline input-lg" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> 
            @endif
          </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-md-12">
            <input id="password" type="password" class="form-control input-underline input-lg" name="password" placeholder="Password" required> 
            @if ($errors->has('password'))
              <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> 
            @endif
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary login__button">Login</button>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <div class="checkbox">
              <label> 
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me 
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a> 
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection