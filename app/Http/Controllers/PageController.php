<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\StatistikKasus;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        // 3 galeri terbaru
        $kegiatanTerbaru = Galeri::withCount('fotos')
            ->orderByDesc('tanggal_kegiatan')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();
        $pedomanTerbaru = array_slice(config('pedoman.dokumen', []), 0, 3);
        $statistik = StatistikKasus::getActive();
        $googleFormUrl = config('satgas.google_form_url', env('GOOGLE_FORM_URL', 'https://forms.gle/tf6AtZVNvAqndR7Y6'));
        return view('pages.beranda', compact('kegiatanTerbaru', 'pedomanTerbaru', 'statistik', 'googleFormUrl'));
    }

    public function profilSatgas()
    {
        return view('pages.profil.profil-satgas');
    }

    public function logoFilosofi()
    {
        return view('pages.profil.logo-filosofi');
    }

    public function strukturKepengurusan()
    {
        return view('pages.profil.struktur-kepengurusan');
    }

    public function pelayanan()
    {
        $googleFormUrl = config('satgas.google_form_url', env('GOOGLE_FORM_URL', 'https://forms.gle/samplePPKSreportURL'));
        return view('pages.pelayanan', compact('googleFormUrl'));
    }
}
