<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <ol class="breadcrumb" style="margin-top: 70px;">
        <li><a href="{{ route('admin.modules') }}">authority</a></li>
        <li class="active">list of authority</li>
      </ol>
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Authority Table</h2>
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
                  <table class="table table-bordered" id="authorities-list">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Authority Name</th>
                        <th class="authority-list__action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($authorities as $akey => $avalue): ?>
                        <tr>
                          <td scope="row">{{ $akey +1 }}</td>
                          <td scope="row">{{ $avalue->name }}</td>
                          <td scope="row" class="authority-list__action">
                            <a href="#"><i class="fa fa-times" aria-hidden="true" title="Delete Authority"></i></a>
                            <a href="#"><i class="fa fa-pencil" aria-hidden="true" title="Edit Authority"></i></a>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('footer')
  <script type="text/javascript">
    $('#authorities-list').DataTable();
  </script>
@endsection
