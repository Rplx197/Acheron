<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt($validatedData);
        if (auth()->user()->role === 'karyawan') {
            return redirect('/');
        } else if (auth()->user()->role === 'kasir') {
            return redirect()->route('pelanggan');
        }
    }
}
