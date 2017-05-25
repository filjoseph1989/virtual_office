@extends ('layouts.admin')

@section ('content')
  <div class="main_container">
    @include ('users.nav')

    @if (! isset($content))
      @include('layouts.content-admin')
    @else
      @include($content)
    @endif

  </div>
@endsection
