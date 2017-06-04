<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\SubModules;
use Illuminate\Http\Request;

class AdminModulesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth:admin');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = parent::getAdminDetails([
      'module'     => Module::all(),
      'subModules' => SubModules::all(),
      'content'    => 'admins.modules.module-table'
    ]);

    return view('admins.admin-dashboard', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store new module
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeNewModule(Request $request)
  {
    $data = $request->only(['name']);
    Module::create($data);
    return redirect()->route('admin.modules.list')->with('status', 'Successfuly added new module');
  }

  /**
   * Sample for validation
   * Refer 1: Go to this line an the example are here
   * @return [type] [description]
   */
  public function store()
  {
    // validate
    // read more on validation at http://laravel.com/docs/validation
    $rules = array(
        'name'       => 'required',
        'email'      => 'required|email',
        'nerd_level' => 'required|numeric'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
        return Redirect::to('nerds/create')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
    } else {
        // store
        $nerd = new Nerd;
        $nerd->name       = Input::get('name');
        $nerd->email      = Input::get('email');
        $nerd->nerd_level = Input::get('nerd_level');
        $nerd->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('nerds');
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($data)
  {
    $module       = Module::find($data['id']);
    $module->name = $data['name'];
    $module->icon = $data['icon'];

    if ($module->save()) {
      return redirect()->route('admin.modules.list')
        ->with('status', 'Successfuly updated module');
    }
  }

  /**
   * Please refer to this tutorial
   * https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
   * for better way of doing edit functionality in laravel
   *
   * As for now, I used this way, for the system to work
   * Issue 5: Go to this line and read it description in comment the concerns of this issue
   *
   * @param  Request $request
   * @return
   */
  public function editModule(Request $request)
  {
    $data = $request->only(['id', 'name', 'icon']);
    return self::edit($data);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
