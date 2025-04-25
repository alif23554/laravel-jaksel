<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('app');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');


Route::prefix('layanan')->group(function () {
    Route::get('/kesehatan', [LayananController::class, 'kesehatan'])->name('layanan.kesehatan');
    Route::get('/pendidikan', [LayananController::class, 'pendidikan'])->name('layanan.pendidikan');
    Route::get('/perizinan', [LayananController::class, 'perizinan'])->name('layanan.perizinan');
});


Auth::routes();
