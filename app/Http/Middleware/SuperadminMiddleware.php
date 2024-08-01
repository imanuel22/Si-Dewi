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
            return redirect('/login');
        }


        if($request->session()->get('role') === 'SUPERADMIN'){
            $response=$next($request);
            return $response;
        };
        if($request->session()->get('role') === 'ADMIN'){
            return redirect('/admin/dashboard');
        };
        if($request->session()->get('role') === 'USER'){
            return redirect('/');
        }
    }
}
