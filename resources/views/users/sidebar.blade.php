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
              <li> <a href="{{ route('recruitement')}}"> Recruitment </a> </li>
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
