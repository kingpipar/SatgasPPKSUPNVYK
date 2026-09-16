@extends('layouts.app')

@section('title', 'Struktur Kepengurusan — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- Page Header -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span>Profil</span>
                <span>/</span>
                <span style="color: #ffffff;">Struktur Kepengurusan</span>
            </div>
            <h1 class="page-banner-title">Struktur Kepengurusan Satgas PPKS</h1>
            <p class="page-banner-desc">
                Susunan organisasi, bidang kerja, serta jajaran tim Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual UPN "Veteran" Yogyakarta.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        
        <!-- Bagan Struktur Visual -->
        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 36px; box-shadow: var(--shadow-md); margin-bottom: 48px;">
            <div class="section-header" style="margin-bottom: 30px;">
                <span class="section-tag">Bagan Organisasi</span>
                <h2 class="section-title">Bagan Struktur Organisasi Resmi</h2>
                <p class="section-desc">
                    Hubungan koordinatif dan fungsi operasional Satgas PPKS di lingkungan UPN "Veteran" Yogyakarta.
                </p>
            </div>

            <!-- =======================================================================
                 TEMPAT GAMBAR BAGAN STRUKTUR ORGANISASI
                 Petunjuk Anda:
                 - File bagan organisasi Anda berada di: public/images/struktur-organisasi.png
                 - Anda dapat memperbarui file ini sewaktu-waktu sesuai pembaruan SK
                 ======================================================================= -->
            <div style="text-align: center; background: #fdfdfd; padding: 20px; border-radius: var(--radius-lg); border: 1px solid var(--border-subtle);">
                <img src="{{ asset('images/struktur-organisasi.png') }}" 
                     alt="Bagan Struktur Organisasi Satgas PPKS UPN Veteran Yogyakarta" 
                     style="max-width: 100%; height: auto; margin: 0 auto; border-radius: var(--radius-md); box-shadow: var(--shadow-sm);"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                
                <div style="display: none; padding: 40px; color: var(--text-muted);">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5" style="margin: 0 auto 12px;">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <p>Gambar bagan struktur organisasi dapat diletakkan pada: <code>public/images/struktur-organisasi.png</code></p>
                </div>
            </div>
        </div>

        <!-- Pembagian Divisi & Tugas Kerja -->
        <div class="section-header">
            <span class="section-tag">Tupoksi Divisi</span>
            <h2 class="section-title">Bidang dan Divisi Operasional</h2>
            <p class="section-desc">
                Pembagian peran strategis dalam mengawal penanganan komprehensif tanpa konflik kepentingan.
            </p>
        </div>

        <div class="card-grid">
            <!-- Divisi 1 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h4>Divisi Pencegahan &amp; Sosialisasi</h4>
                <p style="margin-bottom: 16px;">
                    Merancang kurikulum edukasi, modul anti-kekerasan seksual dalam PKKBN/Ospek, pelatihan calon satgas fakultas, serta kampanye kesadaran publik di media kampus.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; font-weight: 600; color: var(--primary);">
                    Fokus: Edukasi, Kampanye &amp; Mitigasi Risiko
                </div>
            </div>

            <!-- Divisi 2 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h4>Divisi Penanganan &amp; Investigasi</h4>
                <p style="margin-bottom: 16px;">
                    Menerima aduan resmi, melakukan verifikasi bukti faktual, pemanggilan pihak-pihak terkait dalam ruang tertutup yang aman, serta menyusun berita acara pemeriksaan.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; font-weight: 600; color: var(--primary);">
                    Fokus: Verifikasi, Olah Fakta &amp; Rekomendasi Sanksi
                </div>
            </div>

            <!-- Divisi 3 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
                <h4>Divisi Pendampingan &amp; Pemulihan</h4>
                <p style="margin-bottom: 16px;">
                    Memberikan pendampingan psikologis, memfasilitasi konselor profesional, mendampingi proses hukum di kepolisian bila diminta, serta menjamin kelancaran akademik korban.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; font-weight: 600; color: var(--primary);">
                    Fokus: Konseling, Advokasi Hukum &amp; Hak Akademik
                </div>
            </div>
        </div>

        <!-- Komitmen Kerahasiaan & Integritas Pengurus -->
        <div style="margin-top: 48px; background: linear-gradient(135deg, #f0f7f3 0%, #e2efe8 100%); border: 1px solid var(--primary-border); border-radius: var(--radius-xl); padding: 32px; display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
            <div style="width: 56px; height: 56px; border-radius: var(--radius-full); background: var(--primary); color: #ffffff; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </div>
            <div style="flex: 1; min-width: 260px;">
                <h4 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 6px;">
                    Pakta Integritas dan Sumpah Kerahasiaan Pengurus
                </h4>
                <p style="color: var(--text-muted); font-size: 0.94rem; margin-bottom: 0; line-height: 1.6;">
                    Seluruh anggota Satgas PPKS UPN "Veteran" Yogyakarta telah menandatangani pakta integritas resmi yang mengikat secara hukum untuk menjaga kerahasiaan identitas saksi dan korban seumur hidup, serta bertindak netral tanpa benturan kepentingan keluarga maupun jabatan akademik.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
