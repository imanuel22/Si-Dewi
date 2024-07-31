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
        // Ambil data dari API pertama
    $reviews = Http::withToken(request()->session()->get('accessToken'))
        ->get(env('APP_API_URL') . '/reviewdestinasi/destinasi/' . $id)
        ->collect()
        ->whereIn('setujui', 0);

    // Ambil data dari API kedua
    $accounts = Http::withToken(request()->session()->get('accessToken'))
        ->get(env('APP_API_URL') . '/akun')
        ->collect();

    //get where
    $destinasi = Http::withToken(request()->session()->get('accessToken'))
        ->get(env('APP_API_URL') . '/destinasiwisata/'.$id)
        ->collect();

    //getall
    $kategoridestinasi = Http::withToken(request()->session()->get('accessToken'))
        ->get(env('APP_API_URL') . '/kategoridestinasi')
        ->collect();


    // Gabungkan data berdasarkan id_akun
    $reviewsWithAccountData = $reviews->map(function ($review) use ($accounts) {
        $account = $accounts->firstWhere('id', $review['id_akun']);
        $review['akun'] = $account; // Menambahkan data akun ke review
        return $review;
    });

    // Kirim data gabungan ke tampilan
    return view('Admin.review.show', [
        'review' => $reviewsWithAccountData,
        'destinasi' => $destinasi,
        'title' => '',
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
            $response = Http::patch(env('APP_API_URL').'/reviewdestinasi/' . $request->id, $validatedData);
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
        $response = Http::delete(env('APP_API_URL').'/reviewdestinasi/' . $id);
        if ($response->successful()) {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'berhasil menghapus');
        } elseif ($response->failed()) {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'gagal menghapus');
        } else {
            return redirect('/admin/review/' . $id_destinasiwisata)->with('message', 'erorr system 500');
        }
    }
}
