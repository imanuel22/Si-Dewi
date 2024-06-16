<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoridestinasi;
use Illuminate\Support\Facades\Http;

class KategoridestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/kategoridestinasi/')->collect();

        return view('superadmin.kategoridestinasi.index',[
            'kategoridestinasi'=>$response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.kategoridestinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:25',
        ]);
        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::withToken($request->session()->get('accessToken'))->post(env('APP_API_URL').'/kategoridestinasi/add',$validatedData);

        if($response->successful()){
            return redirect('/superadmin/kategoridestinasi')->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/superadmin/kategoridestinasi')->with('message','gagal menambahkan');
        } else {
            return redirect('/superadmin/kategoridestinasi')->with('message','erorr system 500');
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
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/kategoridestinasi/'.$id)->collect();
        return view('superadmin.kategoridestinasi.edit',[
            'kategoridestinasi'=>$response
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:25',
        ]);

        $validatedData['updatedAt'] = now();
        $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/kategoridestinasi/'.$id,$validatedData);

        if($response->successful()){
            return redirect('/superadmin/kategoridestinasi/')->with('message','berhasil mengupdate');
        }elseif ($response->failed()) {
            return redirect('/superadmin/kategoridestinasi/')->with('message','gagal mengupdate');
        } else {
            return redirect('/superadmin/kategoridestinasi/')->with('message','erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $response = Http::delete(env('APP_API_URL').'/kategoridestinasi/'.$id);
        if($response->successful()){
            return redirect('/superadmin/kategoridestinasi/')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/kategoridestinasi/')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/kategoridestinasi/')->with('message','erorr system 500');
        }
    }
}
