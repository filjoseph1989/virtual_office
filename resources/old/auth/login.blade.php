<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Employee Login Form</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v=3.3.7">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}?v=0.3">
</head>
<body>
  <div class="body"></div>
  <div class="title-employee">
    <h2>Employee Login</h2>
  </div>
  <div class="header">
    <div>
      <a href="/">
        <img src="images/logo.png" class="login-logo">
      </a>
    </div>
  </div>
  <div class="login">
    <form class="" action="{{ route('login') }}" method="post">
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
</body>
</html>
