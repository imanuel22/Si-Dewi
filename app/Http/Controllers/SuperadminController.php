<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SuperadminController extends Controller
{
    public function index(){
        $berita = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/berita')->collect()->sortByDesc('createdAt')->take(3);
        $review = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/reviewdestinasi')->collect()->whereIn('setujui', 1);
        $desa = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/desawisata')->collect();
        $desaPerKabupaten = $desa->groupBy('kabupaten')->map->count();
        $reviewdes = $review->groupBy('id_destinasiwisata');

        // Fetch destination data (replace this with your actual method of fetching destination data)
        $destinations = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/destinasiwisata')->collect();
        $destinatikey = $destinations->keyBy('id');
        // Map reviews with average rating
        $reviewdes = $reviewdes->map(function ($reviews) use ($destinatikey) {
            $averageRating = $reviews->avg('rating');
            $destinationId = $reviews[0]['id_destinasiwisata'];
            $destination = $destinatikey->firstWhere('id', $destinationId);
            if ($destination == null) {
                $destination = [];
            }
            return [
                'reviews' => $reviews,
                'averageRating' => $averageRating / 2,
                'destination' => $destination
            ];
        });
        $top5Reviews = $reviewdes->sortByDesc('averageRating')->take(3);

        $data = [
            'berita'=>$berita,
            'review'=>$top5Reviews,
            'desa'=>$desa,
            'desa_count'=>$desa->count(),
            'desa_per_kabupaten'=>$desaPerKabupaten,
            'destinasi'=>$destinations,
            'destinasi_count'=>$destinations->count(),

        ];
        return view('superadmin.dashboard',$data);
    }
}
