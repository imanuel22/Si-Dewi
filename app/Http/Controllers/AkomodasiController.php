<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/akomodasi/desa/' . request()->session()->get('id_desa'))->collect();

        return view('Admin.akomodasi.index', [
            'akomodasi' => $response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.akomodasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:25',
            'kategori' => 'required',
            'gambar' => 'required|image|file',
        ]);
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::withToken($request->session()->get('accessToken'))->attach(
            'gambar',
            file_get_contents($_FILES['gambar']['tmp_name']),
            $_FILES['gambar']['name']
        )->post(env('APP_API_URL') . '/akomodasi/add', $validatedData);

        if ($response->successful()) {
            return redirect('/admin/akomodasi')->with('message', 'berhasil menambahkan');
        } elseif ($response->failed()) {
            return redirect('/admin/akomodasi')->with('message', 'gagal menambahkan');
        } else {
            return redirect('/admin/akomodasi')->with('message', 'erorr system 500');
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
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/akomodasi/' . $id)->collect();

        if (request()->session()->get('id_desa') != $response['id_desawisata']) {
            abort(403);
        }
        return view('Admin.akomodasi.edit', [
            'akomodasi' => $response
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
            'kategori' => 'required',
            'gambar' => 'image|file',
        ]);
        if (!$request['gambar']) {
            $validatedData['gambar'] = $request['gambarOld'];
        }
        $validatedData['id_desawisata'] = $request->session()->get('id_desa');
        $validatedData['updatedAt'] = now();

        if ($_FILES['gambar']['error'] === 4) {
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL') . '/akomodasi/' . $id, $validatedData);
        } else {
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'gambar',
                file_get_contents($_FILES['gambar']['tmp_name']),
                $_FILES['gambar']['name']
            )->patch(env('APP_API_URL') . '/akomodasi/' . $id, $validatedData);
        }

        if ($response->successful()) {
            return redirect('/admin/akomodasi/')->with('message', 'berhasil mengupdate');
        } elseif ($response->failed()) {
            return redirect('/admin/akomodasi/')->with('message', 'gagal mengupdate');
        } else {
            return redirect('/admin/akomodasi/')->with('message', 'erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::delete(env('APP_API_URL') . '/akomodasi/' . $id);
        if ($response->successful()) {
            return redirect('/admin/akomodasi/')->with('message', 'berhasil menghapus');
        } elseif ($response->failed()) {
            return redirect('/admin/akomodasi/')->with('message', 'gagal menghapus');
        } else {
            return redirect('/admin/akomodasi/')->with('message', 'erorr system 500');
        }
    }
}
