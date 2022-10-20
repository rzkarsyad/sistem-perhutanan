<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    view()->composer('*', function ($view) {
      $user = Auth::user();

      if ($user) {
        if ($user->role_id == 1) {
          $verticalMenuJson = file_get_contents(base_path('resources/menu/adminVerticalMenu.json'));
        } elseif ($user->role_id == 2) {
          $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
        } elseif ($user->role_id == 3) {
          $verticalMenuJson = file_get_contents(base_path('resources/menu/pengolahVerticalMenu.json'));
        } elseif ($user->role_id == 4) {
          $verticalMenuJson = file_get_contents(base_path('resources/menu/petaniVerticalMenu.json'));
        }
        // Share all menuData to all the views
        $verticalMenuData = json_decode($verticalMenuJson);
        \View::share('menuData', [$verticalMenuData]);
        $view->with('user', $user);
      } else {
      }
    });
  }
}
