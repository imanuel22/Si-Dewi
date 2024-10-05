<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Akun;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\alert;

class CheckRole
{
    public function handle(Request $request, Closure $next,$role='USER')

    {
        $api_token = Session::get('accessToken');

        if(!$api_token){
            return redirect('/login');
        }

        if($role =='ADMIN'){
            redirect('/admin/profil-desa/'.$request->session()->get('id_desa'));
        }
        if($role=='SUPERADMIN'){
            redirect('/superadmin/dashboard'); 
        }else{
            redirect('/');
        }
        return $next($request);
    }
}

