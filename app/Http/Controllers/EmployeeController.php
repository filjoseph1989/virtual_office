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
   * Change the user password
   * @return [type] [description]
   */
  public function storeNewPassword(Request $request)
  {
    if (empty($request->new_password)) {
      return redirect()->route('recruitment.edit.profile', $request->id)
        ->with('passwordWarning', 'Failed to change password');
    }

    $users           = User::find($request->id);
    $users->password = bcrypt($request->new_password);

    if ($users->save()) {
      return redirect()->route('recruitment.edit.profile', $request->id)
        ->with('passwordStatus', 'Successfuly changed password');
    } else {
      return redirect()->route('recruitment.edit.profile', $request->id)
        ->with('passwrodWarning', 'Failed to change password');
    }
  }

  /**
   * Store the family information
   *
   * @param  Request $request
   * @return \Illuminate
   */
  public function storeFamilyInfo(Request $request)
  {
    $result  = $request->only(['user_id', 'first_name', 'last_name', 'contact', 'relationship']);

    if (Family::where('user_id', $request->user_id)->exists()) {
      $user_id = Family::getFamily($request->user_id)[0]->id;
      $family  = Family::find($user_id);

      $family->user_id      = $request->user_id;
      $family->first_name   = $request->first_name;
      $family->last_name    = $request->last_name;
      $family->contact      = $request->contact;
      $family->relationship = $request->relationship;
      $family->save();

      return redirect()->route('recruitment.edit.profile', $request->user_id)
        ->with('familyStatus', 'Successfuly updated family information');
    }

    if (Family::create($result)->wasRecentlyCreated) {
      return redirect()->route('recruitment.edit.profile', $request->user_id)
        ->with('familyStatus', 'Successfuly added family information');
    }
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

    if (Education::where('user_id', $request->user_id)->exists()) {
      $user_id   = Education::getEducation($request->user_id)[0]->id;
      $education = Education::find($user_id);

      $education->user_id      = $request->user_id;
      $education->degree_id    = $request->degree_id;
      $education->course_id    = $request->course_id;
      $education->school       = $request->school;
      $education->street       = $request->street;
      $education->city         = $request->city;
      $education->country      = $request->country;
      $education->graduated_at = $request->graduated_at;
      $education->save();

      return redirect()->route('recruitment.edit.profile', $request->user_id)
        ->with('educationStatus', 'Successfuly updated education information');
    }

    if (Education::create($receive)->wasRecentlyCreated) {
      return redirect()->route('recruitment.edit.profile', $request->user_id)
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
   * Display the edit form for user
   *
   * @return \Illuminate\Http\Response
   */
  public function showEditProfileForm($id = 0)
  {
    $data = parent::getDetails([
      'users'      => User::find($id),
      'degree'     => Degree::all(),
      'course'     => Course::orderBy('name', 'ASC')->get(),
      'cities'     => Cities::orderBy('name', 'ASC')->get(),
      'countries'  => Country::all(),
      'department' => Department::all(),
      'family'     => Family::getFamily($id),
      'education'  => Education::getEducation($id),
      'content'    => "users.recruitment.edit-profile",
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
