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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=0.10">

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

    @include('users.sidebar')

    @yield ('content')

    <script src="{{ asset('js/jquery.min.js') }}?v=3.2.1" charset="utf-8"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/jquery.tagsinput.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/bootstrap.js') }}?v=3.3.7" charset="utf-8"></script>
    <script type="text/javascript">
      $('#position-list').DataTable();
      $('#employee-list').DataTable();
      $('#department-list').DataTable();
      $('#add-modules').tagsInput();
    </script>
  </body>
</html>
