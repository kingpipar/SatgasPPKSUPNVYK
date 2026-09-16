<?php

use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PedomanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Website Resmi Satgas PPKS UPN "Veteran" Yogyakarta
|--------------------------------------------------------------------------
*/

// --- 1. Beranda / Dashboard Publik ---
Route::get('/', [PageController::class, 'beranda'])->name('beranda');

// --- 2. Halaman Profil / About Us (3 Sub-halaman sesuai dropdown) ---
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/satgas', [PageController::class, 'profilSatgas'])->name('satgas');
    Route::get('/logo-filosofi', [PageController::class, 'logoFilosofi'])->name('logo-filosofi');
    Route::get('/struktur-kepengurusan', [PageController::class, 'strukturKepengurusan'])->name('struktur-kepengurusan');
});

// --- 3. Pelayanan (Alur SOP & Pengalihan ke Google Form) ---
Route::get('/pelayanan', [PageController::class, 'pelayanan'])->name('pelayanan');

// --- 4. Pedoman (Config PHP, View Embed/Iframe & Download Aman) ---
Route::prefix('pedoman')->name('pedoman.')->group(function () {
    Route::get('/', [PedomanController::class, 'index'])->name('index');
    Route::get('/lihat/{slug}', [PedomanController::class, 'lihat'])->name('lihat');
    Route::get('/stream/{slug}', [PedomanController::class, 'stream'])->name('stream');
    Route::get('/download/{slug}', [PedomanController::class, 'download'])->name('download');
});

// --- 5. Galeri Publik (MySQL, Slug Route Model Binding) ---
Route::prefix('galeri')->name('galeri.')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('index');
    Route::get('/{galeri}', [GaleriController::class, 'show'])->name('show');
});

// --- 6. Manajemen Galeri (Mini-CRUD Tersembunyi & Password .env) ---
Route::prefix('kelola-galeri')->name('admin.')->group(function () {
    // Rute Login & Logout (Tanpa middleware proteksi)
    Route::get('/masuk', [AdminGaleriController::class, 'showLoginForm'])->name('login');
    Route::post('/masuk', [AdminGaleriController::class, 'login'])->name('login.post');
    Route::post('/keluar', [AdminGaleriController::class, 'logout'])->name('logout');

    // Rute CRUD Galeri (Terproteksi Middleware admin.simple)
    Route::middleware('admin.simple')->group(function () {
        Route::get('/', [AdminGaleriController::class, 'index'])->name('galeri.index');
        Route::get('/tambah', [AdminGaleriController::class, 'create'])->name('galeri.create');
        Route::post('/simpan', [AdminGaleriController::class, 'store'])->name('galeri.store');
        Route::get('/edit/{galeri}', [AdminGaleriController::class, 'edit'])->name('galeri.edit');
        Route::put('/update/{galeri}', [AdminGaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/hapus/{galeri}', [AdminGaleriController::class, 'destroy'])->name('galeri.destroy');
        Route::delete('/foto/{foto}', [AdminGaleriController::class, 'hapusFoto'])->name('galeri.foto.destroy');
    });
});
