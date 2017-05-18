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
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('user.add.family') }}" method="post">
              <span class="section">Family Info</span>
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                  First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="first-name" name="first_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                  Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="last-name" name="last_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact">
                  Contact <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="contact" name="contact" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g 0912 1234567" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="relationship">
                  Relationship <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="relationship" name="relationship" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g Brother" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
