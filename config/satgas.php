<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Password Administrator Mini-CRUD Galeri
    |--------------------------------------------------------------------------
    | Password tunggal untuk mengakses modul manajemen galeri (/kelola-galeri).
    | Tersimpan di file .env dengan variabel ADMIN_PASSWORD.
    */
    'admin_password' => env('ADMIN_PASSWORD', 'SatgasPPKS#2026'),

    /*
    |--------------------------------------------------------------------------
    | Tautan Google Form Pelaporan Eksternal
    |--------------------------------------------------------------------------
    | URL Google Form tempat korban atau pelapor mengisi laporan kekerasan.
    */
    'google_form_url' => env('GOOGLE_FORM_URL', 'https://forms.gle/samplePPKSreportURL'),

    /*
    |--------------------------------------------------------------------------
    | Identitas & Kontak Resmi
    |--------------------------------------------------------------------------
    */
    'instansi' => 'Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (PPKS)',
    'kampus'   => 'UPN "Veteran" Yogyakarta',
    'alamat'   => 'Jl. Padjajaran, Sleman, Yogyakarta, Indonesia. 55283',
    'telepon'  => '081225573747',
    'instagram'=> '@satgasppkupnvy',
    'instagram_url' => 'https://instagram.com/satgasppkupnvy',
    'email'    => 'satgas.ppks@upnyk.ac.id',
];
