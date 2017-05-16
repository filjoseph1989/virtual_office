@extends('layouts.dashboard')

@section ('sidebar')
  @include ('admin.sidebar')
@endsection

@section('top-navigation')
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="http://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=mm&amp;r=g" alt="">{{ Auth::user()->first_name }}
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li> <a href="#"> Profile </a> </li>
              <li> <a href="#"> Settings </a> </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out pull-right"></i> Log out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          <li role="presentation" class="dropdown">
            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="true">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">3</span>
            </a>
            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
              <li>
                <a>
                  <span class="image"><img src="#" alt="Profile Image"></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message"> Request for new password </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image"><img src="#" alt="Profile Image"></span>
                  <span>
                    <span>John Doe</span>
                    <span class="time">6 mins ago</span>
                  </span>
                  <span class="message"> Request for travel expense </span>
                </a>
              </li>
              <li>
                <a>
                  <span class="image"><img src="#" alt="Profile Image"></span>
                  <span>
                    <span>John Cover</span>
                    <span class="time">9 mins ago</span>
                  </span>
                  <span class="message"> Request for chat </span>
                </a>
              </li>
              <li>
                <div class="text-center">
                  <a>
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
@endsection

@section('content')
  <div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <div class="container-fluid">
          <div class="side-body padding-top">
            <div class="page-content">
              <div class="clearfix container-fluid row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url(' #');">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                      <i class="voyager-group"></i>
                      <h4>Manage Modules</h4>
                      <p>Click the button below for modules BREAD.</p>
                      <a href="#" class="btn btn-primary">Start</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                      <i class="voyager-group"></i>
                      <h4>Manage Authorities</h4>
                      <p> Click on button below to manage authorities.</p>
                      <a href="#" class="btn btn-primary">Start</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="pull-right">
      © 2017 MPCI VO. All Rights Reserved
    </div>
    <div class="clearfix"></div>
  </footer>
@endsection

@section('footer')
  <script>
  window.Laravel = {
    "locale": "en"
  }
  </script>
  <script src="{{asset('js/jquery-3.2.1.min.js')}}?v=3.2.1"></script>
  <script src="{{asset('js/bootstrap.min.js')}}?v=0.1"></script>
  <script src="{{asset('js/app.js')}}?v=0.1"></script>
  <script src="{{asset('js/admin.js')}}?v=0.1"></script>
@endsection
