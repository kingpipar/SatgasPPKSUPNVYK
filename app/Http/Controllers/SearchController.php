<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->query('q', ''));

        $results = [
            'halaman'  => [],
            'pedoman'  => [],
            'galeri'   => [],
        ];

        $totalCount = 0;

        if ($query !== '') {
            $qLower = strtolower($query);

            // 1. Dokumen Pedoman & Regulasi (config/pedoman.php)
            $semuaPedoman = config('pedoman.dokumen', []);
            foreach ($semuaPedoman as $doc) {
                if (
                    str_contains(strtolower($doc['judul'] ?? ''), $qLower) ||
                    str_contains(strtolower($doc['deskripsi'] ?? ''), $qLower)
                ) {
                    $results['pedoman'][] = [
                        'judul'        => $doc['judul'],
                        'deskripsi'    => $doc['deskripsi'] ?? '',
                        'url'          => route('pedoman.lihat', $doc['slug']),
                        'download_url' => route('pedoman.download', $doc['slug']),
                        'ukuran'       => $doc['ukuran'] ?? 'PDF',
                        'tipe'         => 'Pedoman & Regulasi',
                    ];
                }
            }

            // 2. Dokumentasi Galeri Kegiatan (Database)
            $galeris = Galeri::where('judul_kegiatan', 'LIKE', "%{$query}%")
                ->orWhere('deskripsi_singkat', 'LIKE', "%{$query}%")
                ->orderByDesc('tanggal_kegiatan')
                ->get();

            foreach ($galeris as $g) {
                $results['galeri'][] = [
                    'judul'      => $g->judul_kegiatan,
                    'deskripsi'  => $g->deskripsi_singkat,
                    'url'        => route('galeri.show', $g),
                    'foto_utama' => $g->foto_utama,
                    'tanggal'    => $g->tanggal_kegiatan,
                    'tipe'       => 'Dokumentasi Galeri',
                ];
            }

            // 3. Halaman Informasi Profil & Pelayanan
            $halamanStatik = [
                [
                    'judul'     => 'Profil Satgas PPKS UPN "Veteran" Yogyakarta',
                    'konten'    => 'Latar Belakang pembentukan Satgas PPKS, Permendikbudristek Nomor 55 Tahun 2024, Peraturan Rektor UPNVY Nomor 5 Tahun 2023, Visi dan Misi garda terdepan lingkungan akademik inklusif humanis nir-kekerasan seksual bagi seluruh sivitas akademika.',
                    'url'       => route('profil.satgas'),
                    'tipe'      => 'Profil Satgas',
                ],
                [
                    'judul'     => 'Logo dan Filosofi Lambang Satgas PPKS',
                    'konten'    => 'Makna simbolik lambang resmi, lingkaran luar hijau dan biru kesatuan inklusivitas perlindungan, tiga figur berpegangan tangan pink hijau biru representasi mahasiswa dosen tendik, pendekatan empatik tidak menghakimi.',
                    'url'       => route('profil.logo-filosofi'),
                    'tipe'      => 'Logo & Filosofi',
                ],
                [
                    'judul'     => 'Struktur Kepengurusan Satgas PPKS',
                    'konten'    => 'Susunan tim pengurus Satgas PPKS UPN Veteran Yogyakarta, divisi pencegahan dan sosialisasi, divisi penanganan dan investigasi, divisi pendampingan dan pemulihan psikologis hukum, bagan organisasi resmi.',
                    'url'       => route('profil.struktur-kepengurusan'),
                    'tipe'      => 'Struktur Kepengurusan',
                ],
                [
                    'judul'     => 'Pelayanan & Alur Pengaduan Kekerasan Seksual',
                    'konten'    => 'Alur pengaduan kekerasan seksual, form pelaporan Google Form, kontak hotline whatsapp resmi 081225573747, pendampingan psikologis, pendampingan hukum, jaminan kerahasiaan identitas pelapor dan korban.',
                    'url'       => route('pelayanan'),
                    'tipe'      => 'Layanan & Pengaduan',
                ],
                [
                    'judul'     => 'Beranda / Dashboard Utama',
                    'konten'    => 'Pusat informasi resmi Satgas PPKS UPN Veteran Yogyakarta, kegiatan terkini aksi sosialisasi edukasi, alur layanan laporan darurat, dan dokumen pedoman kampus.',
                    'url'       => route('beranda'),
                    'tipe'      => 'Dashboard',
                ],
            ];

            foreach ($halamanStatik as $hal) {
                if (
                    str_contains(strtolower($hal['judul']), $qLower) ||
                    str_contains(strtolower($hal['konten']), $qLower)
                ) {
                    $results['halaman'][] = [
                        'judul'     => $hal['judul'],
                        'deskripsi' => $hal['konten'],
                        'url'       => $hal['url'],
                        'tipe'      => $hal['tipe'],
                    ];
                }
            }

            $totalCount = count($results['pedoman']) + count($results['galeri']) + count($results['halaman']);
        }

        return view('pages.search.index', compact('query', 'results', 'totalCount'));
    }
}
