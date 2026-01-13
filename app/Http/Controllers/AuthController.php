<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/');
    }

    public function login(Request $request)
    {
        Auth::attempt($request->only('email','password'));
        return redirect('/owner/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
