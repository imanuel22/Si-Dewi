<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData=$request->validate([
            'no_telp'=> 'numeric|nullable',
            'no_wa'=> 'numeric|nullable',
            'facebook'=> 'nullable',
            'instagram'=> 'nullable',
            'website'=> 'nullable',
            'email'=> 'nullable',
        ]);
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();
        
        $response = Http::withToken($request->session()->get('accessToken'))->post(env('APP_API_URL').'/informasi/add',$validatedData);

        if($response->successful()){
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','gagal menambahkan');
        } else {
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','erorr system 500');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/informasi/'.$id)->collect();
        // dd($response);
        return view('Admin.informasi.edit',[
            'informasi'=>$response,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validatedData=$request->validate([
            'no_telp'=> 'nullable|numeric',
            'no_wa'=> 'nullable|numeric',
            'facebook'=> 'nullable',
            'instagram'=> 'nullable',
            'website'=> 'nullable',
            'email'=> 'nullable',
        ]);
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['updatedAt'] = now();
        
        $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/informasi/'.$id,$validatedData);
        if($response->successful()){
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','gagal menambahkan');
        } else {
            return redirect('/admin/profil-desa/'.$request->session()->get('id_desa'))->with('message','erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
    }
}
