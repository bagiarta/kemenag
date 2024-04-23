<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        // Implement custom login logic
        $user = User::where('email',$request->email)->first();
        if($user != null){
            if(Hash::check($request->password,$user->password)){
                Auth::loginUsingId($user->id);
                return redirect()->route('public');
            }
        }
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
