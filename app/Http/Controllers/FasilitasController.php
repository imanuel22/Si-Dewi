<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $id)
    {
        return view('Admin.fasilitas.create',[

            'title' => 'petugas -tambah fasilitas',
            'id_destinasiwisata'=>$id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
                'nama'=> 'required',
                'id_destinasiwisata'=>'required'
            ]);
            $response = Http::post(env('APP_API_URL').'/fasilitas/add',$validatedData);
                if($response->successful()){
                    return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','berhasil mengupdate');
                }elseif ($response->failed()) {
                    return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','gagal mengupdate');
                } else {
                    return redirect('/admin/revifasilitasew/'.$request->id_destinasiwisata)->with('message','erorr system 500');
                }

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/fasilitas/destinasi/'.$id)->collect();
        $destinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/'.$id)->collect();
        return view('Admin.fasilitas.show',[
            'title' => 'petugas -fasilitas',
            'fasilitas'=>$response,
            'id_destinasiwisata'=>$id,
            'destinasi'=>$destinasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validatedData = $request->validate([
            'nama'=> 'required|string',
            'id_destinasiwisata'=>'required'
        ]);

        $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/fasilitas/'.$id,$validatedData);
        if($response->successful()){
            return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','berhasil ');
        }else{
            return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','404 ');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,String $id)
    {
        // dd($id,$request);
        $response = Http::delete(env('APP_API_URL').'/fasilitas/'.$id);
        if($response->successful()){
            return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','gagal menghapus');
        } else {
            return redirect('/admin/fasilitas/'.$request->id_destinasiwisata)->with('message','erorr system 500');
        }
    }
}
