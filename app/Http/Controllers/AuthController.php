<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

        $response = Http::post(env('APP_API_URL').'/akun/login', $request);
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

    public function logout(Request $request) {
        $response = Http::withToken($request->session()->get('accessToken'))
        ->withCookies(['accessToken'=>$request->session()->get('accessToken')],'.ondigitalocean.app')
        ->delete(env('APP_API_URL').'/akun/logout',$request);
        // dd($response);
        if($response->successful()){
            $request->session()->forget('accessToken');
            return redirect('/login')->with('message','berhasil logout');
        }elseif ($response->failed()) {
            return redirect('/login')->with('message','gagal logout');
        }
    }
}
