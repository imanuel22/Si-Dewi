<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/paketwisata/desa/' . request()->session()->get('id_desa'))->collect();

        return view('Admin.paket.index', [
            'title' => '',
            'paket' => $response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.paket.create',[
            'title' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:25',
            'harga' => 'required',
            'gambar' => 'required|image|file',
            'deskripsi' => 'required',
        ]);
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::withToken($request->session()->get('accessToken'))->attach(
            'gambar',
            file_get_contents($_FILES['gambar']['tmp_name']),
            $_FILES['gambar']['name']
        )->post(env('APP_API_URL') . '/paketwisata/add', $validatedData);

        if ($response->successful()) {
            return redirect('/admin/paket')->with('message', 'berhasil menambahkan');
        } elseif ($response->failed()) {
            return redirect('/admin/paket')->with('message', 'gagal menambahkan');
        } else {
            return redirect('/admin/paket')->with('message', 'erorr system 500');
        }
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
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/paketwisata/' . $id)->collect();

        if (request()->session()->get('id_desa') != $response['id_desawisata']) {
            abort(403);
        }
        return view('Admin.paket.edit', [
            'title' => '',
            'paket' => $response
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // if(request()->session()->get('id_desa') != $id){
        //     abort(403);
        // }
        $validatedData = $request->validate([
            'nama' => 'required|max:25',
            'harga' => 'required',
            'gambar' => 'image|file',
            'deskripsi' => 'required',
        ]);
        if (!$request['gambar']) {
            $validatedData['gambar'] = $request['gambarOld'];
        }

        $validatedData['updatedAt'] = now();

        if ($_FILES['gambar']['error'] === 4) {
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL') . '/paketwisata/' . $id, $validatedData);
        } else {
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'gambar',
                file_get_contents($_FILES['gambar']['tmp_name']),
                $_FILES['gambar']['name']
            )->patch(env('APP_API_URL') . '/paketwisata/' . $id, $validatedData);
        }

        if ($response->successful()) {
            return redirect('/admin/paket/')->with('message', 'berhasil mengupdate');
        } elseif ($response->failed()) {
            return redirect('/admin/paket/')->with('message', 'gagal mengupdate');
        } else {
            return redirect('/admin/paket/')->with('message', 'erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::delete(env('APP_API_URL') . '/paketwisata/' . $id);
        if ($response->successful()) {
            return redirect('/admin/paket/')->with('message', 'berhasil menghapus');
        } elseif ($response->failed()) {
            return redirect('/admin/paket/')->with('message', 'gagal menghapus');
        } else {
            return redirect('/admin/paket/')->with('message', 'erorr system 500');
        }
    }
}
