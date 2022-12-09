<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $req){
        $attributes = request()->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
        ]);
        $data = [
            'username' => $req->username,
             'email' => $req->email,
             'password' => $req->password
        ];
        $user = User::create($data);

        auth()->login($user);

        return redirect('/dashboard');
    }
}
