<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Form</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
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
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('admin.submodules.add') }}" method="post">
              <span class="section">Add New Sub-Module</span>
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="module-id">
                  Module Name
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="module_id" id="module-id">
                    <option>Choose Module</option>
                    <?php foreach ($module as $key => $moduleValue): ?>
                      <option value="{{ $moduleValue->id }}">{{ $moduleValue->name }}</option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
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
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                  <a href="{{ route('admin.submodules.list') }}" class="btn btn-success">
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
