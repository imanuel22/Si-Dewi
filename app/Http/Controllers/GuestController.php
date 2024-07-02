<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    public function homepage() {
        $data = [
            'title'=>'',
        ];
        return view('guest.welcome');
    }
    public function jelajahi(){
        //search
        
        if (htmlspecialchars(isset($_GET['search']))) {
            $search = $_GET['search'];
            if($search){
                $desa = Http::get(env('APP_API_URL').'/desawisata')->collect()->whereIn('nama',$search);
                $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect()->whereIn('nama',$search);  
            }else{
                $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
                $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect();
            }
        }else{
            $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
            $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect();
        }

        $data = [
            'title'=>'jelajahi',
            'destinasi'=>$destinasi,
            'desa'=>$desa,
        ];
        return view('guest.explore',$data);
    }
    public function desa($id) {
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata/'.$id)->collect();
        $akomodasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/akomodasi/desa/'.$id)->collect();
        $destinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/desa/'.$id)->collect();
        $paket = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/paketwisata/desa/'.$id)->collect();
        $produk = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/produk/desa/'.$id)->collect();
    
        $data = [
            'title'=>'',
            'desa'=>$desa,
            'destinasi'=>$destinasi,
            'akomodasi'=>$akomodasi,
            'paket'=>$paket,
            'produk'=>$produk,
        ];
        return view('guest.detaildesa',$data);
    }
}
