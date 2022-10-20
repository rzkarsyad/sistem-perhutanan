<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
  public function index()
  {
    if (Auth::user()) {
      return redirect()->intended('/');
    }

    return view('content.authentications.auth-login');
  }

  public function process(Request $request)
  {
    $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      $user = Auth::user();
      if ($user) {
        return redirect()->intended('/');
      }

      return redirect()->intended('/');
    }

    return back()->withErrors([
      'username' => 'Maaf username atau password Anda salah'
    ])->onlyInput('username');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/auth/login');
  }
}
