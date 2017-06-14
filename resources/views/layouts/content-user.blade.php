<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="x_panel">
        <div class="x_title">
          <h2>User Profile</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
            <!--
            Issue 15
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a></li>
              </ul>
            </li> -->
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <img class="img-responsive avatar-view" src="{{ asset('images/logo.png') }}" alt="Avatar" title="Change the avatar">
                </div>
              </div>
              <h3>{{ $users->name }}</h3>
              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> {{ ucfirst(strtolower($users->street)) }}, {{ $city }}, {{ $country }} </li>
                <li> <i class="fa fa-briefcase user-profile-icon"></i> {{ $position }} </li>
                <li class="m-top-xs">
                  <i class="fa fa-external-link user-profile-icon"></i>
                  <a href="#" target="_blank">www.example.com</a>
                </li>
              </ul>
              <a href="{{ route('recruitment.edit.profile', $users->id) }}" class="btn btn-success">
                <i class="fa fa-edit m-right-xs"></i> Edit Profile
              </a>
              <h4>Skills</h4>
              <ul class="list-unstyled user_data">
                <li>
                  <p>Web Applications</p>
                  <div class="bar bg-blue--1 bar-9">
                    <div class=""></div>
                  </div>
                </li>
                <li>
                  <p>Web Design</p>
                  <div class="bar bg-blue--1 bar-8">
                    <div class=""> </div>
                  </div>
                </li>
                <li>
                  <p>Automation and Testing</p>
                  <div class="bar bg-blue--1 bar-9">
                    <div class=""> </div>
                  </div>
                </li>
                <li>
                  <p>UI UX</p>
                  <div class="bar bg-blue--1 bar-6">
                    <div class=""> </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div class="bs-example" data-example-id="simple-jumbotron">
                <div class="jumbotron">
                  <h1>Hello, {{ $username }}<h1>
                    <p>Welcome back to MPCI virtual office.</p>
                  </div>
                </div>
                <div class="clearfix container-fluid row">
                  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a href="{{ route('recruitment.add') }}">
                      <div class="tile-stats">
                        <div class="count">1</div>
                        <h3>Add New Employee</h3>
                        <p>Click here to add new employee.</p>
                      </div>
                    </a>
                  </div>
                  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a href="{{ route('recruitment.list.department') }}">
                      <div class="tile-stats">
                        <div class="count">2</div>
                        <h3>List of Department</h3>
                        <p>Click here to view the list of department.</p>
                      </div>
                    </a>
                  </div>
                  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a href="{{ route('recruitment.list.employee') }}">
                      <div class="tile-stats">
                        <div class="count">3</div>
                        <h3>List of Employee</h3>
                        <p>Click here to view the list of employee.</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
