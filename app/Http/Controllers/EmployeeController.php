<?php

namespace App\Http\Controllers;

use App\User;
use App\Family;
use App\Education;
use App\Models\Cities;
use App\Models\Country;
use App\Models\Course;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() { }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() { }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $result = $request->only(['position_id', 'department_id', 'first_name', 'last_name', 'email', 'gender', 'birthday', 'street', 'city', 'country', 'zipcode', 'contact', 'tin', 'sss', 'philhealth', 'pag_ibig']);
    $result['password'] = bcrypt('password');

    User::create($result);

    return redirect()->route('recruitment.add')->with('status', 'Successfuly added new employee');
  }

  /**
   * Store the family information
   *
   * @param  Request $request
   * @return \Illuminate
   */
  public function storeFamilyInfo(Request $request) {
    $result = $request->only(['user_id', 'first_name', 'last_name', 'contact', 'relationship']);

    Family::create($result);

    return redirect()->route('recruitment.add.family')->with('status', 'Successfuly added new employee');
  }

  /**
   * Store the education data
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeEducationInfo(Request $request) {
    $receive = $request->only(['user_id', 'degree_id', 'course_id', 'school', 'street', 'city', 'country', 'graduated_at']);
    $receive['user_id'] = 1;

    Education::create($receive);
    return redirect()->route('recruitment.edit.profile')->with('status', 'Successfuly added new Education');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) { }

  /**
   * Show the form for adding new employee
   *
   * @return \Illuminate\Http\Response
   */
  public function showAddForm() {
    $content = "users.recruitment.add";
    return view('users.user-dashboard', compact('content'));
  }

  /**
   * Display the family form
   *
   * @return \Illuminate\Http\Response
   */
  public function showEditProfileForm()
  {
    // $course  = Course::orderBy('name', 'desc')->get();
    // $course  = new Course();
    // d($course->sortBy('name'));
    // exit;
    $cities  = Cities::all();
    $country = Country::all();
    $content = "users.recruitment.edit-profile";

    return view('users.user-dashboard', compact('content', 'country','cities', 'course'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id) { }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
      //
  }
}
