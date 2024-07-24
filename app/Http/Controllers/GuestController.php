<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    public function homepage() {
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt')->take(3);
        $review = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/reviewdestinasi')->collect();
        $reviewdes = $review->groupBy('id_destinasiwisata');

        // Fetch destination data (replace this with your actual method of fetching destination data)
        $destinations = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata')->collect();

        // Map reviews with average rating
        $reviewdes = $reviewdes->map(function ($reviews) use ($destinations) {
            $averageRating = $reviews->avg('rating');
            $destinationId = $reviews[0]['id_destinasiwisata'];
            $destination = $destinations->firstWhere('id', $destinationId);
            
            return [
                'reviews' => $reviews,
                'averageRating' => $averageRating / 2,
                'destination' => $destination
            ];
        });
        $top5Reviews = $reviewdes->sortByDesc('averageRating')->take(5);

        $data = [
            'berita'=>$berita,
            'review'=>$top5Reviews,
        ];
        return view('guest.welcome',$data);
    }

    public function filter(Request $request)  {
        $desaQuery = collect(Http::get(env('APP_API_URL').'/desawisata')->json());
        $destinasiQuery = collect(Http::get(env('APP_API_URL').'/destinasiwisata')->json());
        $searchTerm = $request->search ?? '';

         if (!empty($searchTerm)) {
            $desaQuery = $desaQuery->filter(function ($item) use ($searchTerm) {
                return stripos($item['nama'], $searchTerm) !== false;
            });
        }

        if ($request->has('kabupaten')) {
            $desaQuery = $desaQuery->whereIn('kabupaten', $request->kabupaten);
        }

        if ($request->has('kategori')) {
            $desaQuery = $desaQuery->whereIn('kategori', $request->kategori);
        }
        $desa = $desaQuery->all();
        
        // Filter destinasi wisata berdasarkan desa wisata yang terfilter
         $filteredDestinasi = $destinasiQuery->filter(function ($item) use ($desa, $searchTerm) {
            // Jika ada pencarian untuk destinasi wisata, cek juga nama destinasi wisata
            if (!empty($searchTerm)) {
                return stripos($item['nama'], $searchTerm) !== false;
            }
            return in_array($item['id_desawisata'], array_column($desa, 'id'));
        });
        return view('guest.explore', [
            'desa' => $desa,
            'destinasi' => $filteredDestinasi,
            'selectedKabupaten' => $request->kabupaten ?? [],
            'selectedKategori' => $request->kategori ?? [],
            'search' => $request->search ?? '',
        ]);
    }

    public function jelajahi(){
        $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
        $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect();

        $data = [
            'title'=>'jelajahi',
            'destinasi'=>$destinasi,
            'desa'=>$desa,
            'selectedKabupaten' => request()->kabupaten ?? [],
            'selectedKategori' => request()->kategori ?? [],
            'search' => request()->search ?? '',
        ];
        return view('guest.explore',$data);
    }
    public function desa($id) {
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata/'.$id)->collect();
        $akomodasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/akomodasi/desa/'.$id)->collect();
        $destinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata/desa/'.$id)->collect();
        $paket = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/paketwisata/desa/'.$id)->collect();
        $produk = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/produk/desa/'.$id)->collect();
    
        $data = [
            'title'=>'',
            'desa'=>$desa,
            'destinasi'=>$destinasi,
            'akomodasi'=>$akomodasi,
            'paket'=>$paket,
            'produk'=>$produk,
        ];
        return view('guest.detaildesa',$data);
    }
    public function berita(){
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt');
        $data = [
            'berita'=>$berita,
        ];
        return view('guest.artikel2',$data);
    }
}
