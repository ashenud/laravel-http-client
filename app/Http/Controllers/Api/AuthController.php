<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request){
        $url = config('settings.api_source').'/api/auth/jwt/login';
        $response = Http::post($url, [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return $response;
    }
}
