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

Route::name('recruitement')->get('/recruitement', 'HomeController@showRecruitemeneMenu');
Route::name('recruitement.add')->get('/recruitement/add', 'EmployeeController@showAddForm');
Route::name('user.posts')->post('/user/posts', 'EmployeeController@store');

Route::name('home')->get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin');
});
