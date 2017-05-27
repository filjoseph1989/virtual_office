@extends('auth.login')

@section('content')
  <div class="body"></div>
  <div class="wrapper">&nbsp;</div>
  <div class="title">
    <h2>Admin Login</h2>
  </div>
  <div class="header">
    <div>
      <a href="{{route('admin')}}">
        <img src="{{asset('images/logo.png')}}" class="login-logo">
      </a>
    </div>
  </div>
  <div class="login">
    <form class="" action="{{ route('admin.login.submit') }}" method="post">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        @if ($errors->has('email'))
        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
        @endif
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary login__button">Login</button>
      </div>
      <div class="login-options">
        <div class="remember-me">
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </div>
        <div class="forgot-password">
          <a class="" href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
      </div>
    </form>
  </div>
@endsection
