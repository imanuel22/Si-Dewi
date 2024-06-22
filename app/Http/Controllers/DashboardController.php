<?php

namespace App\Http\Controllers;

use App\Models\Desacount;
use App\Models\Paketcount;
use App\Models\Produkcount;
use Illuminate\Http\Request;
use App\Models\Destinasicount;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\String_;

class DashboardController extends Controller
{
    //
    public function index(){
        // $data = Destinasicount::where('id')->all();
        // dd($data->name);
        // foreach(){

        // }
        // $data = ['labels' => ,
        //     'data' => ,];
        return view('Admin.dashboard',compact('data'));
    }

    public function home(){
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata')->collect();
        return view('guest.home',[
            'desa'=>$response
        ]);
    }
    
    public function desa(String $id){
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata/'.$id)->collect();
        $destinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/desa/'.$id)->collect();
        $paket = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/paketwisata/desa/'.$id)->collect();
        $produk = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/produk/desa/'.$id)->collect();
        return view('guest.desa',[
            'desa'=>$desa,
            'destinasi'=>$destinasi,
            'paket'=>$paket,
            'produk'=>$produk,
        ]);
    }

    public function destinasi(String $id_desa,String $id_destinasi){
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/'.$id_destinasi)->collect();
        return view('guest.destinasi',[
            'destinasi'=>$response
        ]);
    }

    public function paket(String $id_desa,String $id_paket){
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/paketwisata/'.$id_paket)->collect();
        return view('guest.paket',[
            'paket'=>$response
        ]);
    }

    public function produk(String $id_desa,String $id_produk){
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/produk/'.$id_produk)->collect();
        return view('guest.produk',[
            'produk'=>$response
        ]);
    }


    //count
    public function desacount(String $id){
        Desacount::create([
            'id_desawisata'=>$id,
            'count'=>'1'
        ]);
        return $this->desa($id);
    }
    public function destinasicount(String $id_desa,String $id_destinasi){
        Destinasicount::create([
            'id_destinasi'=>$id_destinasi,
            'count'=>'1'
        ]);
        return $this->destinasi($id_desa,$id_destinasi);
    }

    public function paketcount(String $id_desa,String $id_paket){
        Paketcount::create([
            'id_paket'=>$id_paket,
            'count'=>'1'
        ]);
        return $this->paket($id_desa,$id_paket);
    }
    
    public function produkcount(String $id_desa,String $id_produk){
        Produkcount::create([
            'id_produk'=>$id_produk,
            'count'=>'1'
        ]);
        return $this->produk($id_desa,$id_produk);
    }

}
