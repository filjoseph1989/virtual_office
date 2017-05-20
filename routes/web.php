<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  if (Auth::check() === false) {
    return view('auth.login');
  } else {
    return view('users.user-dashboard');
  }
});

Auth::routes();

/**
 * recruitment Area
 */
Route::name('recruitment')->get('/recruitment', 'HomeController@showRecruitemeneMenu');
Route::name('recruitment.add')->get('/recruitment/add', 'EmployeeController@showAddForm');
Route::name('recruitment.edit.profile')->get('/recruitment/edit-profile', 'EmployeeController@showEditProfileForm');
Route::name('recruitment.edit.profile')->post('/recruitment/edit-profile', 'EmployeeController@storeEducationInfo');
Route::name('recruitment.add.department')->get('/recruitment/add-department', 'DepartmentController@showAddDepartmentForm');
Route::name('recruitment.add.department')->post('/recruitment/add-department', 'DepartmentController@store');
Route::name('recruitment.add.position')->get('/recruitment/add-position', 'PositionController@show');
Route::name('recruitment.add.position')->post('/recruitment/add-position', 'PositionController@store');
Route::name('recruitment.list.department')->get('/recruitment/list-department', 'DepartmentController@showDepartmentList');

/**
 * User group
 */
Route::name('user.posts')->post('/user/posts', 'EmployeeController@store');
Route::name('user.add.family')->post('/user/family', 'EmployeeController@storeFamilyInfo');

/**
 * Home
 */
Route::name('home')->get('/home', 'HomeController@index');

/**
 * Administration group
 */
Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin');
});
