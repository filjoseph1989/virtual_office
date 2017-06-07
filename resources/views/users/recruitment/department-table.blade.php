<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Recruitment</h2>
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
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              <table class="table table-bordered department-list" id="department-list">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Department Name</th>
                    <th>Department Color</th>
                    <th class="department-list__action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($department as $key => $value): ?>
                    <tr>
                      <td scope="row">{{ $key + 1  }}</td>
                      <td>{{ $value->name }}</td>
                      <td><div class="department-list__color" style="background-color: {{ strtolower($value->color) }};"></div>{{ $value->color }}</td>
                      <td class="department-list__action">
                        <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Department"></i></a>
                        <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Department Name"></i></a>
                        <a href="#" class="department-position"
                          data-department-id="{{ $value->id }}"
                          data-department-name="{{ $value->name }}"
                          data-position-new="{{ route('recruitment.add.position.modal', $value->id) }}"
                          data-route="{{ route('recruitment.list.position.by.department', $value->id) }}"
                          data-toggle="modal"
                          data-target="#position">
                            <i class="fa fa-table" aria-hidden="true" title="Display Position Under This Department"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#department-add">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="position" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="position-title"></h4>
      </div>
      <div class="modal-body" id="position-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered department-list" id="department-list">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Position Name</th>
                  <th class="department-list__action">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- content here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" id="position__add-new" class="btn btn-success">
          <i class="fa fa-plus" aria-hidden="true"></i> New
        </a>
        <a href="{{ route('recruitment.list.position') }}" class="btn btn-success">
          <i class="fa fa-table" aria-hidden="true"></i> All Positions
        </a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="department-add" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Add New Department</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('recruitment.add.department') }}" method="post">
          {{ csrf_field() }}
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department-name">
              Department Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="department-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Management Department" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department-color">
              Department Color <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="department-color" name="color" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Red" type="text">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane" aria-hidden="true"></i> Send
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
