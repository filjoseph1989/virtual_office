<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Family;
use App\Models\Cities;
use App\Models\Country;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Education;
use App\Models\Department;
use App\Mail\UserEmail;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;

class EmployeeController extends Controller
{
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
    $result             = $request->only(['position_id', 'department_id', 'first_name', 'last_name', 'email', 'gender', 'birthday', 'street', 'city', 'country', 'zipcode', 'contact', 'tin', 'sss', 'philhealth', 'pag_ibig']);
    $result['password'] = bcrypt('password');

    $users = User::create($result);

    \Mail::to($users)->send(new UserEmail);

    return redirect()->route('recruitment.add')
      ->with('status', 'Successfuly added new employee');
  }

  /**
   * Store the family information
   *
   * @param  Request $request
   * @return \Illuminate
   */
  public function storeFamilyInfo(Request $request)
  {
    $result = $request->only(['user_id', 'first_name', 'last_name', 'contact', 'relationship']);

    Family::create($result);
    return redirect()->route('recruitment.add.family')
      ->with('familyStatus', 'Successfuly added family information');
  }

  /**
   * Store the education data
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeEducationInfo(Request $request)
  {
    $receive = $request->only(['user_id', 'degree_id', 'course_id', 'school', 'street', 'city', 'country', 'graduated_at']);
    $receive['user_id'] = 1;

    if (Education::create($receive)->wasRecentlyCreated) {
      return redirect()->route('recruitment.edit.profile')
        ->with('educationStatus', 'Successfuly added new Education');
    }
  }

  /**
   * Show the form for adding new employee
   *
   * @return \Illuminate\Http\Response
   */
  public function showAddForm()
  {
    $data = parent::getDetails([
      'cities'     => Cities::orderBy('name', 'ASC')->get(),
      'countries'  => Country::orderBy('name', 'ASC')->get(),
      'department' => Department::all(),
      'content'    => 'users.recruitment.employee-add'
    ]);

    return view('users.user-dashboard', $data);
  }

  /**
   * Display the family form
   *
   * @return \Illuminate\Http\Response
   */
  public function showEditProfileForm()
  {
    $data = parent::getDetails([
      'degree'  => Degree::all(),
      'course'  => Course::orderBy('name', 'ASC')->get(),
      'cities'  => Cities::orderBy('name', 'ASC')->get(),
      'countries' => Country::all(),
      'department' => Department::all(),
      'content' => "users.recruitment.edit-profile",
    ]);

    return view('users.user-dashboard', $data);
  }

  /**
   * Display the list of employee
   *
   * @return
   */
  public function showEmployeeList()
  {
    $data = parent::getDetails([
      'employee' => User::all(),
      'content'  => 'users.recruitment.employee-table'
    ]);

    return view('users.user-dashboard', $data);
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
