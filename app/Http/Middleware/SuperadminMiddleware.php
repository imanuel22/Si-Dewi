<?php

namespace App\Http\Middleware;

use App\Models\Superadmin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class SuperadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // $response = Http::withToken($_COOKIE['accessToken'])->get('localhost:3000/akun')->json();
        
        // dd($response);
        // //cek apakah rolenya admin / superadmin
        // if($response){

        // }

        if(Auth::check()){
            abort(403);
        }
        $response=$next($request);
        return $response;
    }
}
