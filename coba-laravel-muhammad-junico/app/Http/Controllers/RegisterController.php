<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{   
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required|min:3|max:15|unique:users',
            'email' => 'required|email:rfc|unique:users',
            'password' => 'required|min:5|max:20'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);
        
        return redirect('/login')->with('success', 'Akun Kau Berhasil Dibuat CUY');
    }
}
