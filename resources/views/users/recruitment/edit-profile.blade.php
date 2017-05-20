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
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('user.posts') }}" method="post">
              <span class="section">Personal Info</span>
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
                  <input id="name" name="first_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g John" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                  Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="last-name" name="last_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Doe" required="required" type="text">
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
                  <select class="form-control col-md-7 col-xs-12" name="department_id">
                    <option value="0">Select</option>
                    <option value="1">Management Information System</option>
                    <option value="2">Human Resources</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">
                  Position <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="position_id">
                    <option value="0">Select</option>
                    <option value="1">Web Designer</option>
                    <option value="2">Web Developer</option>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">
                  City
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="city" class="form-control col-md-7 col-xs-12" id="city">
                    <option value="0">Select</option>
                    <?php foreach ($cities as $key => $cities_value): ?>
                      <option value="{{ $cities_value->id}}">{{ $cities_value->name }}</option>
                    <?php endforeach; ?>
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
                    <option value="1">Philippines</option>
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
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('user.add.family') }}" method="post">
              <span class="section">Family Info</span>
              @if (session('familyStatus'))
                <div class="alert alert-success">
                  {{ session('familyStatus') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                  First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="first-name" name="first_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g John" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                  Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="last-name" name="last_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="both name(s) e.g Doe" required="required" type="text">
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
            <form class="form-horizontal form-label-left" novalidate="" action="{{ route('recruitment.edit.profile') }}" method="post">
              <span class="section">Education Info</span>
              @if (session('educationStatus'))
                <div class="alert alert-success">
                  {{ session('educationStatus') }}
                </div>
              @endif
              {{ csrf_field() }}
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="level">
                  Level <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" id="level" name="degree_id">
                    <option value="0">Select Degree</option>
                    <?php foreach ($degree as $key => $degree_value): ?>
                      <option value="{{ $degree_value->id }}">{{ $degree_value->name }}</option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="course">
                  Course <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" id="course" name="course_id">
                    <option value="0">Select Course</option>
                    <?php foreach ($course as $key => $courseValue): ?>
                      <option value="<?php echo "{$courseValue->id}"; ?>"><?php echo "{$courseValue->name}"; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="school">
                  School Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="school" name="school" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="e.g John Hopkins University" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="education-street">
                  Street
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="education-street" name="street" placeholder="Street" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="education-city">
                  City
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="city" class="form-control col-md-7 col-xs-12" id="city" id="education-city">
                    <option value="0">Select City</option>
                    <?php foreach ($cities as $key => $cities_value): ?>
                      <option value="<?php echo "{$cities_value->id}"; ?>"><?php echo "{$cities_value->name}"; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="education-country">
                  Country
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="country" id="education-country">
                    <option value="0">Select Country</option>
                    <?php foreach ($country as $key => $value): ?>
                      <option value="<?php echo "{$value->id}"; ?>"><?php echo "{$value->name}"; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">
                  Graduated
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="year-graduated" name="graduated_at" placeholder="e.g 2015" class="form-control col-md-7 col-xs-12">
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