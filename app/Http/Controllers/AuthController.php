<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {

        $response = Http::post('http://localhost:3000/akun/login',$request);
        $token = $response->cookies()->toArray();
        setcookie('accessToken',$token[0]['Value'],0);
        
        if($response->successful()){
            return redirect('/login')->with('message','berhasil login');
        }elseif ($response->failed()) {
            return redirect('/login')->with('message','gagal login');
        } else {
            return redirect('/login')->with('message','erorr system 500');
        }

    }

    public function logout() {
        // return view('');
    }
}
