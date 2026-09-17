<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    
    // Tampilkan grid listing album kegiatan galeri
    
    public function index()
    {
        $galeris = Galeri::withCount('fotos')
            ->orderByDesc('tanggal_kegiatan')
            ->orderByDesc('created_at')
            ->paginate(9);

        return view('pages.galeri.index', compact('galeris'));
    }

    
    // Tampilkan detail kegiatan galeri beserta seluruh foto dokumentasinya
    // Menggunakan Route Model Binding dengan slug
    
    public function show(Galeri $galeri)
    {
        $galeri->load('fotos');

        // Rekomendasi kegiatan lainnya
        $kegiatanLainnya = Galeri::where('id', '!=', $galeri->id)
            ->orderByDesc('tanggal_kegiatan')
            ->take(3)
            ->get();

        return view('pages.galeri.show', compact('galeri', 'kegiatanLainnya'));
    }
}
