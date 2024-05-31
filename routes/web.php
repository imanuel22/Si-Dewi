<?php

use App\Http\Controllers\AdmindesaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\DesawisataController;


// Route Admin
// Route::get('/', function () {
//     return view('admin/dashboard');
// });



// Route::get('/Admin/ProfilDesa', function () {
//     return view('admin/crud_profil_desa');
// });


// // ADMIN.
// Route::resource('/admin/berita',BeritaController::class);

// // Route::get('/Admin/Berita', function () {
// //     return view('admin.berita.index');
// // });
// Route::get('/Admin/Rating', function () {
//     return view('admin/crud_rating');
// });
// Route::get('/Admin/Destinasi', function () {
//     return view('admin/crud_destinasi_wisata');
// });
// Route::get('/Admin/Akomodasi', function () {
//     return view('admin/crud_akomodasi');
// });
// Route::get('/Admin/Produk', function () {
//     return view('admin/crud_produk');
// });
// Route::get('/Admin/Event', function () {
//     return view('admin/crud_event');
// });
// Route::get('/Admin/PaketWisata', function () {
//     return view('admin/crud_paket_wisata');
// });

// GUEST
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/dologin',[AuthController::class,'dologin']);
    Route::delete('/logout',[AuthController::class,'logout']);
});

// ADMIN
Route::middleware('ADMIN')->group(function(){
    Route::get('/admin/dashboard', function(){
        return view('admin.dashboard');
    });    
    Route::resource('/admin/profil-desa',DesawisataController::class)->only(['show','edit','update']);
    Route::resource('/admin/berita', BeritaController::class);
    // Route::resource('/admin/destinasi', AkunController::class);
    // Route::resource('/admin/akomodasi', AkunController::class);
    // Route::resource('/admin/produk', AkunController::class);
    // Route::resource('/admin/paket-wisata', AkunController::class);

    //bagian made
    // Route::resource('/admin/event', AkunController::class);

});

// SUPERADMIN
Route::middleware('SUPERADMIN')->group(function(){
    Route::get('/superadmin/dashboard', function(){
        return view('superadmin.dashboard');
    });
    Route::resource('/superadmin/akun', AkunController::class);
    Route::resource('/superadmin/desa', DesawisataController::class)->only(['index','create','destroy','store']);
    Route::resource('/superadmin/admindesa', AdmindesaController::class);
});