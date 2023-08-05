<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::latest()->get();
        $users = User::paginate(10);
        
        return view('data-user.index', compact('users'));
    
    }
}