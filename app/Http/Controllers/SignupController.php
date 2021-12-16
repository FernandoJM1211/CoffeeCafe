<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup.index', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|min:4|unique:users',
            'password' => 'required|min:4'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        user::create($validatedData);

        $request->session()->flash('success'. 'Registraion successfull! Please login');
        
        return redirect('/login');
    }
}
