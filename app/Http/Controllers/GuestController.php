<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    public function homepage() {
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt')->take(3);
        $review = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/reviewdestinasi')->collect();

        $data = [
            'berita'=>$berita,
            'review'=>$review,
        ];
        return view('guest.welcome',$data);
    }
    public function jelajahi(){
        //search
        // init
        $search='';
        $kabupaten='';
        $kategori ='';
        $destinasi ='';
        $desa ='';
        // getdata
        if(request()->has('search')){
            $search=request()->get('search');
        }
        if(request()->has('kabupaten')){
            $kabupaten=request()->get('kabupaten');
        }
        if(request()->has('kategori')){
            $kategori=request()->get('kategori');
        }
        // condisi

        if(!$search&&!$kategori&&!$kabupaten){
            $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
            $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect(); 
        }

        if($search&&$kategori&&$kabupaten){
                    $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kabupaten,$kategori) {
                        $matchesSearch = str_contains($item['nama'], $search)!== false;
                        $matchesKategori = $item['kategori'] == $kategori;
                        $matchesKabupaten = $item['kabupaten'] == $kabupaten;
                        return $matchesSearch && $matchesKategori && $matchesKabupaten;
                    });
                    $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')
                ->collect()
                ->filter(function ($item) use ($search) {
                        return stripos($item['nama'], $search) !== false;
                    });;  
        }
        if($search&&$kategori){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kategori) {
                        $matchesSearch = str_contains($item['nama'], $search)!== false;
                        $matchesKategori = $item['kategori'] == $kategori;
                        return $matchesSearch && $matchesKategori ;
                    });
                    $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')
                ->collect()
                ->filter(function ($item) use ($search) {
                        return stripos($item['nama'], $search) !== false;
                    });; 
        }
        if($search&&$kabupaten){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kabupaten) {
                        $matchesSearch = str_contains($item['nama'], $search)!== false;
                        $matchesKabupaten = $item['kabupaten'] == $kabupaten;
                        return $matchesSearch && $matchesKabupaten;
                    });
                    $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')
                ->collect()
                ->filter(function ($item) use ($search) {
                        return stripos($item['nama'], $search) !== false;
                    });; 
        }
        if($kategori&&$kabupaten){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($kabupaten,$kategori) {
                        $matchesKategori = $item['kategori'] == $kategori;
                        $matchesKabupaten = $item['kabupaten'] == $kabupaten;
                        return $matchesKategori && $matchesKabupaten;
                    });
                    
        }
        if($search){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kabupaten,$kategori) {
                        $matchesSearch = str_contains($item['nama'], $search)!== false;
                       
                        return $matchesSearch;
                    });
                  $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')
                ->collect()
                ->filter(function ($item) use ($search) {
                        return stripos($item['nama'], $search) !== false;
                    });; 
        }
        if($kategori){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kabupaten,$kategori) {
                        $matchesKategori = $item['kategori'] == $kategori;
                        return  $matchesKategori ;
                    });
                    
        }
        if($kabupaten){
            $desa = Http::get(env('APP_API_URL') . '/desawisata')
                    ->collect()
                    ->filter(function ($item) use ($search,$kabupaten,$kategori) {
                        $matchesKabupaten = $item['kabupaten'] == $kabupaten;
                        return $matchesKabupaten;
                    });
                  
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
    public function berita(){
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt');
        $data = [
            'berita'=>$berita,
        ];
        return view('guest.artikel2',$data);
    }
}
