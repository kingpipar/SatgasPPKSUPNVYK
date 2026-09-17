<?php
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminStatistikController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PedomanController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/cari', [SearchController::class, 'search'])->name('cari');
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/satgas', [PageController::class, 'profilSatgas'])->name('satgas');
    Route::get('/logo-filosofi', [PageController::class, 'logoFilosofi'])->name('logo-filosofi');
    Route::get('/struktur-kepengurusan', [PageController::class, 'strukturKepengurusan'])->name('struktur-kepengurusan');
});
Route::get('/pelayanan', [PageController::class, 'pelayanan'])->name('pelayanan');
Route::prefix('pedoman')->name('pedoman.')->group(function () {
    Route::get('/', [PedomanController::class, 'index'])->name('index');
    Route::get('/lihat/{slug}', [PedomanController::class, 'lihat'])->name('lihat');
    Route::get('/stream/{slug}', [PedomanController::class, 'stream'])->name('stream');
    Route::get('/download/{slug}', [PedomanController::class, 'download'])->name('download');
});
Route::prefix('galeri')->name('galeri.')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('index');
    Route::get('/{galeri}', [GaleriController::class, 'show'])->name('show');
});
Route::prefix('kelola-galeri')->name('admin.')->group(function () {
    Route::get('/masuk', [AdminGaleriController::class, 'showLoginForm'])->name('login');
    Route::post('/masuk', [AdminGaleriController::class, 'login'])->name('login.post');
    Route::post('/keluar', [AdminGaleriController::class, 'logout'])->name('logout');
    Route::middleware('admin.simple')->group(function () {
        Route::get('/', [AdminGaleriController::class, 'index'])->name('galeri.index');
        Route::get('/tambah', [AdminGaleriController::class, 'create'])->name('galeri.create');
        Route::post('/simpan', [AdminGaleriController::class, 'store'])->name('galeri.store');
        Route::get('/edit/{galeri}', [AdminGaleriController::class, 'edit'])->name('galeri.edit');
        Route::put('/update/{galeri}', [AdminGaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/hapus/{galeri}', [AdminGaleriController::class, 'destroy'])->name('galeri.destroy');
        Route::delete('/foto/{foto}', [AdminGaleriController::class, 'hapusFoto'])->name('galeri.foto.destroy');

        // Rute Statistik Penanganan Kasus
        Route::get('/statistik', [AdminStatistikController::class, 'edit'])->name('statistik.edit');
        Route::put('/statistik', [AdminStatistikController::class, 'update'])->name('statistik.update');
    });
});
