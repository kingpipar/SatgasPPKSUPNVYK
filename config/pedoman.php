<?php

/**
 * Konfigurasi Dokumen Pedoman Resmi Satgas PPKS UPN "Veteran" Yogyakarta
 *
 * File PDF disimpan di direktori: storage/app/public/pedoman/
 * Diakses melalui Storage::disk('public')->download() dan route viewer preview.
 */

return [
    'dokumen' => [
        // --- KATEGORI 1: SURAT REKTOR & REGULASI KAMPUS ---
        [
            'id' => 'peraturan-rektor-no-5-2023',
            'slug' => 'peraturan-rektor-no-5-2023',
            'judul' => 'Peraturan Rektor Nomor 5 Tahun 2023 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan UPN "Veteran" Yogyakarta',
            'kategori' => 'Surat Rektor',
            'nomor_dokumen' => 'Peraturan Rektor No. 5/2023',
            'tanggal_terbit' => '2023',
            'deskripsi' => 'Peraturan resmi Rektor UPN "Veteran" Yogyakarta yang menjadi payung hukum utama pencegahan, penanganan, serta sanksi kekerasan seksual di kampus.',
            'file_path' => 'pedoman/Peraturan Rektor Nomor 5 2023.pdf',
            'ukuran' => '1.18 MB',
        ],
        [
            'id' => 'sk-rektor-pembentukan-satgas',
            'slug' => 'sk-rektor-pembentukan-satgas',
            'judul' => 'Surat Keputusan Rektor tentang Pembentukan Satgas PPKS UPN "Veteran" Yogyakarta',
            'kategori' => 'Surat Rektor',
            'nomor_dokumen' => 'SK-REK/PPKS/01/2024',
            'tanggal_terbit' => '15 Januari 2024',
            'deskripsi' => 'Surat Keputusan pengangkatan panitia seleksi dan susunan anggota Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual.',
            'file_path' => 'pedoman/sk-rektor-satgas-ppks.pdf',
            'ukuran' => '1.40 MB',
        ],

        // --- KATEGORI 2: STANDAR OPERASIONAL PROSEDUR (SOP) ---
        [
            'id' => 'sop-penanganan-baru',
            'slug' => 'sop-penanganan-baru',
            'judul' => 'Standar Operasional Prosedur (SOP) Penanganan dan Penindakan Kasus Kekerasan Seksual',
            'kategori' => 'SOP',
            'nomor_dokumen' => 'SOP/PPKS-UPNVY/2024',
            'tanggal_terbit' => '2024',
            'deskripsi' => 'Prosedur operasional baku dari alur penerimaan laporan, kerahasiaan identitas, asesmen kebutuhan korban, hingga investigasi terpadu.',
            'file_path' => 'pedoman/STANDAR OPERATING PROCEDURE Baru.pdf',
            'ukuran' => '3.64 MB',
        ],
        [
            'id' => 'sop-satgas-berttd',
            'slug' => 'sop-satgas-berttd',
            'judul' => 'Standar Operasional Prosedur (SOP) Resmi Ber-TTD Satgas PPKS',
            'kategori' => 'SOP',
            'nomor_dokumen' => 'SOP-LEGAL/PPKS/2024',
            'tanggal_terbit' => '2024',
            'deskripsi' => 'Salinan resmi Standar Operasional Prosedur yang telah ditandatangani oleh pimpinan Satgas PPKS dan otoritas universitas.',
            'file_path' => 'pedoman/sop berttd.pdf',
            'ukuran' => '2.96 MB',
        ],
        [
            'id' => 'sop-pendampingan-korban',
            'slug' => 'sop-pendampingan-korban',
            'judul' => 'SOP Layanan Pendampingan Psikologis, Hukum, dan Perlindungan Korban',
            'kategori' => 'SOP',
            'nomor_dokumen' => 'SOP/PPKS-02/REV.01',
            'tanggal_terbit' => '10 Februari 2024',
            'deskripsi' => 'Mekanisme pendampingan konseling psikologis, bantuan advokasi hukum, dan jaminan bebas intimidasi serta jaminan akademik korban.',
            'file_path' => 'pedoman/sop-pendampingan-korban.pdf',
            'ukuran' => '620 KB',
        ],

        // --- KATEGORI 3: PEDOMAN PENCEGAHAN ---
        [
            'id' => 'kep-1377-pedoman-operasional-standar',
            'slug' => 'kep-1377-pedoman-operasional-standar',
            'judul' => 'KEP 1377-2026 Pedoman Operasional Standar Satgas PPK UPN "Veteran" Yogyakarta',
            'kategori' => 'Pedoman Pencegahan',
            'nomor_dokumen' => 'KEP/1377/UN62/2026',
            'tanggal_terbit' => '2026',
            'deskripsi' => 'Pedoman operasional standar komprehensif pelaksanaan fungsi pencegahan, kampanye anti kekerasan seksual, dan mitigasi kerentanan kampus.',
            'file_path' => 'pedoman/KEP 1377-2026 Pedoman Operasional Standar Satgas PPK UPN VY.pdf',
            'ukuran' => '3.56 MB',
        ],
        [
            'id' => 'permendikbudristek-55-2024',
            'slug' => 'permendikbudristek-55-2024',
            'judul' => 'Permendikbudristek Nomor 55 Tahun 2024 tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi',
            'kategori' => 'Pedoman Pencegahan',
            'nomor_dokumen' => 'Permendikbudristek No. 55/2024',
            'tanggal_terbit' => '2024',
            'deskripsi' => 'Regulasi nasional mutakhir dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi sebagai pedoman utama pencegahan kekerasan di PT.',
            'file_path' => 'pedoman/Permendikbudristek-no-55-tahun-2024.pdf',
            'ukuran' => '2.15 MB',
        ],
        [
            'id' => 'buku-saku-pencegahan-ks',
            'slug' => 'buku-saku-pencegahan-ks',
            'judul' => 'Buku Saku Edukasi & Pedoman Pencegahan Kekerasan Seksual',
            'kategori' => 'Pedoman Pencegahan',
            'nomor_dokumen' => 'BUKU-SAKU-PPKS/2024',
            'tanggal_terbit' => '20 Maret 2024',
            'deskripsi' => 'Buku panduan saku edukatif mengenai 21 bentuk kekerasan seksual, consent, relasi kuasa di perkuliahan, dan panduan bystander intervention.',
            'file_path' => 'pedoman/buku-saku-pencegahan-ks.pdf',
            'ukuran' => '2.10 MB',
        ],

        // --- KATEGORI 4: KODE ETIK ---
        [
            'id' => 'kode-etik-interaksi-akademik',
            'slug' => 'kode-etik-interaksi-akademik',
            'judul' => 'Pedoman Kode Etik dan Perilaku Interaksi Akademik Bebas Kekerasan Seksual',
            'kategori' => 'Kode Etik',
            'nomor_dokumen' => 'KODE-ETIK-CIVITAS/2024',
            'tanggal_terbit' => '05 April 2024',
            'deskripsi' => 'Norma etika komunikasi dosen, tenaga kependidikan, dan mahasiswa dalam bimbingan skripsi, magang, riset laboratorium, dan organisasi kemahasiswaan.',
            'file_path' => 'pedoman/kode-etik-interaksi-akademik.pdf',
            'ukuran' => '980 KB',
        ],
    ],

    // Daftar kategori yang didukung
    'kategori_list' => [
        'Surat Rektor',
        'SOP',
        'Pedoman Pencegahan',
        'Kode Etik',
    ],
];
