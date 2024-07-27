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

    public function filter(Request $request) {
    $desaQuery = collect(Http::get(env('APP_API_URL').'/desawisata')->json());
    $destinasiQuery = collect(Http::get(env('APP_API_URL').'/destinasiwisata')->json());
    $searchTerm = $request->search ?? '';

    // Filter desa wisata
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

    $page = $request->get('page', 1);
    $perPage = 12;

    $desaPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
        $desaQuery->forPage($page, $perPage),
        $desaQuery->count(),
        $perPage,
        $page,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    // Filter destinasi wisata based on filtered desa wisata
    $filteredDestinasi = $destinasiQuery->filter(function ($item) use ($desaPaginated, $searchTerm) {
        // Jika ada pencarian untuk destinasi wisata, cek juga nama destinasi wisata
        if (!empty($searchTerm)) {
            return stripos($item['nama'], $searchTerm) !== false;
        }
        return in_array($item['id_desawisata'], array_column($desaPaginated->items(), 'id'));
    });

    $destinasiPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
        $filteredDestinasi->forPage($page, $perPage),
        $filteredDestinasi->count(),
        $perPage,
        $page,
        ['path' => request()->url(), 'query' => request()->query()]
    );
    $kode = request()->get('kode');


    return view('guest.explore', [
        'kode'=>$kode,
        'desa' => $desaPaginated,
        'destinasi' => $destinasiPaginated,
        'selectedKabupaten' => $request->kabupaten ?? [],
        'selectedKategori' => $request->kategori ?? [],
        'search' => $request->search ?? '',
    ]);
}

    public function jelajahi(){
        $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();
        $destinasi = Http::get(env('APP_API_URL').'/destinasiwisata')->collect();

        $page = request()->get('page', 1);
        $perPage = 12; // Number of items per page

        $desaPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $desa->forPage($page, $perPage),
            $desa->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        $destinasiPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $destinasi->forPage($page, $perPage),
            $destinasi->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data = [
            'title'=>'jelajahi',
            'destinasi'=>$destinasiPaginated,
            'desa'=>$desaPaginated,
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

    public function destinasi($iddesa, $id)
    {
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/desawisata/' . $iddesa)->collect();
        $destinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/destinasiwisata/' . $id)->collect();
        $listdestinasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/destinasiwisata/desa/' . $iddesa)->collect();
        $review = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/reviewdestinasi/destinasi/' . $id)->collect()->whereIn('setujui', 1);
        $fasilitas = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/fasilitas/destinasi/' . $id)->collect();
        $data = [
            'title' => '',
            'desa' => $desa,
            'destinasi' => $destinasi,
            'listdestinasi' => $listdestinasi,
            'review' => $review,
            'fasilitas' => $fasilitas
        ];
        return view('guest.destinasi', $data);
    }

    public function akomodasi($iddesa, $id)
    {
        $akomodasi = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/akomodasi/' . $id)->collect();
        $data = [
            'title' => '',
            'akomodasi' => $akomodasi,
        ];
        return view('guest.akomodasi', $data);
    }
    public function produk($iddesa, $id)
    {
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/desawisata/' . $iddesa)->collect();
        $produk = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/produk/' . $id)->collect();
        $listproduk = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/produk/desa/' . $iddesa)->collect();

        $data = [
            'title' => '',
            'desa' => $desa,
            'listproduk' => $listproduk,
            'produk' => $produk,
        ];
        return view('guest.produk', $data);
    }
    public function paket($iddesa, $id)
    {
        $paket = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL') . '/paketwisata/' . $id)->collect();
        $data = [
            'title' => '',
            'paket' => $paket,
        ];
        return view('guest.paket', $data);
    }



public function filterberita(Request $request) {
    // Fetch data from API
    $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt');
    $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();

    // Filter berita by search term
    $searchTerm = $request->get('searchberita');
    if (!empty($searchTerm)) {
        $berita = $berita->filter(function ($item) use ($searchTerm) {
            return stripos($item['judul'], $searchTerm) !== false;
        });
    }

    // Filter berita by kaputen
    $selectedKabupaten = $request->get('kabupaten', []);
    if (!empty($selectedKabupaten)) {
        $berita = $berita->filter(function ($item) use ($selectedKabupaten, $desa) {
            $desaItem = $desa->firstWhere('id', $item['id_desawisata']);
            return in_array($desaItem['kabupaten'], $selectedKabupaten);
        });
    }

    // Create a map of desawisata by id_desawisata for easy joining
    $desaMap = $desa->keyBy('id_desawisata');

    // Join berita and desawisata based on id_desawisata
    $joinedData = $berita->map(function ($beritaItem) use ($desaMap) {
        if (isset($desaMap[$beritaItem['id_desawisata']])) {
            $beritaItem['desawisata'] = $desaMap[$beritaItem['id_desawisata']];
        } else {
            $beritaItem['desawisata'] = null;
        }
        return $beritaItem;
    });


    $data = [
        'berita' => $joinedData,
        'selectedKabupaten' => $selectedKabupaten,
    ];
    return view('guest.artikel2', $data);
}





    public function berita(){
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt');
        $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();

        $data = [
            'berita'=>$berita,
            'selectedKabupaten' => request()->kabupaten ?? [],
        ];
        return view('guest.artikel2',$data);
    }



     public function beritaId($id){
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita/'.$id)->collect();
        $desa = Http::get(env('APP_API_URL').'/desawisata')->collect();

        $data = [
            'berita'=>$berita,
            // 'selectedKabupaten' => request()->kabupaten ?? [],
        ];
        return view('guest.artikel2',$data);
    }
}
