@extends ('layouts.master')

@section ('content')
  <div class="main_container">
    <p>admin</p>
    @include ('users.nav')

    @if (! isset($content))
      @include('layouts.content')
    @else
      @include($content)
    @endif

  </div>
@endsection
