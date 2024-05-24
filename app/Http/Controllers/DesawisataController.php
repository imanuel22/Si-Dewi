<?php

namespace App\Http\Controllers;

use App\Models\Desawisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DesawisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('localhost:3000/desawisata')->json();
        // if(Desawisata::count()!=count($response)){
        //     Desawisata::truncate();
        //     for ($i=0; $i < count($response); $i++) { 
        //         Desawisata::create($response[$i]);
        //     }
        // }
        // $datadesa=Desawisata::all();

        return view('superadmin.desawisata.index',[
            'desawisata'=> $response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.desawisata.create',[
            // 'desawisata'=> $response
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Desawisata $desawisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desawisata $desawisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desawisata $desawisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desawisata $desawisata)
    {
        //
    }
}
