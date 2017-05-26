<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
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
            <div class="clearfix container-fluid row">
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
                        <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Module Name"></i></a>
                        <a href="{{ route('admin.submodules.list', $value->id) }}">
                          <i class="fa fa-table" aria-hidden="true" title="Display Sub Modules"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <a href="{{ route('admin.modules.add') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> New
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
