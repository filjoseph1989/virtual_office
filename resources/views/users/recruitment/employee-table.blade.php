<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <ol class="breadcrumb" style="margin-top: 70px;">
          <li><a href="{{ route('recruitment') }}">recruitment</a></li>
          <li class="active">list of employee</li>
        </ol>
        <div class="x_panel">
          <div class="x_title">
            <h2>Recruitment</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
              <!--
              Issue 15
              <li class="dropdown">
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
              <table class="table table-bordered employee-list" id="employee-list">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Employee Name</th>
                    <th class="department-list__action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $key = 1; ?>
                  @foreach ($employee as $value)
                    <tr>
                      <td scope="row">{{ $key++ }}</td>
                      <td>{{ ucfirst($value->first_name) }} {{ ucfirst($value->last_name) }}</td>
                      <td class="department-list__action">
                        <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Employee"></i></a>
                        <a href="{{ route('recruitment.edit.profile', $value->id) }}"><i class="fa fa-pencil" aria-hidden="true" title="Edit Employee Name"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <a href="{{ route('recruitment.add') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> New
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
