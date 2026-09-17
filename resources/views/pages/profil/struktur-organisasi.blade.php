@extends('layouts.app')
@section('title', 'Struktur Organisasi')
@section('meta_description', 'Struktur kepengurusan dan susunan panitia/tim Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS).')
@section('content')

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title">Struktur Organisasi Satgas PPKS</h1>
        <p class="page-header-subtitle">
            Susunan keanggotaan dan pembagian divisi kerja yang representatif dari unsur dosen, tenaga kependidikan, dan mahasiswa.
        </p>
        <div class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>&bull;</span>
            <span>Profil</span>
            <span>&bull;</span>
            <span style="color: #ffffff;">Struktur Organisasi</span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="card" style="margin-bottom: 40px; background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);">
            <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                <div style="width: 52px; height: 52px; border-radius: 12px; background: var(--secondary); color: white; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div style="flex: 1; min-width: 280px;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--primary); margin-bottom: 4px;">
                        Komposisi Anggota Sesuai Mandat Permendikbudristek
                    </h3>
                    <p style="font-size: 0.92rem; color: var(--text-muted);">
                        Sesuai Pasal 26 Permendikbudristek No. 30 Tahun 2021, keanggotaan Satgas PPKS terdiri dari unsur Dosen, Tenaga Kependidikan, dan Mahasiswa, dengan keterwakilan perempuan paling sedikit 50% (lima puluh persen).
                    </p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-bottom: 48px;">
            <div style="display: flex; justify-content: center; gap: 24px; flex-wrap: wrap; margin-bottom: 32px;">
                <div class="card" style="width: 320px; text-align: center; border-top: 4px solid var(--primary);">
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: #0b192c; color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-weight: 800; font-size: 1.2rem;">
                        KT
                    </div>
                    <span style="font-size: 0.78rem; font-weight: 700; color: var(--secondary); text-transform: uppercase;">Pimpinan</span>
                    <h3 style="font-size: 1.2rem; color: var(--primary); margin: 6px 0 4px;">Ketua Satgas PPKS</h3>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 8px;">Koordinator Utama & Penanggung Jawab Pelaksanaan Mandat</p>
                    <span style="display: inline-block; padding: 2px 10px; background: #e2e8f0; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Unsur Dosen</span>
                </div>

                <div class="card" style="width: 320px; text-align: center; border-top: 4px solid var(--secondary);">
                    <div style="width: 64px; height: 64px; border-radius: 50%; background: #008170; color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-weight: 800; font-size: 1.2rem;">
                        SK
                    </div>
                    <span style="font-size: 0.78rem; font-weight: 700; color: var(--secondary); text-transform: uppercase;">Administrasi & Tata Usaha</span>
                    <h3 style="font-size: 1.2rem; color: var(--primary); margin: 6px 0 4px;">Sekretaris Satgas</h3>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 8px;">Pengelolaan Administrasi, Dokumen Kasus & Logistik</p>
                    <span style="display: inline-block; padding: 2px 10px; background: #e2e8f0; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">Unsur Tendik</span>
                </div>
            </div>
            <div style="width: 2px; height: 30px; background: #cbd5e1; margin: 0 auto;"></div>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="card-icon" style="background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                </div>
                <h3 class="card-title">Divisi Edukasi & Pencegahan</h3>
                <p class="card-text" style="margin-bottom: 16px;">
                    Bertanggung jawab menyusun modul pembelajaran pencegahan, menggelar sosialisasi di ospek mahasiswa baru, kampanye media sosial, serta pelatihan relawan kampus.
                </p>
                <div style="border-top: 1px solid var(--border-subtle); padding-top: 12px; font-size: 0.85rem; color: var(--text-muted);">
                    <strong>Anggota:</strong> Perwakilan Dosen dan Mahasiswa Aktif
                </div>
            </div>
            <div class="card">
                <div class="card-icon" style="background: rgba(220, 38, 38, 0.1); color: #dc2626;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3 class="card-title">Divisi Penanganan & Investigasi</h3>
                <p class="card-text" style="margin-bottom: 16px;">
                    Menerima formulir laporan pengaduan, memvalidasi bukti digital/fisik, melakukan pemeriksaan keterangan pihak terkait, dan merumuskan kesimpulan hasil investigasi.
                </p>
                <div style="border-top: 1px solid var(--border-subtle); padding-top: 12px; font-size: 0.85rem; color: var(--text-muted);">
                    <strong>Anggota:</strong> Ahli Hukum Kampus & Tim Pemeriksa Bersertifikat
                </div>
            </div>
            <div class="card">
                <div class="card-icon" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
                <h3 class="card-title">Divisi Pendampingan & Pemulihan</h3>
                <p class="card-text" style="margin-bottom: 16px;">
                    Menyediakan pendampingan psikologis (bekerja sama dengan pusat konseling kampus), bantuan advokasi hukum, serta perlindungan hak studi akademik bagi korban.
                </p>
                <div style="border-top: 1px solid var(--border-subtle); padding-top: 12px; font-size: 0.85rem; color: var(--text-muted);">
                    <strong>Anggota:</strong> Psikolog Kampus & Peer Counselor Mahasiswa
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
