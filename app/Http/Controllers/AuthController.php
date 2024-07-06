<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $info = $request->all(['email', 'password']);
        $token = auth('api')->attempt($info);
        if ($token){
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['erro' => 'Usuario ou senha incorretos'], 403);
        }
    }

    public function logout(){
        return 'logout';
    }

    public function refresh(){
        return 'refresh';
    }

    public function me(){
        return 'me';
    }
}
