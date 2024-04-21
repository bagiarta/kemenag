<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registrationconrtoller extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255|unique:users',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = user::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            // Jika penyimpanan gagal
            return back()->with('error', 'Registrasi gagal! Silakan coba lagi.');
        }
    }
}
