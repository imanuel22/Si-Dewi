<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $admindesa = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/admindesa/akun/'.$request->session()->get('id'))->collect();

        Session::put([
            'id_desa'=>$admindesa[0]['id_desawisata'],
        ]);
        if(!$request->session()->get('accessToken')){
            return redirect('/login');
        }

        if($request->session()->get('role') == 'SUPERADMIN'){
            return redirect('/superadmin/dashboard');
        };
        if($request->session()->get('role') == 'ADMIN'){
            $response=$next($request);
            return $response;
        };
        if($request->session()->get('role') == 'USER'){
            return redirect('/');
        }
    }
}
