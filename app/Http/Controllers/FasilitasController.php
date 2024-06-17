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
            'id_destinasiwisata'=>$id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        return view('Admin.fasilitas.show',[
            'fasilitas'=>$response,
            'id_destinasiwisata'=>$id,
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
        // $validatedData = $request->validate([
        //     'setujui'=> 'numeric'
        // ]);
        // if($validatedData['setujui'] == 1){
        //     $response = Http::patch(env('APP_API_URL').'/fasilitas/'.$request->id,$validatedData);
        //     if($response->successful()){
        //         return redirect('/admin/review/'.$id)->with('message','berhasil mengupdate');
        //     }elseif ($response->failed()) {
        //         return redirect('/admin/review/'.$id)->with('message','gagal mengupdate');
        //     } else {
        //         return redirect('/admin/review/'.$id)->with('message','erorr system 500');
        //     }
        // }
        // if($validatedData['setujui'] == 0){
        //     return $this->destroy($id,$request->id_destinasiwisata);
        // }
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
