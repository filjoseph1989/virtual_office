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
Route::prefix('recruitment')->group(function() {

  # Get
  Route::name('recruitment')->get('/', 'HomeController@showRecruitemeneMenu');
  Route::name('recruitment.add')->get('/add', 'EmployeeController@showAddForm');
  Route::name('recruitment.add.position')->get('/add-position', 'PositionController@index');
  Route::name('recruitment.add.position.modal')->get('/add-position-modal/{id}', 'PositionController@indexModal');
  Route::name('recruitment.add.department')->get('/add-department/{modal}', 'DepartmentController@showAddDepartmentForm');
  Route::name('recruitment.edit.profile')->get('/edit-profile', 'EmployeeController@showEditProfileForm');
  Route::name('recruitment.list.department')->get('/list-department', 'DepartmentController@showDepartmentList');
  Route::name('recruitment.list.position')->get('/list-position', 'PositionController@showPositionList');
  Route::name('recruitment.list.employee')->get('/list-employee', 'EmployeeController@showEmployeeList');

  # Post
  Route::name('recruitment.edit.profile')->post('/edit-profile', 'EmployeeController@storeEducationInfo');

  Route::name('recruitment.delete.department')->post('/delete-department', 'DepartmentController@destroy');
  Route::name('recruitment.add.department')->post('/add-department', 'DepartmentController@store');
  Route::name('recruitment.list.position.by.department')->post('/list-position-by-department', 'DepartmentController@getPositonByDepartment');
  Route::name('recruitment.edit.department')->post('/edit-department', 'DepartmentController@update');

  Route::name('recruitment.add.position')->post('/add-position', 'PositionController@store');
  Route::name('recruitment.edit.position.by.department')->post('/edit-position-by-department', 'PositionController@update');
  Route::name('recruitment.delete.position.by.department')->post('/delete-position-by-department', 'PositionController@destroy');
  Route::name('recruitment.delete.position')->post('/delete-list-position', 'PositionController@destroyPosition');
});

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
