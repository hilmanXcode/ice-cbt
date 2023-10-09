<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Siswa section
    public function index()
    {
        return view('users.index', [
            'data' => User::all()->where('level', 1),
            'page' => 'Users'
        ]);
    }


    public function create()
    {
        return view('users.create', [
            'dataKelas' => Kelas::all(),
            'page' => 'Users'
        ]);
    }

    public function store(Request $request)
    {
        if ($request['level'] == 3) {
            $request['kelas'] = 666;
        }

        $request['email'] = 'unknown@gmail.com';
        $request['level'] = 1;

        $request->validate([
            'nama_lengkap' => ['required'],
            'kelas' => ['required', 'integer'],
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
            'level' => ['required', 'integer'],
        ]);

        User::create(['nama_lengkap' => $request->nama_lengkap, 'username' => $request->username, 'kelas_id' => $request->kelas, 'level' => $request->level, 'email' => $request->email, 'password' => Hash::make($request->password)]);

        return redirect()->intended('/dashboard/users')->with('success', 'Berhasil menambahkan user baru!');
    }

    public function edit($id)
    {
        return view('users.edit', [
            'page' => 'Users',
            'dataUser' => User::find($id),
            'dataKelas' => Kelas::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request['password'] == '') {
            $request['password'] = User::find($id)->password;
        }
        $request->validate([
            'nama_lengkap' => ['required'],
            'kelas' => ['required', 'integer'],
            'username' => ['required', $request->username == User::find($id)->username ? '' : 'unique:users,username'],
            'password' => ['required']
        ]);

        User::find($id)->update(['nama_lengkap' => $request->nama_lengkap, 'kelas' => $request->kelas, 'username' => $request->username, 'password' => $request->password]);

        return redirect()->intended('/dashboard/users')->with('success', 'Berhasil mengedit user!');
    }

    public function delete($id)
    {
        User::destroy($id);

        return redirect()->intended('/dashboard/users')->with('success', 'Berhasil menghapus user!');
    }

    //Admin Section
    public function indexadmin()
    {
        return view('staff.index', [
            'page' => 'Staff',
            'dataUser' => User::all()->where('level', '>', 1)
        ]);
    }
}
