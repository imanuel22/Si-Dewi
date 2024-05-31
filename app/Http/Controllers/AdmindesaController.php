<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdmindesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/admindesa')->collect();
        return view('superadmin.admindesa.index',[
            'admindesa'=>$response,
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $response_1 = Http::withToken($request->session()->get('accessToken'))->get('http://localhost:3000/akun')->collect();
        $response_2 = Http::get('localhost:3000/desawisata')->collect();
        return view('superadmin.admindesa.create',[
            'akun'=>$response_1,
            'desawisata'=>$response_2
        ]);    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        // $validatedData = $request->validate([
        //     'id_akun' => 'required',
        //     'id_desawisata' => 'required',
        // ]);
        // $response = Http::post('localhost:3000/admindesa/add',$validatedData);

        // if($response->successful()){
        //     return redirect('/superdamin/admindesa')->with('message','berhasil');
        // }
        // if($response->failed()){
        //     return redirect('/superdamin/admindesa')->with('message','gagal');
        // }

        // //validasi data desa
        // $validatedDataDesa = $request->validate([
        //     'nama_desa'=>'required|max:255',
        //     'kategori_desa'=>'required',
        //     'kabupaten_desa'=>'required',
        //     'alamat_desa'=>'required',
        //     'maps_desa'=>'required',
        //     'deskripsi_desa'=>'required',
        //     'foto_akun'=>'image|file|max:1024'
        // ]);
        // //validasi data akun
        // $validatedDataAkun = $request->validate([
        //     'nama_akun'=>'required',
        //     'email_akun'=>'required|email',
        //     'password_akun'=>'required',
        //     'foto_akun'=>'image|file|max:1024'
        // ]);
        // $validatedDataAkun['role']='ADMIN';
        // //response
        // $response_akun = Http::post('localhost:3000/akun/add');
        // $response_desa = Http::post('localhost:3000/desawisata/add');

        // if($response_akun->successful() && $response_desa->successful()){
        //     $response_1 = Http::withToken($request->session()->get('accessToken'))->get('http://localhost:3000/akun')->collect();
        //     $response_2 = Http::get('localhost:3000/desawisata')->collect();
        //     //ambil id akun 
        //     $id_akun = 1;
        //     //ambil id desa
        //     $id_desawisata = 1;

        //     //post admindesa
        //     $response_admin = Http::post('localhost:3000/admindesa/add',[
        //         'id_akun'=>$id_akun,
        //         'id_desawisata'=>$id_desawisata,
        //     ]);
            
        //     if($response_admin->successful()){
        //         //return message
        //     }
        //     if($response_admin->failed()){
        //         //return message
        //     }
            
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('superadmin.admindesa.edit');    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
