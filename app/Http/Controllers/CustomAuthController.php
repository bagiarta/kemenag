<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        // Implement custom login logic
    }

    public function registration()
    {
        return view('register');
    }

    public function customRegistration(Request $request)
    {
        // Implement custom registration logic
    }

    public function dashboard()
    {
        // Implement dashboard logic
    }

    public function signOut()
    {
        Auth::logout();
        return redirect('login');
    }

    
}
