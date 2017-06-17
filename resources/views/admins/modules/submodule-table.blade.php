<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ route('admin.modules.list') }}">modules</a></li>
            <li class="active">configuration</li>
          </ol>
        </div>
      </div>
      @if (session('status'))
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          </div>
        </div>
      @endif
      <div class="x_panel">
        <div class="x_title">
          <h2>Position Table</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a></li>
              </ul>
            </li> -->
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="clearfix container-fluid row">
            <table class="table table-bordered department-list" id="sub-module-position-list">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Position Name</th>
                  <th class="action">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($position_name as $key => $pn_value): ?>
                  <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td scope="row">{{ $pn_value->name }}</td>
                    <td scope="row" class="action">
                      <a href="#" data-id="{{ $pn_value->id }}"><i class="fa fa-times" aria-hidden="true" title="Delete Position in Module"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="x_panel">
        <div class="x_title">
          <h2>Sub-Module Table</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a></li>
              </ul>
            </li> -->
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sub-module-modal">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Sub-module
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#position-modal">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Position
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Position List</h4>
      </div>
      <div class="modal-body">
        <form class="" action="{{ route('admin.modules.add.position') }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="module_id" value="{{ $module->id }}">
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
                  <td scope="row"><input type="checkbox" name="position_id[]" value="{{ $value->id }}"> {{ $value['name'] }}</td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success" name="send">
            <i class="fa fa-paper-plane" aria-hidden="true"></i> Add
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub-module-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Add New Sub Module</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('admin.submodules.add') }}" method="post">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          {{ csrf_field() }}
          <input type="hidden" name="module_id" value="{{ $module->id }}">
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub-module-name">
              Sub Module Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="sub-module-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Recruitment" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub-module-route">
              Sub Module Route
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="sub-module-route" name="route" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g route.name" required="required" type="text">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
