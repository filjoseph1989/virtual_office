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
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a></li>
                </ul>
              </li>
            </ul> -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="clearfix container-fluid">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              @if (count($errors) > 0)
                <div class="alert alert-warning">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
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
                            <a href="#">
                              <i class="fa fa-times" aria-hidden="true" title="Delete Authority"></i>
                            </a>
                            <a href="#" class="edit-authority-name" data-toggle="modal" data-target="#edit-authority" data-name="{{ $avalue->name }}" data-id="{{ $avalue->id }}">
                              <i class="fa fa-pencil" aria-hidden="true" title="Edit Authority"></i>
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
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-authority">
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

<div class="modal fade" id="add-authority" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal form-label-left" novalidate="" action="{{ route('admin.authority.add') }}" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="">Add Authority</h4>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="authority-name">Authority Name</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="authority-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Admin" required="required" type="text">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="send" type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit-authority" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form class="form-horizontal form-label-left" novalidate="" action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="edit-authority-title"></h4>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edit-authority-name">
              Authority Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" id="edit-authority-id" name="id">
              <input id="edit-authority-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Admin" required="required" type="text">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="send"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

@section('footer')
  <script type="text/javascript">
    $('#authorities-list').DataTable();
  </script>
@endsection
