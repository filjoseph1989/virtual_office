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
   * Name of the home details
   * @var mixed
   */
  protected $compact;

  /**
   * Additional details
   * @var mixed
   */
  protected $details;

  /**
   * is Admin
   * @var mixed
   */
  protected $admin = false;

  /**
   * Return the Home page details
   *
   * ! Deprecated
   * Use get details instead
   *
   * @param  array  $data
   * @return \Illuminate\Http\Response
   */
  protected function getHomeDetails($content = "")
  {
    return self::getDetails($content);
  }

  /**
   * Return details for the requested page
   *
   * @param  array $details
   * @return array
   */
  protected function getDetails($details = "")
  {
    $sidebar  = self::getSidebarDetails();
    $username = self::getUserName();
    extract($sidebar);

    $this->compact = ['modules', 'subModules', 'username'];
    if (is_array($details)) {
      extract($details);
      foreach ($details as $key => $value) {
        $this->compact[] = $key;
      }
    } elseif ($details != "") {
      $this->compact[] = key($details);
    }

    return compact($this->compact);
  }

  /**
   * Return the admin page details
   * @param  string $details
   * @return array
   */
  protected function getAdminDetails($details = "")
  {
    $this->admin = true;
    $sidebar     = self::getSidebarDetails();
    $username    = self::getAdminName();
    extract($sidebar);

    $this->compact = ['modules', 'subModules', 'username'];
    if (is_array($details)) {
      extract($details);
      foreach ($details as $key => $value) {
        $this->compact[] = $key;
      }
    } elseif ($details != "") {
      $this->compact[] = key($details);
    }

    return compact($this->compact);
  }

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

    return $ModuleGroup->getSidebarDetails(
      ($this->admin === false)
        ? Auth::user()->position_id
        : Admin::find(1)->position_id
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


  protected function getAdminId()
  {
    return Admin::find(1)->id;
  }
}
