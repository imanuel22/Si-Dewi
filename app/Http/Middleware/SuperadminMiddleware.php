<?php

namespace App\Http\Middleware;

use App\Models\Superadmin;
use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Contracts\Providers\JWT;

class SuperadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
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
        $request->session()->put([
            'nama'=>$response2['nama'],
            'email'=>$response2['email'],
            'foto'=>$response2['foto'],
            'role'=>$response2['role'],]
        );

        if($request->session()->get('role') == 'SUPERADMIN'){
            $response=$next($request);
            return $response;
        };
        if($request->session()->get('role') == 'ADMIN'){
            return redirect('/admin/dashboard');
        };
        if($request->session()->get('role') == 'ADMIN'){
        abort(403);
        }
    }
}
