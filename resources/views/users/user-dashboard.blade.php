@extends ('layouts.master')

@section ('content')

  <div class="main_container">
    @include ('users.nav')

    @if (! isset($content))
      @include('layouts.content-user')
    @else
      @include($content)
    @endif  

  </div>

@endsection
