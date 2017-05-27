<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ route('admin.modules.list') }}">{{ $moduleName->name }}</a></li>
            <li class="active">Configuration</li>
          </ol>
        </div>
      </div>
      <div class="x_panel">
        <div class="x_title">
          <h2>Sub-Module Table</h2>
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
          <div class="clearfix container-fluid row">
            <table class="table table-bordered department-list" id="sub-module-list">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Sub-Module Name</th>
                  <th>Sub-Module Route Name</th>
                  <th class="action">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($submodules as $key => $value): ?>
                  <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td scope="row">{{ $value['name'] }}</td>
                    <td scope="row">{{ $value['route'] }}</td>
                    <td scope="row" class="action">
                      <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Sub-Module"></i></a>
                      <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Sub-Module Name"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <a href="{{ route('admin.submodules.create') }}" class="btn btn-success">
              <i class="fa fa-plus" aria-hidden="true"></i> New
            </a>
          </div>
        </div>
      </div>
      <div class="x_panel">
        <div class="x_title">
          <h2>Add Position</h2>
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
          <div class="clearfix container-fluid row">
            <form class="" action="" method="post">
              <div class="control-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="tags" id="admin-positions-tags" placeholder="" value="Sample">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix container-fluid row">
            <a href="#" class="btn btn-success">
              <i class="fa fa-paper-plane" aria-hidden="true"></i> Send
            </a>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#position-modal">Show Positions</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Position List</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered department-list" id="sub-module-list-modal">
          <thead>
            <tr>
              <th>#</th>
              <th>Position Name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($position as $key => $value): ?>
              <tr>
                <td scope="row">{{ $key + 1 }}</td>
                <td scope="row">{{ $value['name'] }}</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
