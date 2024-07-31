<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdmindesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $admindesa = Http::get(env('APP_API_URL').'/admindesa')->collect();
    $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
    $akun = Http::get(env('APP_API_URL').'/akun')->collect();
    $response_1 = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/akun')->collect()->whereIn('role','ADMIN');
    $response_2 = Http::get(env('APP_API_URL').'/desawisata')->collect();
    $admindesajoin1 = $admindesa->map(function($item) use ($desa, $akun)  {
        $item['desa'] = $desa->where('id', $item['id_desawisata'])->first();
        $item['akun'] = $akun->where('id', $item['id_akun'])->first();
        return $item;
    });

// dd($admindesajoin1);

    return view('superadmin.admindesa.index', [
        'title' => 'admin-akunpetugas',
        'admindesa' => $admindesajoin1,
        'akun'=>$response_1,
        'desawisata'=>$response_2,

    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return view('superadmin.admindesa.create',[
        'title' => 'admin-tambah petugas',

        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_akun' => 'required',
            'id_desawisata' => 'required',
        ]);
        $response = Http::post(env('APP_API_URL').'/admindesa/add',$validatedData);

        if($response->successful()){
            return redirect('/superadmin/admindesa')->with('message','berhasil');
        }
        if($response->failed()){
            return redirect('/superadmin/admindesa')->with('message','gagal');
        }

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
        // $response_akun = Http::post(env('APP_API_URL').'/akun/add');
        // $response_desa = Http::post(env('APP_API_URL').'/desawisata/add');

        // if($response_akun->successful() && $response_desa->successful()){
        //     $response_1 = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/akun')->collect();
        //     $response_2 = Http::get(env('APP_API_URL').'/desawisata')->collect();
        //     //ambil id akun
        //     $id_akun = 1;
        //     //ambil id desa
        //     $id_desawisata = 1;

        //     //post admindesa
        //     $response_admin = Http::post(env('APP_API_URL').'/admindesa/add',[
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

        return view('superadmin.admindesa.edit',[
                    'title' => 'admin-edit petugas',

        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_akun' => 'required',
            'id_desawisata' => 'required',
        ]);
        $validatedData['updatedAt'] = now();
        $response = Http::patch(env('APP_API_URL').'/admindesa/'.$id,$validatedData);

        if($response->successful()){
            return redirect('/superadmin/admindesa')->with('message','berhasil');
        }
        if($response->failed()){
            return redirect('/superadmin/admindesa')->with('message',$response->message()->get());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->delete(env('APP_API_URL').'/admindesa/'.$id);
        if($response->successful()){
            return redirect('/superadmin/admindesa/')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/admindesa/')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/admindesa/')->with('message','erorr system 500');
        }
    }
}
