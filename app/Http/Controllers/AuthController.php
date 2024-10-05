<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Cookie\SetCookie;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login',[
            'title' => 'login',
        ]);
    }

    public function dologin(Request $request)
    {

        $validate = $request->validate([ 
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $response = Http::post(env('APP_API_URL').'/akun/login', $validate );

        if($response->successful()){
            $token = $response->json();
            Session::put('accessToken', $token);

            $explode = explode('.', $token);
            $decode = base64_decode($explode[1]);
            $userData = json_decode($decode);

            $akun = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/akun/'.$userData->id)->collect();
            $role=$akun['role'];
            Session::put([
            'id'=>$userData->id,
            'nama'=>$userData->nama,
            'email'=>$userData->email,
            'foto'=>$userData->foto,
            'role'=>$role,
            'no_telp'=>$userData->no_telp,
            ]);
            if ($role == 'SUPERADMIN') {
                return redirect('/superadmin/dashboard')->with('success', 'Login successful.');
            }
            if ($role == 'ADMIN') {
                $admindesa = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/admindesa/akun/'.$request->session()->get('id'))->collect();
                if(!isset($admindesa[0])){
                    return redirect('/login');
                }
                Session::put([
                    'id_desa'=>$admindesa[0]['id_desawisata'],
                ]);
                return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'));           
            }
        } else {
            return redirect()->back()->with('error', 'Login failed.');
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

    $request->session()->flush();


        return redirect('/login');


}

}
