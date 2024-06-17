<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/desa/'.request()->session()->get('id_desa'))->collect();
        // for ($i=0; $i < count($response); $i++) { 
        //     $review[] = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/reviewdestinasi/destinasi/'.$response[$i]['id'])->collect()->whereIn('setujui',1)->count();
        // }
        return view('Admin.destinasi.index',[
            'destinasi'=>$response,
            // 'review'=>$review
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/kategoridestinasi/')->collect();
        return view('Admin.destinasi.create',[
            'kategoridesawisata'=>$response,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:25',
            'id_kategoridestinasi'=>'required',
            'gambar'=>'image|file',
            'deskripsi'=>'required',
        ]);
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::withToken($request->session()->get('accessToken'))->attach(
            'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
        )->post(env('APP_API_URL').'/destinasiwisata/add',$validatedData);

        if($response->successful()){
            return redirect('/admin/destinasi')->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/admin/destinasi')->with('message','gagal menambahkan');
        } else {
            return redirect('/admin/destinasi')->with('message','erorr system 500');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/'.$id)->collect();
        
        return view('Admin.destinasi.show',[
            'destinasi'=>$response
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/'.$id)->collect();
        
        if(request()->session()->get('id_desa') != $response['id_desawisata']){
            abort(403);
        }
        return view('Admin.destinasi.edit',[
            'destinasi'=>$response
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        // if(request()->session()->get('id_desa') != $id){
        //     abort(403);
        // }
        $validatedData = $request->validate([
            'nama'=>'required|max:25',
            'id_kategoridestinasi'=>'required',
            'gambar'=>'image|file',
            'deskripsi'=>'required',
        ]);
        if(!$request['gambar']){
            $validatedData['gambar'] = $request['gambarOld'];
        }

        $validatedData['updatedAt'] = now();
       
        if($_FILES['gambar']['error'] === 4){
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/destinasiwisata/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
            )->patch(env('APP_API_URL').'/destinasiwisata/'.$id,$validatedData);
        }

        if($response->successful()){
            return redirect('/admin/destinasi/')->with('message','berhasil mengupdate');
        }elseif ($response->failed()) {
            return redirect('/admin/destinasi/')->with('message','gagal mengupdate');
        } else {
            return redirect('/admin/destinasi/')->with('message','erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $response = Http::delete(env('APP_API_URL').'/destinasiwisata/'.$id);
        if($response->successful()){
            return redirect('/admin/destinasi/')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/admin/destinasi/')->with('message','gagal menghapus');
        } else {
            return redirect('/admin/destinasi/')->with('message','erorr system 500');
        }
    }
}
