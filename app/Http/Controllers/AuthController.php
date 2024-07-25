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
    $accessToken = $request->session()->get('accessToken');

    // Make the API request to log out
    $response = Http::withToken($accessToken)
        ->delete(env('APP_API_URL') . '/akun/logout', [
            'accessToken' => $accessToken
        ]);

    // Check if the request was successful
    if ($response->successful()) {
        // Flush the session and redirect to the login page with a success message
        $request->session()->flush();
        return redirect('/login')->with('message', 'Berhasil logout');
    } elseif ($response->failed()) {
        // Redirect to the login page with a failure message
        return redirect('/login')->with('message', 'Gagal logout');
    }
}

}
