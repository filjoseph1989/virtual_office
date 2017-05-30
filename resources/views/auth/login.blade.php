<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name', 'MPCI') }}</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v=3.3.7">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}?v=0.6">
</head>
<body>
  @yield('content')
</body>
</html>
