<?php

use App\Http\Controllers\AdmindesaController;
use App\Http\Controllers\AkomodasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DesawisataController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KategoridestinasiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;

// GUEST
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/dologin',[AuthController::class,'dologin']);
    Route::delete('/logout',[AuthController::class,'logout']);
    Route::get('/profile',[AkunController::class,'profile']);
    Route::patch('/profile/update/{id}',[AkunController::class,'update']);
    Route::patch('/profile/password/{id}',[AkunController::class,'password']);
});


  


// ADMIN
Route::middleware('ADMIN')->group(function(){
    Route::get('/admin/dashboard', function(){
        return view('admin.dashboard');
    });    
    Route::resource('/admin/profil-desa',DesawisataController::class)->only(['show','edit','update']);
    Route::resource('/admin/berita', BeritaController::class);
    Route::resource('/admin/destinasi', DestinasiController::class);
    Route::resource('/admin/akomodasi', AkomodasiController::class);
    Route::resource('/admin/produk', ProdukController::class);
    Route::resource('/admin/paket', PaketController::class);
    Route::resource('/admin/review', ReviewController::class);
    Route::resource('/admin/informasi', InformasiController::class);
    Route::get('/admin/fasilitas/{id_destinasiwisata}/create',[FasilitasController::class,'create']);
    Route::resource('/admin/fasilitas', FasilitasController::class);
    //bagian made
    // Route::resource('/admin/event', EventController::class);

});

// SUPERADMIN
Route::middleware('SUPERADMIN')->group(function(){
    Route::get('/superadmin/dashboard', function(){
        return view('superadmin.dashboard');
    });
    Route::resource('/superadmin/akun', AkunController::class);
    Route::resource('/superadmin/desa', DesawisataController::class)->only(['index','create','destroy','store']);
    Route::resource('/superadmin/admindesa', AdmindesaController::class);
    Route::resource('/superadmin/kategoridestinasi', KategoridestinasiController::class);
    
});