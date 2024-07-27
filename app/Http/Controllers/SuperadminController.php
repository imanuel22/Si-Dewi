<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SuperadminController extends Controller
{
    public function index(){
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata')->collect();
        $desaPerKabupaten = $desa->groupBy('kabupaten')->map->count();

        $data = [
            'desa'=>$desa,
            'desa_count'=>$desa->count(),
            'desa_per_kabupaten'=>$desaPerKabupaten,
        ];
        return view('superadmin.dashboard',$data);
    }
}
