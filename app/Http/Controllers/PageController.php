<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Beranda / Dashboard Publik
     * Menampilkan highlight dari tab-tab lain:
     * - 3 dokumentasi galeri terbaru
     * - Ringkasan singkat profil Satgas PPKS
     * - CTA ke halaman pelayanan / pengaduan
     */
    public function beranda()
    {
        // 3 galeri terbaru
        $kegiatanTerbaru = Galeri::withCount('fotos')
            ->orderByDesc('tanggal_kegiatan')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        // 3 pedoman terpilih
        $pedomanTerbaru = array_slice(config('pedoman.dokumen', []), 0, 3);

        $googleFormUrl = config('satgas.google_form_url', env('GOOGLE_FORM_URL', 'https://forms.gle/samplePPKSreportURL'));

        return view('pages.beranda', compact('kegiatanTerbaru', 'pedomanTerbaru', 'googleFormUrl'));
    }

    /**
     * Profil: Profil Satgas
     * Latar belakang, visi misi, peran, dan nilai integritas
     */
    public function profilSatgas()
    {
        return view('pages.profil.profil-satgas');
    }

    /**
     * Profil: Logo dan Filosofi
     * Arti logo Satgas PPKS, makna warna, simbol perisai, tunas, dan bela negara
     */
    public function logoFilosofi()
    {
        return view('pages.profil.logo-filosofi');
    }

    /**
     * Profil: Struktur Kepengurusan
     * Susunan tim pengurus, divisi, dan bagan organisasi resmi
     */
    public function strukturKepengurusan()
    {
        return view('pages.profil.struktur-kepengurusan');
    }

    /**
     * Pelayanan: Alur SOP pelaporan kekerasan & tombol pengalihan ke Google Form eksternal
     */
    public function pelayanan()
    {
        $googleFormUrl = config('satgas.google_form_url', env('GOOGLE_FORM_URL', 'https://forms.gle/samplePPKSreportURL'));
        return view('pages.pelayanan', compact('googleFormUrl'));
    }
}
