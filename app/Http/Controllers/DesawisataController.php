<?php

namespace App\Http\Controllers;

use App\Models\Desawisata;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DesawisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata')->collect();
        // if(Desawisata::all()->toArray()!=$response){
        //     Desawisata::truncate();
        //     for ($i=0; $i < count($response); $i++) {
        //         Desawisata::create($response[$i]);
        //     }
        // }
        // $datadesa=Desawisata::all();

        return view('superadmin.desawisata.index',[
            'title' => 'admin -desa wisata',
            'desawisata'=> $response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.desawisata.create',[
            'title' => '',
            // 'desawisata'=> $response
            'title' => 'admin -tambah desa wisata',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:25',
            'alamat'=>'required',
            'gambar'=>'required|image|file',
            'deskripsi'=>'required',
            'maps'=>'required',
            'kategori'=>'required',
            'kabupaten'=>'required',
        ]);

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::withToken($request->session()->get('accessToken'))->attach(
            'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
        )->post(env('APP_API_URL').'/desawisata/add',$validatedData);
        // dd($request,$response);

        if($response->successful()){
            return redirect('/superadmin/desa')->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/superadmin/desa')->with('message','gagal menambahkan');
        } else {
            return redirect('/superadmin/desa')->with('message','erorr system 500');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(request()->session()->get('id_desa') != $id){
            abort(403);
        }

        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata/'.$id)->json();
        $response2 = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/informasi/desa/'.$id)->json();

        // dd($response2[0]);
        return view('Admin.desa.show',[
            'title' => 'desa wisata',
            'desa'=>$response,
            'informasi'=>$response2,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata/'.$id)->collect();
        // dd($response);
        return view('superadmin.desawisata.edit',[
            'desawisata'=>$response,
            'title'=>'edit desawisata'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:255',
            'alamat'=>'required|max:255',
            'deskripsi'=>'required',
            'maps'=>'required|max:255',
            'kategori'=>'required|max:255',
            'kabupaten'=>'required|max:255',
        ]);
        if(!$request['gambar']){
            $validatedData['gambar'] = $request['gambarOld'];
        }

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();


        if($_FILES['gambar']['error'] === 4){
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/desawisata/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
            )->patch(env('APP_API_URL').'/desawisata/'.$id,$validatedData);
        }

        if($request->session()->get('role')=='ADMIN'){
            if($response->successful()){
                return redirect('/admin/profil-desa/'.$id)->with('message','berhasil mengupdate');
            }elseif ($response->failed()) {
                return redirect('/admin/profil-desa/'.$id)->with('message','gagal mengupdate');
            } else {
                return redirect('/admin/profil-desa/'.$id)->with('message','erorr system 500');
            }
        }
        if($request->session()->get('role')=='SUPERADMIN'){
            if($response->successful()){
                return redirect('/superadmin/desa/')->with('message','berhasil mengupdate');
            }elseif ($response->failed()) {
                return redirect('/superadmin/desa/')->with('message','gagal mengupdate');
            } else {
                return redirect('/superadmin/desa/')->with('message','erorr system 500');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::delete(env('APP_API_URL').'/desawisata/'.$id);
        if($response->successful()){
            return redirect('/superadmin/desa')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/desa')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/desa')->with('message','erorr system 500');
        }
    }
}
