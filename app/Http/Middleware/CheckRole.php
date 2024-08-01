<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Akun;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    public function handle(Request $request, Closure $next,$role='USER')

    {
        $api_token = Session::get('accessToken');

        if(!$api_token){
            return redirect('/login');
        }



        $explode = explode('.',$api_token);
        $decode = base64_decode($explode[1]);
        $userdata = json_decode($decode);

        // jika role ada di token
        // if(!$userdata && $userdata['role']!==$role){
        //     return redirect('/login');
        // }

        $user = Http::withToken($api_token)->get(env('APP_API_URL').'/akun/'.$userdata->id)->collect();
        if (!$user && $user['role'] !== $role) {
            return redirect('/login');
        }
        if(!isset($user['id'])){
            return redirect('/login');

        }


        Session::put([
            'id'=>$user['id'],
            'nama'=>$user['nama'],
            'email'=>$user['email'],
            'foto'=>$user['foto'],
            'role'=>$user['role'],
            'no_telp'=>$user['no_telp'],
        ]);

        // if($request->session()->get('role') == 'ADMIN'){
        //     $admindesassss = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/admindesa/akun/'.$request->session()->get('id'))->collect();
        //     if(!isset($admindesassss[0])){
        //         return redirect('/login');
        //     }
        //     Session::put([
        //         'id_desa'=>$admindesassss[0]['id_desawisata'],
        //     ]);
        //     return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'));

        // }if($request->session()->get('role') == 'SUPERADMIN'){

            $response=$next($request);
            return $response;
        // }else{
        //     return redirect('/');

        // }


    }
}

