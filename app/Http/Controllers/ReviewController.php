<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
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
        $response = Http::withToken(request()->session()->get('accessToken'))->get('http://localhost:3000/reviewdestinasi/destinasi/' . $id)->collect();
        return view('Admin.review.show', [
            'review' => $response->whereIn('setujui', 0)
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
        $validatedData = $request->validate([
            'setujui' => 'numeric'
        ]);
        if ($validatedData['setujui'] == 1) {
            $response = Http::patch('http://localhost:3000/reviewdestinasi/' . $request->id, $validatedData);
            if ($response->successful()) {
                return redirect('/admin/review/' . $id)->with('message', 'berhasil mengupdate');
            } elseif ($response->failed()) {
                return redirect('/admin/review/' . $id)->with('message', 'gagal mengupdate');
            } else {
                return redirect('/admin/review/' . $id)->with('message', 'erorr system 500');
            }
        }
        if ($validatedData['setujui'] == 0) {
            return $this->destroy($id, $request->id_destinasiwisata);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $id_destinasiwisata)
    {
        $response = Http::delete('http://localhost:3000/reviewdestinasi/' . $id);
        if ($response->successful()) {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'berhasil menghapus');
        } elseif ($response->failed()) {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'gagal menghapus');
        } else {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'erorr system 500');
        }
    }
}
