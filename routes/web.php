<?php

use Illuminate\Support\Facades\Route;


// Route Admin
// Route::get('/', function () {
//     return view('admin/dashboard');
// });
Route::get('/', function () {
    return view('guest/welcome');
});

Route::get('/Admin/ProfilDesa', function () {
    return view('admin/crud_profil_desa');
});


Route::get('/Admin/Berita', function () {
    return view('admin/crud_berita');
});
Route::get('/Admin/Rating', function () {
    return view('admin/crud_rating');
});
Route::get('/Admin/Destinasi', function () {
    return view('admin/crud_destinasi_wisata');
});
Route::get('/Admin/Akomodasi', function () {
    return view('admin/crud_akomodasi');
});
Route::get('/Admin/Produk', function () {
    return view('admin/crud_produk');
});
Route::get('/Admin/Event', function () {
    return view('admin/crud_event');
});
Route::get('/Admin/PaketWisata', function () {
    return view('admin/crud_paket_wisata');
});

