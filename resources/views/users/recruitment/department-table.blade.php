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
                        <a href="#" data-department-id="{{ $value->id }}" data-department-name="{{ $value->name }}" data-route="{{ route('recruitment.list.position.by.department', $value->id) }}" class="department-position" data-toggle="modal" data-target="#position">
                          <i class="fa fa-table" aria-hidden="true" title="Display Position Under This Department"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <a href="{{ route('recruitment.add.department') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> New
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
