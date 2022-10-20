<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ProduksiController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();

        return view('content.pages.pages-produksi')->with([
            'data' => $data,
            'user' => $user,
        ]);
    }
}
