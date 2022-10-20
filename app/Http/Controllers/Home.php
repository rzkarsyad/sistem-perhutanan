<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
  public function index()
  {

    $user = Auth::user();
    $data = DB::table('users')
      ->join('role', 'role.id', '=', 'users.role_id')
      ->where('users.id', '=', $user->id)
      ->select('users.*', 'role.name_role')
      ->first();

    return view('content.pages.pages-home')->with([
      'user' => $user,
      'data' => $data,
    ]);
  }
}
