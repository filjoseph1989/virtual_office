<?php

namespace App\Http\Controllers;

use App\Models\Authorities;
use Illuminate\Http\Request;

class AuthorityController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = parent::getAdminDetails([
      'authorities' => Authorities::all(),
      'content' => 'admins.modules.authority-table'
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
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|unique:authorities'
    ]);

    $data = $request->only(['name']);
    Authorities::create($data);
    return redirect()->route('admin.authority.list')
      ->with('status', 'Successfuly added new module');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
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
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $data              = $request->only(['id', 'name']);
    $authorities       = Authorities::find($data['id']);
    $authorities->name = $data['name'];
    if ($authorities->save()) {
      return redirect()->route('admin.authority.list')
        ->with('status', 'Successfuly updated authority');
    }
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
