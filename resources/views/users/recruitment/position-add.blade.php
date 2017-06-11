<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <ol class="breadcrumb" style="margin-top: 70px;">
          <li><a href="{{ route('recruitment') }}">recruitment</a></li>
          <li class="active">add position</li>
        </ol>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Position</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('recruitment.add.position') }}" method="post">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position-name">
                  Position Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="position-name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Sales Manager" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                  <a href="{{ route('recruitment.list.position') }}" class="btn btn-success">
                    <i class="fa fa-table" aria-hidden="true"></i> Show
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
