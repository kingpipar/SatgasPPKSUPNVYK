@extends('layouts.app')

@section('title', 'Profil Satgas — Satgas PPKS UPN "Veteran" Yogyakarta')

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
                <span style="color: #ffffff;">Profil Satgas</span>
            </div>
            <h1 class="page-banner-title">Profil Satgas PPKS</h1>
            <p class="page-banner-desc">
                Mengenal Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual UPN "Veteran" Yogyakarta, mandat resmi, visi, dan misi.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 48px; align-items: flex-start;">

            <!-- Konten Utama -->
            <div>
                <h2 style="font-size: 1.6rem; margin-bottom: 18px; color: var(--primary);">Latar Belakang</h2>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 16px;">
                    Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) UPN "Veteran" Yogyakarta dibentuk berdasarkan amanah regulasi nasional yang mewajibkan setiap perguruan tinggi untuk memiliki organ khusus penanganan kekerasan seksual. Dasar hukum utama pembentukannya adalah <strong>Permendikbudristek Nomor 55 Tahun 2024</strong> tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi, yang menggantikan regulasi sebelumnya.
                </p>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 16px;">
                    Di tingkat institusi, keberadaan Satgas PPKS dikukuhkan melalui <strong>Peraturan Rektor UPN "Veteran" Yogyakarta Nomor 5 Tahun 2023</strong> tentang Pencegahan dan Penanganan Kekerasan Seksual di lingkungan UPN "Veteran" Yogyakarta, yang mengatur secara rinci mekanisme pencegahan, penanganan laporan, serta sanksi bagi pelaku.
                </p>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 16px;">
                    Adapun pedoman operasional teknis penyelenggaraan Satgas PPKS secara komprehensif diatur dalam <strong>Keputusan Rektor UPN "Veteran" Yogyakarta Nomor 1377 Tahun 2026</strong> tentang Pedoman Operasional Standar Satgas PPKS UPN "Veteran" Yogyakarta, yang mencakup prosedur penanganan laporan, mekanisme pendampingan korban, serta tata kelola kelembagaan.
                </p>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 40px;">
                    Satgas PPKS berkomitmen untuk menjaga kerahasiaan identitas pelapor dan korban, memberikan layanan pendampingan psikologis dan hukum, serta memastikan proses penanganan yang adil, transparan, dan bebas dari pengaruh relasi kuasa di lingkungan akademik.
                </p>

                <!-- Visi & Misi (Tanpa Card Box, dengan Logo Satgas) -->
                <div style="margin-top: 36px; padding-top: 32px; border-top: 1px solid var(--border-subtle);">
                    <div class="visi-misi-wrapper" style="display: grid; grid-template-columns: 180px 1fr; gap: 36px; align-items: flex-start;">
                        <!-- Logo Satgas -->
                        <div style="text-align: center;">
                            <img src="{{ asset('images/logo satgas.jpg') }}"
                                 alt="Logo Satgas PPKS UPN Veteran Yogyakarta"
                                 style="max-width: 100%; height: auto; border-radius: var(--radius-lg); display: block; margin: 0 auto;"
                                 onerror="this.onerror=null; this.src='{{ asset('images/logo-satgas.png') }}';">
                            <span style="display: block; margin-top: 10px; font-size: 0.78rem; font-weight: 600; color: var(--primary); letter-spacing: 0.04em;">
                                SATGAS PPKS UPNVY
                            </span>
                        </div>

                        <!-- Teks Visi & Misi -->
                        <div>
                            <h3 style="font-size: 1.3rem; margin: 0 0 10px; color: var(--primary);">Visi</h3>
                            <p style="font-style: italic; color: #334155; margin-bottom: 28px; font-size: 1.02rem; line-height: 1.75;">
                                "Menjadi garda terdepan terciptanya lingkungan akademik UPN 'Veteran' Yogyakarta yang berkarakter bela negara, inklusif, humanis, dan nir-kekerasan seksual bagi seluruh sivitas akademika."
                            </p>

                            <h3 style="font-size: 1.3rem; margin: 0 0 12px; color: var(--primary);">Misi</h3>
                            <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 10px; color: #334155; line-height: 1.75; margin: 0;">
                                <li>Melaksanakan edukasi dan pencegahan kekerasan seksual secara terstruktur dan berkelanjutan di seluruh fakultas dan unit kampus.</li>
                                <li>Menyelenggarakan mekanisme penerimaan laporan yang aman, terpercaya, dan menjamin 100% kerahasiaan identitas korban serta saksi.</li>
                                <li>Memberikan layanan pendampingan komprehensif mencakup pemulihan psikologis, pendampingan hukum, dan proteksi keselamatan akademik korban.</li>
                                <li>Melakukan penanganan laporan secara adil, objektif, transparan, bebas dari intervensi relasi kuasa, serta merekomendasikan sanksi yang berkeadilan.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <style>
                    @media (max-width: 640px) {
                        .visi-misi-wrapper {
                            grid-template-columns: 1fr !important;
                            gap: 24px !important;
                        }
                        .visi-misi-wrapper img {
                            max-width: 140px !important;
                        }
                    }
                </style>
            </div>

            <!-- Sidebar Info Box -->
            <div style="position: sticky; top: 110px;">
                <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 28px; box-shadow: var(--shadow-md);">
                    <h3 style="font-size: 1.1rem; margin-bottom: 18px; color: var(--primary); border-bottom: 2px solid var(--primary-subtle); padding-bottom: 8px;">
                        Dasar Hukum
                    </h3>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 14px; font-size: 0.88rem;">
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 1px;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Permendikbudristek No. 55/2024</strong> tentang Pencegahan dan Penanganan Kekerasan di PT.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 1px;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Peraturan Rektor UPNVY No. 5/2023</strong> tentang Pencegahan &amp; Penanganan Kekerasan Seksual.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 1px;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>KEP Rektor UPNVY No. 1377/2026</strong> tentang Pedoman Operasional Standar Satgas PPKS.</span>
                        </li>
                    </ul>

                    <div style="margin-top: 24px; padding-top: 18px; border-top: 1px solid var(--border-subtle); text-align: center;">
                        <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm" style="width: 100%;">
                            <span>Buka Dokumen Pedoman</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
