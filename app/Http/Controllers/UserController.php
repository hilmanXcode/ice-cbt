<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create', [
            'dataKelas' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'kelas' => ['required', 'integer'],
            'username' => ['required'],
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
            'level' => ['required', 'integer'],
        ]);

        User::create(['nama_lengkap' => $request->nama_lengkap, 'username' => $request->username, 'kelas_id' => $request->kelas, 'level' => $request->level, 'email' => $request->email, 'password' => Hash::make($request->password)]);

        return redirect()->intended('/dashboard/users')->with('success', 'Berhasil menambahkan user baru!');
    }
}
