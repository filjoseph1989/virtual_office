<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Recruitement</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a></li>
                  <li><a href="#">Settings 2</a></li>
                </ul>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="clearfix container-fluid row">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('recruitement.add') }}">
                  <div class="tile-stats">
                    <div class="count">1</div>
                    <h3>Add New Employee</h3>
                    <p>Click here to add new employee.</p>
                  </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="#">
                  <div class="tile-stats">
                    <div class="count">2</div>
                    <h3>List of Department</h3>
                    <p>Click here to view the list of department.</p>
                  </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="#">
                  <div class="tile-stats">
                    <div class="count">3</div>
                    <h3>List of Employee</h3>
                    <p>Click here to view the list of employee.</p>
                  </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="#">
                  <div class="tile-stats">
                    <div class="count">4</div>
                    <h3>Choose</h3>
                    <p>Choose other you'd like to add.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="clearfix container-fluid row">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('recruitement.add.department') }}">
                  <div class="tile-stats">
                    <div class="count">5</div>
                    <h3>Add Department</h3>
                    <p>Click here to add new department.</p>
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
