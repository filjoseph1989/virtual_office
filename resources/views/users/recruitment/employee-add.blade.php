<div class="container-fluid">
  <div class="side-body padding-top">
    <div class="page-content">
      <div class="clearfix container-fluid row">
        <ol class="breadcrumb" style="margin-top: 70px;">
          <li><a href="{{ route('recruitment') }}">recruitment</a></li>
          <li class="active">add employee</li>
        </ol>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add New Eemployee</h2>
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
            <form class="form-horizontal form-label-left" action="{{ route('user.posts') }}" method="post">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                  First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" name="first_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                  Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="last-name" name="last_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                  Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="email" placeholder="e.g john@email.com" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">
                  Department <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="department_id" id="department">
                    <option value="0">Select Department</option>
                    @foreach ($department as $dvalue):
                      <option value="{{ $dvalue->id }}" class="drop-down-department">{{ $dvalue->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">
                  Position <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="position_id" id="position">
                    <option value="0">Select Position</option>
                    <!-- Ajax Job Here -->
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">
                  Gender <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="gender">
                    <option value="0">Select</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">
                  Birthday
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="birthday" name="birthday" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street">
                  Street
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="street" name="street" placeholder="Street" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <!-- Issue 27 -->
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">
                  City
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="city" class="form-control col-md-7 col-xs-12" id="city">
                    <option value="0">Select</option>
                    @foreach ($cities as $cvalue):
                      <option value="{{ $cvalue->id }}" class="city-name">{{ $cvalue->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">
                  Country
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="country" id="country">
                    <option value="0">Select</option>
                    @foreach ($countries as $cvalue):
                      <option value="{{ $cvalue->id }}" class="city-name">{{ $cvalue->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="zipcode">
                  Zipcode
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="zipcode" name="zipcode" placeholder="e.g 8000" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact">
                  Contact
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="tel" id="contact" name="contact" placeholder="e.g 0912 123 45 67" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tin">
                  TIN
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="tin" name="tin" placeholder="e.g 000 000 000" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sss">
                  SSS
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="sss" name="sss" placeholder="e.g 00 0000000 0" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phil-health">
                  Phil-Health
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="phil-health" name="philhealth" placeholder="e.g 00 000000000 0" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pag-ibig">
                  Pag-Ibig
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="pag-ibig" name="pag_ibig" placeholder="e.g 0000 0000 0000" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button id="send" type="submit" class="btn btn-success">
                    <i class="fa fa-paper-plane"></i> Send
                  </button>
                  <a href="{{ route('recruitment.list.employee') }}" class="btn btn-success">
                    <i class="fa fa-table" aria-hidden="true"></i> List of Employees
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
