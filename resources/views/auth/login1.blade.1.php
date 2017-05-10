@extends('layouts.app')

@section('content')
<div class="login-page">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
      <img src="images/logo.png" class="login__logo" />
      <h1>OFFICE LOGIN</h1>
      <form role="form" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-content">
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control input-underline input-lg" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-underline input-lg" id="password" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
              <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
            @endif
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="Log in">
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
            </label>
            <label for="">
              <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password? </a>
            </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
