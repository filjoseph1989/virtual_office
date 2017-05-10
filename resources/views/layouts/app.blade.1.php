<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login </title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login-green.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script>
    window.Laravel = {
      !!json_encode([
        'csrfToken' => csrf_token(),
      ]) !!
    };
  </script>
</head>
<body class="">
  @yield('content')

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>
