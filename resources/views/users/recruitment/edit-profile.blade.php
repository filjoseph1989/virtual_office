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
                    <option value="1">Davao City</option>
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
            <form class="form-horizontal form-label-left" novalidate="" action="/" method="post">
              <span class="section">Education Info</span>
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
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
                    <option value="1"> Elementary </option>
                    <option value="2"> Secondary </option>
                    <option value="3"> College </option>
                    <option value="4"> Vocational </option>
                    <option value="5"> Master </option>
                    <option value="6"> Doctor </option>
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
                    <option value="4">
                      Agribusiness/Management </option>
                    <option value="11">
                      Agricultural Economics </option>
                    <option value="3">
                      Agricultural Engineering </option>
                    <option value="5">
                      Agricultural Entrepreneurship </option>
                    <option value="6">
                      Agricultural Technology </option>
                    <option value="7">
                      Agriculture </option>
                    <option value="1">
                      Agro-Forestry </option>
                    <option value="42">
                      Animation </option>
                    <option value="62">
                      Art Education </option>
                    <option value="38">
                      Atmospheric Science </option>
                    <option value="90">
                      BA Broadcasting </option>
                    <option value="88">
                      BA Communication </option>
                    <option value="89">
                      BA Journalism </option>
                    <option value="46">
                      Bachelor in Library Science &amp; Information System M </option>
                    <option value="57">
                      Bachelor of Physical Education major in School PE </option>
                    <option value="27">
                      Bio Chemical Engineering </option>
                    <option value="17">
                      Biomedical Engineering </option>
                    <option value="77">
                      BS Accountancy </option>
                    <option value="36">
                      BS Applied Mathematics </option>
                    <option value="33">
                      BS Applied Physics </option>
                    <option value="82">
                      BS Architecture </option>
                    <option value="30">
                      BS Biology </option>
                    <option value="31">
                      BS Chemistry </option>
                    <option value="44">
                      BS Computer Science </option>
                    <option value="91">
                      BS Development Communication </option>
                    <option value="35">
                      BS Earth Science </option>
                    <option value="10">
                      BS Food Technology </option>
                    <option value="34">
                      BS Geology </option>
                    <option value="50">
                      BS in Education - Chemistry </option>
                    <option value="52">
                      BS in Education - English </option>
                    <option value="47">
                      BS in Education - Mathematics </option>
                    <option value="49">
                      BS in Education - Physics </option>
                    <option value="51">
                      BS in Education - Reading </option>
                    <option value="48">
                      BS in Education - Science </option>
                    <option value="45">
                      BS Information System Management </option>
                    <option value="32">
                      BS Marine Biology/Science </option>
                    <option value="87">
                      BS Marine Transportation </option>
                    <option value="28">
                      BS Mathematics </option>
                    <option value="68">
                      BS Nutrition </option>
                    <option value="71">
                      BS Philosophy </option>
                    <option value="29">
                      BS Physics </option>
                    <option value="73">
                      BS Psychology </option>
                    <option value="70">
                      BS Religious Education </option>
                    <option value="74">
                      BS Social Work </option>
                    <option value="37">
                      BS Statistics/Applied Statistics </option>
                    <option value="72">
                      BS Theology </option>
                    <option value="78">
                      Business Data Outsourcing </option>
                    <option value="79">
                      Business Process Outsourcing </option>
                    <option value="92">
                      Chemical Engineering </option>
                    <option value="25">
                      Civil Engineering </option>
                    <option value="16">
                      Computer Engineering </option>
                    <option value="80">
                      Construction Management </option>
                    <option value="69">
                      Creative and Performing Arts </option>
                    <option value="58">
                      Early Childhood Education </option>
                    <option value="53">
                      Educational Media/Technology </option>
                    <option value="19">
                      Electrical Engineering </option>
                    <option value="14">
                      Electronics and Communication Engineering </option>
                    <option value="13">
                      Electronics Engineering </option>
                    <option value="84">
                      Environmental Planning </option>
                    <option value="59">
                      Environmental Planning (for teachers) </option>
                    <option value="39">
                      Environmental Science </option>
                    <option value="85">
                      Fine Arts </option>
                    <option value="8">
                      Fisheries </option>
                    <option value="18">
                      Geodetic Engineering </option>
                    <option value="22">
                      Goelogical Engineering </option>
                    <option value="76">
                      Guidance and Counseling </option>
                    <option value="63">
                      Health Education </option>
                    <option value="75">
                      Human Development </option>
                    <option value="55">
                      Human Kinetics </option>
                    <option value="24">
                      Industrial Engineering </option>
                    <option value="40">
                      Information Technology and Computing Studies </option>
                    <option value="83">
                      Interior Design </option>
                    <option value="93">
                      Landscape Architecture </option>
                    <option value="60">
                      MAPEH </option>
                    <option value="12">
                      Mechanical Engineering </option>
                    <option value="66">
                      Medical Technology </option>
                    <option value="15">
                      Metallurgical Engineering </option>
                    <option value="20">
                      Meteorological Engineering </option>
                    <option value="21">
                      Mining Engineering </option>
                    <option value="41">
                      Multimedia </option>
                    <option value="61">
                      Music Education </option>
                    <option value="26">
                      Petroleum Engineering </option>
                    <option value="64">
                      Pharmacy </option>
                    <option value="56">
                      Physical Education and Sports Science </option>
                    <option value="67">
                      Physical Therapy </option>
                    <option value="43">
                      Programming </option>
                    <option value="65">
                      Radiology Technology </option>
                    <option value="23">
                      Sanitary Engineering </option>
                    <option value="54">
                      Special Education (SPED) </option>
                    <option value="81">
                      Tourism </option>
                    <option value="86">
                      Urban Planning </option>
                    <option value="2">
                      Veterinatry Medicine </option>
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
                    <option value="0">Select</option>
                    <option value="1">Davao City</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="education-country">
                  Country
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="country" id="education-country">
                    <option value="0">Select</option>
                    <option value="1">Philippines</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">
                  Year Graduated
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="year-graduated" name="year" placeholder="e.g 2015" class="form-control col-md-7 col-xs-12">
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
