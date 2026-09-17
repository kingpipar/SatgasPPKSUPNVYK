@extends('layouts.app')
@section('title', 'Profil Satgas — Satgas PPKS UPN "Veteran" Yogyakarta')
@section('content')

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
            <div>
                <div style="display: flex; align-items: center; gap: 28px; margin-bottom: 32px; padding-bottom: 24px; border-bottom: 1px solid var(--border-subtle); flex-wrap: wrap;">
                    <img src="{{ asset('images/logo satgas.jpg') }}"
                         alt="Logo Satgas PPKS UPN Veteran Yogyakarta"
                         style="width: 130px; height: auto; border-radius: var(--radius-lg); flex-shrink: 0;"
                         onerror="this.onerror=null; this.src='{{ asset('images/logo-satgas.png') }}';">
                    <div style="flex: 1; min-width: 240px;">
                        <span style="font-size: 0.82rem; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em; display: block; margin-bottom: 4px;">
                            Profil Satuan Tugas
                        </span>
                        <h2 style="font-size: 1.5rem; margin: 0 0 8px; color: var(--text-heading); line-height: 1.3;">
                            Satgas PPKS UPN "Veteran" Yogyakarta
                        </h2>
                        <p style="color: #64748b; margin: 0; line-height: 1.6; font-size: 0.92rem;">
                            Organ resmi kampus dalam pencegahan, penanganan laporan, serta pemulihan korban kekerasan seksual di lingkungan UPN "Veteran" Yogyakarta.
                        </p>
                    </div>
                </div>
                <h3 style="font-size: 1.35rem; margin-bottom: 16px; color: var(--primary);">Latar Belakang</h3>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 16px;">
                    Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) UPN "Veteran" Yogyakarta dibentuk berdasarkan amanah regulasi nasional yang mewajibkan setiap perguruan tinggi untuk memiliki organ khusus penanganan kekerasan seksual. Dasar hukum utama pembentukannya adalah <strong>Permendikbudristek Nomor 55 Tahun 2024</strong> tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi, yang menggantikan regulasi sebelumnya.
                </p>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 16px;">
                    Di tingkat institusi, keberadaan Satgas PPKS dikukuhkan melalui <strong>Peraturan Rektor UPN "Veteran" Yogyakarta Nomor 5 Tahun 2023</strong> tentang Pencegahan dan Penanganan Kekerasan Seksual di lingkungan UPN "Veteran" Yogyakarta, yang mengatur secara rinci mekanisme pencegahan, penanganan laporan, serta sanksi bagi pelaku.
                </p>
                <p style="text-align: justify; line-height: 1.85; color: #334155; margin-bottom: 36px;">
                    Satgas PPKS berkomitmen untuk menjaga kerahasiaan identitas pelapor dan korban, memberikan layanan pendampingan psikologis dan hukum, serta memastikan proses penanganan yang adil, transparan, dan bebas dari pengaruh relasi kuasa di lingkungan akademik.
                </p>
                <div style="padding-top: 24px; border-top: 1px solid var(--border-subtle);">
                    <h3 style="font-size: 1.35rem; margin: 0 0 10px; color: var(--primary);">Visi</h3>
                    <p style="font-style: italic; color: #334155; margin-bottom: 24px; font-size: 1.02rem; line-height: 1.75;">
                        "Menjadi garda terdepan terciptanya lingkungan akademik UPN 'Veteran' Yogyakarta yang berkarakter bela negara, inklusif, humanis, dan nir-kekerasan seksual bagi seluruh sivitas akademika."
                    </p>

                    <h3 style="font-size: 1.35rem; margin: 0 0 12px; color: var(--primary);">Misi</h3>
                    <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 10px; color: #334155; line-height: 1.75; margin: 0;">
                        <li>Melaksanakan edukasi dan pencegahan kekerasan seksual secara terstruktur dan berkelanjutan di seluruh fakultas dan unit kampus.</li>
                        <li>Menyelenggarakan mekanisme penerimaan laporan yang aman, terpercaya, dan menjamin 100% kerahasiaan identitas korban serta saksi.</li>
                        <li>Memberikan layanan pendampingan komprehensif mencakup pemulihan psikologis, pendampingan hukum, dan proteksi keselamatan akademik korban.</li>
                        <li>Melakukan penanganan laporan secara adil, objektif, transparan, bebas dari intervensi relasi kuasa, serta merekomendasikan sanksi yang berkeadilan.</li>
                    </ul>
                </div>
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
                            <span><strong>Permendikbudristek No. 55/2024</strong> tentang Pencegahan dan Penanganan Kekerasan di Perguruan Tinggi.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 1px;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Peraturan Rektor UPNVY No. 5/2023</strong> tentang Pencegahan &amp; Penanganan Kekerasan Seksual.</span>
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
