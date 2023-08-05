<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('front-pages.register.index');
    }
    
    public function registeruser(Request $request)
    {
        // dd($request->all());
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return \redirect ('/auth/login');
    }
}