<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        return redirect()->back();
    }

    public function index()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        return view('content.users.users-user')->with([
            'data' => $data,
            'user' => $user,
        ]);
    }
}
