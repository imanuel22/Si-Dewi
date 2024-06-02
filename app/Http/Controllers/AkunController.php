<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $response = Http::withToken($request->session()->get('accessToken'))->get('localhost:3000/akun')->collect();
        return view('superadmin.akun.index',[
            'akun'=>$response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.akun.create',[
            // 'desawisata'=> $response
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'no_telp'=>'required',
            'password'=>'required',
            'email'=>'required|email',
            'foto'=>'required|image|file',
            'role'=>'required',
        ]);

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::attach(
            'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
        )->post('http://localhost:3000/akun/add',$validatedData);
        // dd();
        if($response->successful()){
            return redirect('/superadmin/akun')->with('message',$response->reason());
        }elseif ($response->failed()) {
            return redirect('/superadmin/akun')->with('message',$response->reason());
        } else {
            return redirect('/superadmin/akun')->with('message',$response->reason());
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
        //
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
        $response = Http::withToken(request()->session()->get('accessToken'))->delete('http://localhost:3000/akun/'.$id);
        if($response->successful()){
            return redirect('/superadmin/akun')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/akun')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/akun')->with('message','erorr system 500');
        }
    }
}
