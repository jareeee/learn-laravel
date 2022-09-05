<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login-register.register', [
            'title' =>'Register'
        ]);
    }

    public function __construct()
    {
        $this->middleware('guest')->only('index');
    
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','email:dns,filter','unique:users'],
            'password' => ['required','min:3']
        ]);
        
        $validator['password'] = Hash::make($validator['password']);
        User::create($validator);

        return redirect('/login')->with('success', 'Register successfully, please login!');
    }
}
