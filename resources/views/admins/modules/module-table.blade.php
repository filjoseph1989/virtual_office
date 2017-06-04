<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li class="active">Module</li>
          </ol>
        </div>
      </div>
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Module Table</h2>
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
            <div class="clearfix container-fluid">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered" id="module-list">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Module Name</th>
                        <th class="department-list__action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($module as $key => $value): ?>
                        <tr>
                          <td scope="row">{{ $key + 1}}</td>
                          <td scope="row">{{ $value->name }}</td>
                          <td scope="row" class="department-list__action">
                            <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Module"></i></a>
                            <a href="#" class="a-module-modal-edit" data-module-id="{{ $value->id }}" data-module-name="{{ $value->name }}" data-toggle="modal" data-target="#module-modal-edit">
                              <i class="fa fa-pencil" aria-hidden="true" title="Edit Module Name"></i>
                            </a>
                            <a href="{{ route('admin.submodules.list', $value->id) }}">
                              <i class="fa fa-wrench" aria-hidden="true" title="Configure Module"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#module-modal">
                    <i class="fa fa-plus" aria-hidden="true"></i> New
                  </button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sub-module-list">
                    <i class="fa fa-table" aria-hidden="true"></i> Show Sub-Module
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="module-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Add Module</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('admin.modules.add') }}" method="post">
          {{ csrf_field() }}
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="module-name">
              Module Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="module-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Accounting" required="required" type="text">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> Send
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
<div class="modal fade" id="module-modal-edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="module-modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('admin.modules.edit') }}" method="post">
          {{ csrf_field() }}
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edit-module-name">
              Module Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" id="edit-module-id" name="id">
              <input id="edit-module-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Accounting" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edit-module-icon">
              Module Icon
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="edit-module-icon" name="icon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g. fa fa-close" required="required" type="text">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> Send
              </button>
              <a id="fontawesome-icons" href="http://fontawesome.io/icons/" target="_blank" class="btn btn-success">
                <i class="fa fa-paper-plane"></i> List of Icons
              </a>
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
<div class="modal fade" id="sub-module-list" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Sub-Module List</h4>
      </div>
      <div class="modal-body">
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
            <?php foreach ($subModules as $key => $value): ?>
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->route }}</td>
                <td scope="row" class="action">
                  <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Sub-Module"></i></a>
                  <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Sub-Module Name"></i></a>
                </td>
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
