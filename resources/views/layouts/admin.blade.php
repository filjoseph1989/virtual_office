<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MPCI') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v=3.3.7">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}?v=4.7.0">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=0.16">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(), ]) ?>;
    </script>
  </head>
  <body class="nav-md">

    @include('admins.sidebar')

    @yield ('content')

    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{ asset('js/jquery.min.js') }}?v=3.2.1" charset="utf-8"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/sweetalert2.js') }}?v=2" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}?v=0.11" charset="utf-8"></script>

    <script type="text/javascript">
      $('#position-list').DataTable();
      $('#module-list').DataTable();
      $('#sub-module-list-modal').DataTable();
    </script>

    @yield ('footer')
  </body>
</html>
