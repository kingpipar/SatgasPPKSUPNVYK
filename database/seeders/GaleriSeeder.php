<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bersihkan data lama jika ada
        Galeri::query()->delete();

        // Kegiatan 1
        $g1 = Galeri::create([
            'judul_kegiatan'    => 'Sosialisasi Pencegahan Kekerasan Seksual pada PKKBN UPN "Veteran" Yogyakarta',
            'slug'              => 'sosialisasi-pencegahan-kekerasan-seksual-pkkbn-upnvy',
            'foto_utama'        => 'galeri/kegiatan-1.svg',
            'deskripsi_singkat' => 'Pemaparan komprehensif mengenai 21 bentuk kekerasan seksual sesuai Permendikbudristek No. 30/2021 kepada ribuan mahasiswa baru tahun akademik 2024/2025 di Auditorium WR Supratman.',
            'tanggal_kegiatan'  => '2024-08-15',
        ]);

        $g1->fotos()->createMany([
            ['foto_path' => 'galeri/kegiatan-1.svg', 'urutan' => 1],
            ['foto_path' => 'galeri/kegiatan-2.svg', 'urutan' => 2],
            ['foto_path' => 'galeri/kegiatan-3.svg', 'urutan' => 3],
        ]);

        // Kegiatan 2
        $g2 = Galeri::create([
            'judul_kegiatan'    => 'Workshop Konseling & Pendampingan Korban bagi Satgas dan Konselor Sebaya',
            'slug'              => 'workshop-konseling-pendampingan-korban-upnvy',
            'foto_utama'        => 'galeri/kegiatan-2.svg',
            'deskripsi_singkat' => 'Pelatihan kepekaan psikologis, teknik wawancara tanpa menghakimi, dan simulasi penanganan darurat bagi anggota Satgas PPKS dan perwakilan konselor sebaya seluruh fakultas.',
            'tanggal_kegiatan'  => '2024-09-20',
        ]);

        $g2->fotos()->createMany([
            ['foto_path' => 'galeri/kegiatan-2.svg', 'urutan' => 1],
            ['foto_path' => 'galeri/kegiatan-1.svg', 'urutan' => 2],
        ]);

        // Kegiatan 3
        $g3 = Galeri::create([
            'judul_kegiatan'    => 'Kampanye Ruang Aman Kampus & Sosialisasi Kanal Aduan Cepat',
            'slug'              => 'kampanye-ruang-aman-kampus-kanal-aduan-upnvy',
            'foto_utama'        => 'galeri/kegiatan-3.svg',
            'deskripsi_singkat' => 'Penyebaran materi edukasi, pemasangan banner alur SOP pelaporan di lokasi strategis kampus Condongcatur dan Babarsari, serta sosialisasi nomor hotline 24 jam.',
            'tanggal_kegiatan'  => '2024-10-10',
        ]);

        $g3->fotos()->createMany([
            ['foto_path' => 'galeri/kegiatan-3.svg', 'urutan' => 1],
            ['foto_path' => 'galeri/kegiatan-2.svg', 'urutan' => 2],
            ['foto_path' => 'galeri/kegiatan-1.svg', 'urutan' => 3],
        ]);
    }
}
