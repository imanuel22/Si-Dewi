<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        if(!$request->session()->get('accessToken')){
            abort(403);
        }
        
        $response = Http::withToken($request->session()->get('accessToken'))->get('localhost:3000/akun')->json();
        
        if(!count($response)){
            abort(403);
        }
        
        $e = explode('.',$request->session()->get('accessToken'));
        $d = base64_decode($e[1]);
        $id = json_decode($d)->id;

        $response2 = Http::withToken($request->session()->get('accessToken'))->get('localhost:3000/akun/'.$id)->json();
        $response3 = Http::withToken($request->session()->get('accessToken'))->get('localhost:3000/admindesa/akun/'.$id)->json();
        $request->session()->put([
            'nama'=>$response2['nama'],
            'email'=>$response2['email'],
            'foto'=>$response2['foto'],
            'role'=>$response2['role'],
            'id_desa'=>$response3[0]['id_desawisata']]
        );
    
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
