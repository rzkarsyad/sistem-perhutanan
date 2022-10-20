<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserComponent extends Component
{

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        return view('livewire.user.user-component', ['user' => $user, 'data' => $data]);
    }
}
