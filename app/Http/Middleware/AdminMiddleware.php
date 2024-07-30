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
