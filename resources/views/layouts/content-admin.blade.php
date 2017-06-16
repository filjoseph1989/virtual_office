<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="x_panel">
        <div class="x_title">
          <h2>Admin Profile</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="bs-example" data-example-id="simple-jumbotron">
              <div class="jumbotron">
                <h1>Hello, {{ ucfirst(Auth::user()->first_name) }}</h1>
                <p>Welcome back to MPCI virtual office.</p>
              </div>
            </div>
            <div class="clearfix container-fluid row">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{ route('admin.position.list') }}">
                  <div class="tile-stats">
                    <div class="count">1</div>
                    <h3>List of Position</h3>
                    <p>Click here to view list of position</p>
                  </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{ route('admin.modules.list') }}">
                  <div class="tile-stats">
                    <div class="count">2</div>
                    <h3>Show Modules</h3>
                    <p>Click here to display module list</p>
                  </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{ route('admin.authority.list') }}">
                  <div class="tile-stats">
                    <div class="count">3</div>
                    <h3>Authorities</h3>
                    <p>Click here to display the list authority</p>
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
