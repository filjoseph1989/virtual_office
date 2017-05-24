<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class AdminModulesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
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
    return redirect()->route('admin.modules.add')->with('status', 'Successfuly added new module');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showAddForm()
  {
    $content = "admins.modules.module-add";

    return view('admins.admin-dashboard', compact('content'));
  }

  /**
   * Display the list of modules
   *
   * @return \Illuminate\Http\Response
   */
  public function showModuleList()
  {
    return view('admins.modules.module-table');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
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
