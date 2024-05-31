<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get('http://localhost:3000/berita/desa/'.request()->session()->get('id_desa'))->collect();
        return view('Admin.berita.index',[
            'berita'=>$response,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->get('http://localhost:3000/berita/desa/'.request()->session()->get('id_desa'))->collect();
        return view('Admin.berita.show',[
            'berita'=>$response,
        ]);
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
        //
    }
}
