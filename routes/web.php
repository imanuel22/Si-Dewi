<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\DesawisataController;


// Route Admin
// Route::get('/', function () {
//     return view('admin/dashboard');
// });
Route::get('/', function () {
    return view('home');
});


Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/dologin',[AuthController::class,'dologin']);

Route::get('/Admin/ProfilDesa', function () {
    return view('admin/crud_profil_desa');
});


// ADMIN
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

// SUPERADMIN
Route::resource('/superadmin/akun', AkunController::class)->middleware('SUPERADMIN');
Route::resource('/superadmin/desa', DesawisataController::class);