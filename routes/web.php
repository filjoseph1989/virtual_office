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

Route::get('/', 'HomeController@index');

/**
 * Authentication
 */
Auth::routes();
// Route::get('/login', 'HomeController@showLoginForm');
Route::name('home')->get('/home', 'HomeController@home');

/**
 * recruitment Area
 */
Route::name('recruitment')->get('/recruitment', 'HomeController@showRecruitemeneMenu');
Route::name('recruitment.add')->get('/recruitment/add', 'EmployeeController@showAddForm');
Route::name('recruitment.edit.profile')->get('/recruitment/edit-profile', 'EmployeeController@showEditProfileForm');
Route::name('recruitment.edit.profile')->post('/recruitment/edit-profile', 'EmployeeController@storeEducationInfo');
Route::name('recruitment.add.department')->get('/recruitment/add-department', 'DepartmentController@showAddDepartmentForm');
Route::name('recruitment.add.department')->post('/recruitment/add-department', 'DepartmentController@store');
Route::name('recruitment.add.position')->get('/recruitment/add-position', 'PositionController@index');
Route::name('recruitment.add.position')->post('/recruitment/add-position', 'PositionController@store');
Route::name('recruitment.list.department')->get('/recruitment/list-department', 'DepartmentController@showDepartmentList');
Route::name('recruitment.list.position.by.department')->post('/recruitment/list-position-by-department', 'DepartmentController@getPositonByDepartment');
Route::name('recruitment.list.position')->get('/recruitment/list-position', 'PositionController@showPositionList');
Route::name('recruitment.list.employee')->get('/recruitment/list-employee', 'EmployeeController@showEmployeeList');

/**
 * User group
 */
Route::name('user.posts')->post('/user/posts', 'EmployeeController@store');
Route::name('user.add.family')->post('/user/family', 'EmployeeController@storeFamilyInfo');

/**
 * Administration group
 */
Route::prefix('admin')->group(function() {
  Route::name('admin.modules')->get('/modules', 'AdminController@showAdminModuleMenu');
  Route::name('admin.modules.add')->post('/modules/add', 'AdminModulesController@storeNewModule');
  Route::name('admin.modules.edit')->post('/modules/edit', 'AdminModulesController@editModule');
  Route::name('admin.modules.add.position')->post('/modules/add/position', 'ModuleGroupController@store');
  Route::name('admin.modules.list')->get('/modules/list', 'AdminModulesController@index');
  Route::name('admin.submodules.add')->post('/submodules/add', 'AdminSubModulesController@store');
  Route::name('admin.submodules.list')->get('/submodules/list/{id}', 'AdminSubModulesController@showSubModuleList');
  Route::name('admin.position.list')->get('/position/list', 'PositionController@showAdminPositionList');
  Route::name('admin.position.list.autocomplete')->get('/position/autocomplete', 'PositionController@autocomplete');
  Route::name('admin.login')->get('/login', 'Auth\AdminLoginController@showLoginForm');
  Route::name('admin.login.submit')->post('/', 'Auth\AdminLoginController@login');
  Route::name('admin')->get('/', 'AdminController@index');
});
