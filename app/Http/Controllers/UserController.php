<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Not Finished Yet
    public function store(Request $request, User $user)
    {
        $validate = $request->validate([
            'nama_lengkap' => ['required'],
            'password' => ['required'],
        ]);
    }
}
