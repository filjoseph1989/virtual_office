<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of All Position</h2>
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
              <table class="table table-striped table-bordered dataTable no-footer position-list" id="position-list">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Position Name</th>
                    <th class="department-list__action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($position as $key => $value): ?>
                    <tr>
                      <td scope="row">{{ $key + 1  }}</td>
                      <td>{{ ucfirst($value->name) }}</td>
                      <td class="department-list__action">
                        <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Position"></i></a>
                        <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Position Name"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
