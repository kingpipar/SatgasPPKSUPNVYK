<?php

/**
 * Konfigurasi Dokumen Pedoman Resmi Satgas PPKS UPN "Veteran" Yogyakarta
 *
 * File PDF disimpan di direktori: storage/app/public/pedoman/
 * Diakses melalui Storage::disk('public')->download() dan route viewer preview.
 *
 * Hanya daftarkan file yang BENAR-BENAR ADA di storage.
 */

return [
    'dokumen' => [
        [
            'id'             => 'peraturan-rektor-no-5-2023',
            'slug'           => 'peraturan-rektor-no-5-2023',
            'judul'          => 'Peraturan Rektor Nomor 5 Tahun 2023 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan UPN "Veteran" Yogyakarta',
            'deskripsi'      => 'Peraturan resmi Rektor UPN "Veteran" Yogyakarta yang menjadi payung hukum utama pencegahan, penanganan, serta sanksi kekerasan seksual di kampus.',
            'file_path'      => 'pedoman/Peraturan Rektor Nomor 5 2023.pdf',
            'ukuran'         => '1.18 MB',
        ],
        [
            'id'             => 'kep-1377-2026',
            'slug'           => 'kep-1377-2026',
            'judul'          => 'KEP 1377-2026 Pedoman Operasional Standar Satgas PPK UPN "Veteran" Yogyakarta',
            'deskripsi'      => 'Pedoman operasional standar komprehensif pelaksanaan fungsi pencegahan, kampanye anti kekerasan seksual, dan mitigasi kerentanan kampus.',
            'file_path'      => 'pedoman/KEP 1377-2026 Pedoman Operasional Standar Satgas PPK UPN VY.pdf',
            'ukuran'         => '3.56 MB',
        ],
        [
            'id'             => 'permendikbudristek-55-2024',
            'slug'           => 'permendikbudristek-55-2024',
            'judul'          => 'Permendikbudristek Nomor 55 Tahun 2024 tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi',
            'deskripsi'      => 'Regulasi nasional mutakhir dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi sebagai pedoman utama pencegahan kekerasan di PT.',
            'file_path'      => 'pedoman/Permendikbudristek-no-55-tahun-2024.pdf',
            'ukuran'         => '2.15 MB',
        ],
        [
            'id'             => 'sop-penanganan-baru',
            'slug'           => 'sop-penanganan-baru',
            'judul'          => 'Standar Operasional Prosedur (SOP) Penanganan Kasus Kekerasan Seksual',
            'deskripsi'      => 'Standar operasional prosedur penanganan laporan, pendampingan korban, alur pemeriksaan, serta tata kelola penanganan kasus di lingkungan UPN "Veteran" Yogyakarta.',
            'file_path'      => 'pedoman/STANDAR OPERATING PROCEDURE Baru.pdf',
            'ukuran'         => '3.64 MB',
        ],
    ],
];
