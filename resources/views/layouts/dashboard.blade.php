<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}?v=0.2">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}?v=0.2">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}?v=0.3">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}?v=0.2">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(), ]) ?>;
  </script>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      @yield('sidebar')

      @yield('top-navigation')

      @yield('content')

    </div>
  </div>

  @yield('footer')

</body>
</html>
