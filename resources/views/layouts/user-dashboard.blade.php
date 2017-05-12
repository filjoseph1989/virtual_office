@extends('layouts.dashboard')

@section('sidebar')
  <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title">
          <span>MPCI VO User</span>
        </a>
      </div>
      <div class="clearfix"></div>
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="http://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=mm&amp;r=g" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span> </a></h2>
        </div>
      </div>
      <br/>
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li>
              <a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Reports
                <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li> <a href="#"> Daily Time Record </a> </li>
                <li> <a href="#"> Daily Accomplishment Report </a> </li>
              </ul>
            </li>
          </ul>
          <ul class="nav side-menu">
            <li>
              <a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Human Resources
                <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li> <a href="#"> Recruitment </a> </li>
                <li> <a href="#"> Payroll </a> </li>
                <li> <a href="#"> Training </a> </li>
                <li> <a href="#"> Administration </a> </li>
                <li> <a href="#"> Communication </a> </li>
              </ul>
            </li>
          </ul>
          <ul class="nav side-menu">
            <li>
              <a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Sales
                <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li> <a href="#"> List of Quotations </a> </li>
                <li> <a href="#"> List of Accounts </a> </li>
                <li> <a href="#"> List of Quotation Forms </a> </li>
                <li> <a href="#"> List of Job Order </a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>Support</h3>
          <ul class="nav side-menu">
            <li>
              <a>
                <i class="fa fa-list"></i> User Feedback
                <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li>
                  <a href="#"> Create Feedback </a>
                </li>
                <li>
                  <a href="#"> Chat </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav side-menu">
            <li>
              <a>
                <i class="fa fa-list"></i> System Information
                <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li>
                  <a href="#"> FAQ </a>
                </li>
                <li>
                  <a href="#"> Request Support </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
          <i class="fa fa-cog" aria-hidden="true"></i>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
          <i class="fa fa-arrows-alt" aria-hidden="true"></i>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
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
              <img src="http://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=mm&amp;r=g" alt="">{{ Auth::user()->name }}
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
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url(' #');">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                      <i class="voyager-group"></i>
                      <h4>23 users</h4>
                      <p>You have 23 users in your database. Click on button below to view all users.</p>
                      <a href="http://mpci-vo.dev/admin/users" class="btn btn-primary">View all users</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                      <i class="voyager-group"></i>
                      <h4>4 posts</h4>
                      <p>You have 4 posts in your database. Click on button below to view all posts.</p>
                      <a href="http://mpci-vo.dev/admin/posts" class="btn btn-primary">View all posts</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden; ">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                      <i class="voyager-group"></i>
                      <h4>1 page</h4>
                      <p>You have 1 page in your database. Click on button below to view all pages.</p>
                      <a href="http://mpci-vo.dev/admin/pages" class="btn btn-primary">View all pages</a>
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
