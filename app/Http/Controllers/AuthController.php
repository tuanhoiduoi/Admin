<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'username' => 'required|string|unique:users',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:8',
            'repassword' => 'required|string|same:password'
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        // $user = User::create([
        //     'username' => $req->username,
        //     'email' => $req->email,
        //     'password' => Hash::make($req->password)
        // ]);
        $data =[
            'username' => $req->username,
             'email' => $req->email,
             'password' => $req->password
        ];

        $user = User::create($data);

        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        // validate inputs
        $rules = [
            'username' => 'required',
            'password' => 'required|string'
        ];
        $req->validate($rules);
        // find user email in users table
        $user = User::where('username', $req->username)->first();
        // if username found and password is correct
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user' => $user, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Sai tên đăng nhập hoặc mật khẩu'];
        return response()->json($response, 400);
    }
}
