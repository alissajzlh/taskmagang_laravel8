<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('front-pages.login.index');
    }
    
    public function loginproses(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }
        
        return \redirect ('/auth/login');
    }
}