<aside class="aside">
  <div class="left_col scroll-view">
    <div class="navbar nav_title">
      <a href="{{ route('admin') }}" class="site_title">
        <img src="{{asset('images/logo.png')}}" alt=""> MPCI VO
      </a>
    </div>
    <div class="clearfix"></div>
    <div class="profile clearfix">
      <div class="profile_pic">
        <a href="{{route('admin')}}">
          <img src="http://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=mm&amp;r=g" alt="..." class="img-circle profile_img">
        </a>
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ $username }} <span class="caret"></span>
          </a>
        </h2>
      </div>
    </div>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li class="">
            <a href="#">
              <i class="fa fa-users" aria-hidden="true"></i> Administration
              <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu" style="display: none;">
              <li> <a href="{{ route('admin.modules') }}"> Modules </a> </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Support</h3>
        <ul class="nav side-menu">
          <li class="">
            <a>
              <i class="fa fa-list"></i> User Feedback
              <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu" style="display: none;">
              <li><a href="#"> Create Feedback </a></li>
              <li><a href="#"> Chat </a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav side-menu">
          <li class="">
            <a>
              <i class="fa fa-info-circle" aria-hidden="true"></i> System Information
              <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu" style="display: none;">
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
      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</aside>
