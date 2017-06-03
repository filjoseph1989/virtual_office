<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\Models\Position;
use App\Models\ModuleGroup;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /**
   * Return the sidebar details, modules and subModules.
   *
   * Explain:
   * Get user id, from the user id, get the user position and from the
   * user position, get modules and submodules associated to the
   * position
   *
   * @return Object
   */
  protected function getSidebarDetails($position_id = 0)
  {
    $ModuleGroup = new ModuleGroup();
    $position    = new Position();

    return $ModuleGroup->getSidebarDetails(
      $position->getPosition( self::getUserId() )->id
    );
  }

  /**
   * Return the Admins's name
   *
   * @return string
   */
  protected function getAdminName()
  {
    return ucfirst(Admin::find(1)->first_name);
  }

  /**
   * Return the User's name
   *
   * @return string
   */
  protected function getUserName()
  {
    return ucfirst(Auth::user()->first_name);
  }

  /**
   * Return the current loggedin user's ID
   *
   * @return int
   */
  protected function getUserId()
  {
    return Auth::user()->id;
  }
}
