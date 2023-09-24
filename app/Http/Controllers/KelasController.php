<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', [
            'data' => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => ['required', 'unique:kelas,namaKelas']
        ]);

        Kelas::create(['namaKelas' => $request->kelas]);

        return redirect()->intended('/dashboard/kelas')->with('success', 'Kelas baru berhasil di tambahkan');
    }

    public function edit($id)
    {
        return view('kelas.edit', [
            'data' => Kelas::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'kelas' => ['required', 'unique:kelas,namaKelas']
        ]);

        Kelas::find($id)->update(['namaKelas' => $request->kelas]);

        return redirect()->intended('/dashboard/kelas')->with('success', 'Nama kelas berhasil di perbaharui');
    }

    public function delete($id)
    {
        Kelas::find($id)->delete();

        return back();
    }
}
