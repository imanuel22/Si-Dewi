<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {

        $response = Http::post('http://localhost:3000/akun/login', $request);
        if ($response->successful()) {
            $token = $response->cookies()->toArray();
            $request->session()->put('accessToken', $token[0]['Value']);
            return redirect('/superadmin/dashboard')->with('message', 'berhasil login');
        } elseif ($response->failed()) {
            return redirect('/login')->with('message', 'gagal login');
        } else {
            return redirect('/login')->with('message', 'erorr system 500');
        }

    }

    // public function logout(Request $request) {
    //     $response = Http::withToken($_COOKIE['accessToken'])->delete('http://localhost:3000/akun/logout',$request);
    //     if($response->successful()){
    //         $token = $response->cookies()->toArray();
    //         $request->session()->put('accessToken', $token[0]['Value']);
    //         return redirect('/login')->with('message','berhasil logout');
    //     }elseif ($response->failed()) {
    //         return redirect('/login')->with('message','gagal logout');
    //     } else {
    //         return redirect('/login')->with('message','erorr system 500');
    //     }
    // }
}
