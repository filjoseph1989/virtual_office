<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="x_panel">
        <div class="x_title">
          <h2>User Profile</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a></li>
              </ul>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <div class="profile_img">
              <div id="crop-avatar">
                <img class="img-responsive avatar-view" src="{{ asset('images/logo.png') }}" alt="Avatar" title="Change the avatar">
              </div>
            </div>
            <h3>{{ ucfirst($username) }}</h3>
            <ul class="list-unstyled user_data">
              <li><i class="fa fa-map-marker user-profile-icon"></i> Bonifacio Street, Davao City, Philippines </li>
              <li> <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer </li>
              <li class="m-top-xs">
                <i class="fa fa-external-link user-profile-icon"></i>
                <a href="#" target="_blank">www.example.com</a>
              </li>
            </ul>
            <a href="{{ route('recruitment.edit.profile') }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
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
                <h1>Hello, {{ Auth::user()->first_name }}</h1>
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
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                </li>
                <li role="presentation" class="">
                  <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                </li>
                <li role="presentation" class="">
                  <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                  <ul class="messages">
                    <li>
                      <img src="{{ asset('images/logo.png') }}" class="avatar" alt="Avatar">
                      <div class="message_date">
                        <h3 class="date text-info">24</h3>
                        <p class="month">May</p>
                      </div>
                      <div class="message_wrapper">
                        <h4 class="heading">Cheen Namizakee</h4>
                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                        <p class="url">
                          <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                          <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                        </p>
                      </div>
                    </li>
                    <li>
                      <img src="{{ asset('images/logo.png') }}" class="avatar" alt="Avatar">
                      <div class="message_date">
                        <h3 class="date text-error">21</h3>
                        <p class="month">May</p>
                      </div>
                      <div class="message_wrapper">
                        <h4 class="heading">Uchiha Fil</h4>
                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                        <p class="url">
                          <span class="fs1" aria-hidden="true" data-icon=""></span>
                          <a href="#" data-original-title="">Download</a>
                        </p>
                      </div>
                    </li>
                    <li>
                      <img src="{{ asset('images/logo.png') }}" class="avatar" alt="Avatar">
                      <div class="message_date">
                        <h3 class="date text-info">24</h3>
                        <p class="month">May</p>
                      </div>
                      <div class="message_wrapper">
                        <h4 class="heading">Joey Senju</h4>
                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                        <p class="url">
                          <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                          <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                        </p>
                      </div>
                    </li>
                    <li>
                      <img src="{{ asset('images/logo.png') }}" class="avatar" alt="Avatar">
                      <div class="message_date">
                        <h3 class="date text-error">21</h3>
                        <p class="month">May</p>
                      </div>
                      <div class="message_wrapper">
                        <h4 class="heading">Dexter Haruno</h4>
                        <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                        <br>
                        <p class="url">
                          <span class="fs1" aria-hidden="true" data-icon=""></span>
                          <a href="#" data-original-title="">Download</a>
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <table class="data table table-striped no-margin">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Client Company</th>
                        <th class="hidden-phone">Hours Spent</th>
                        <th>Contribution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>New Company Takeover Review</td>
                        <td>Deveint Inc</td>
                        <td class="hidden-phone">18</td>
                        <td class="vertical-align-mid">
                          <div class="bar bg-blue--1 bar-9">
                            <div class=""></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>New Partner Contracts Consultanci</td>
                        <td>Deveint Inc</td>
                        <td class="hidden-phone">13</td>
                        <td class="vertical-align-mid">
                          <div class="bar bg-blue--1 bar-9">
                            <div class=""></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Partners and Inverstors report</td>
                        <td>Deveint Inc</td>
                        <td class="hidden-phone">30</td>
                        <td class="vertical-align-mid">
                          <div class="bar bg-blue--1 bar-9">
                            <div class=""></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>New Company Takeover Review</td>
                        <td>Deveint Inc</td>
                        <td class="hidden-phone">28</td>
                        <td class="vertical-align-mid">
                          <div class="bar bg-blue--1 bar-9">
                            <div class=""></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                    letterpress, commodo enim craft beer mlkshk </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
