<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $r) {
        if (Auth::attempt($r->only(['email', 'password']))) {
            return response([
                'message' => 'Authentication Success!',
                'token' => Auth::user()->createToken('token')->plainTextToken
            ], 200);
        } else {
            return response([
                'message' => 'Authentication Failed!'
            ], 400);
        }
    }
}
