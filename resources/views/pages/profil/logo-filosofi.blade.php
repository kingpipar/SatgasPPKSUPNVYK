@extends('layouts.app')

@section('title', 'Logo dan Filosofi — Satgas PPKS UPN "Veteran" Yogyakarta')

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
                <span style="color: #ffffff;">Logo dan Filosofi</span>
            </div>
            <h1 class="page-banner-title">Logo dan Filosofi Lambang</h1>
            <p class="page-banner-desc">
                Makna simbolik dan filosofi di balik lambang resmi Satgas PPKS UPN "Veteran" Yogyakarta.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">

        <!-- Logo + Filosofi Utama -->
        <div style="display: grid; grid-template-columns: 280px 1fr; gap: 48px; align-items: flex-start; margin-bottom: 56px;">

            <!-- Logo -->
            <div style="text-align: center;">
                <div style="background: linear-gradient(145deg, #f0f7f3 0%, #e2efe8 100%); border-radius: var(--radius-xl); padding: 40px 32px; border: 1px solid var(--primary-border);">
                    <img src="{{ asset('images/logo satgas.jpg') }}"
                         alt="Logo Satgas PPKS UPN Veteran Yogyakarta"
                         style="max-width: 180px; height: auto; display: block; margin: 0 auto;"
                         onerror="this.onerror=null; this.src='{{ asset('images/logo-satgas.png') }}';">
                    <p style="margin-top: 16px; font-size: 0.82rem; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">
                        Lambang Resmi Satgas PPKS
                    </p>
                    <p style="font-size: 0.75rem; color: #64748b; margin: 0;">UPN "Veteran" Yogyakarta</p>
                </div>
            </div>

            <!-- Narasi Filosofi -->
            <div>
                <span class="section-tag">Filosofi Logo</span>
                <h2 style="font-size: 1.8rem; color: var(--primary); margin: 12px 0 24px;">Makna di Balik Lambang</h2>

                <!-- a. Bentuk -->
                <h3 style="font-size: 1.2rem; color: var(--text-heading); margin-bottom: 16px; padding-bottom: 8px; border-bottom: 2px solid var(--primary-subtle);">a. Bentuk</h3>

                <div style="margin-bottom: 20px; padding: 20px; background: var(--bg-surface); border-radius: var(--radius-md); border: 1px solid var(--border-subtle);">
                    <h4 style="color: var(--primary); font-size: 1rem; margin: 0 0 10px;">• Lingkaran Luar (Hijau dan Biru)</h4>
                    <p style="color: #334155; line-height: 1.75; margin: 0 0 10px;">
                        Melambangkan kesatuan, inklusivitas, dan perlindungan menyeluruh dari Satuan Tugas. Warna hijau mencerminkan pertumbuhan dan harapan, sementara warna biru merepresentasikan kepercayaan dan stabilitas.
                    </p>
                    <p style="color: #334155; line-height: 1.75; margin: 0;">
                        Lingkaran ini menggambarkan komitmen Satgas untuk menciptakan ruang aman dan responsif bagi seluruh anggota komunitas kampus.
                    </p>
                </div>

                <div style="padding: 20px; background: var(--bg-surface); border-radius: var(--radius-md); border: 1px solid var(--border-subtle);">
                    <h4 style="color: var(--primary); font-size: 1rem; margin: 0 0 10px;">• Tiga Figur Berpegangan Tangan (Pink, Hijau, Biru)</h4>
                    <p style="color: #334155; line-height: 1.75; margin: 0 0 10px;">
                        Merepresentasikan keberagaman individu dalam komunitas kampus, yakni mahasiswa, dosen, dan tenaga kependidikan. Figur-figur yang saling terhubung melambangkan kolaborasi, solidaritas, serta dukungan antar sesama dalam upaya pencegahan dan penanganan kekerasan.
                    </p>
                    <p style="color: #334155; line-height: 1.75; margin: 0;">
                        Bentuknya yang mengalir mencerminkan pendekatan Satgas yang suportif, empatik, dan tidak menghakimi. Gerakan dua figur pinggir yang "membuka" ke atas menggambarkan harapan, optimisme, dan semangat bersama untuk menciptakan lingkungan yang lebih baik.
                    </p>
                </div>

                <!-- b. Warna -->
                <h3 style="font-size: 1.2rem; color: var(--text-heading); margin: 32px 0 16px; padding-bottom: 8px; border-bottom: 2px solid var(--primary-subtle);">b. Warna</h3>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
                    <!-- Pink -->
                    <div style="padding: 20px; background: #fff0f6; border-radius: var(--radius-md); border: 1px solid #f9a8d4;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="width: 20px; height: 20px; border-radius: 50%; background: #ec4899; display: inline-block; flex-shrink: 0;"></span>
                            <h4 style="color: #9d174d; font-size: 0.95rem; margin: 0;">Pink (Figur Tengah)</h4>
                        </div>
                        <p style="font-size: 0.88rem; color: #4a1942; line-height: 1.65; margin: 0;">
                            Menandakan kelembutan, empati, kasih sayang, dan keberanian. Warna ini mencerminkan pendekatan sensitif dalam mendampingi korban serta mendorong keberanian untuk bersuara.
                        </p>
                    </div>

                    <!-- Hijau -->
                    <div style="padding: 20px; background: var(--primary-subtle); border-radius: var(--radius-md); border: 1px solid var(--primary-border);">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="width: 20px; height: 20px; border-radius: 50%; background: var(--primary); display: inline-block; flex-shrink: 0;"></span>
                            <h4 style="color: var(--primary-dark); font-size: 0.95rem; margin: 0;">Hijau (Figur Kiri)</h4>
                        </div>
                        <p style="font-size: 0.88rem; color: #1b382d; line-height: 1.65; margin: 0;">
                            Melambangkan pertumbuhan, kesegaran, harapan, dan keamanan. Merepresentasikan upaya menciptakan lingkungan kampus yang asri dan bebas kekerasan serta proses pemulihan bagi korban.
                        </p>
                    </div>

                    <!-- Biru -->
                    <div style="padding: 20px; background: #eff6ff; border-radius: var(--radius-md); border: 1px solid #bfdbfe;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <span style="width: 20px; height: 20px; border-radius: 50%; background: #3b82f6; display: inline-block; flex-shrink: 0;"></span>
                            <h4 style="color: #1e40af; font-size: 0.95rem; margin: 0;">Biru (Figur Kanan)</h4>
                        </div>
                        <p style="font-size: 0.88rem; color: #1e3a8a; line-height: 1.65; margin: 0;">
                            Menandakan kepercayaan, ketenangan, profesionalisme, dan stabilitas. Menggambarkan komitmen Satgas untuk bekerja secara adil, profesional, dan dapat dipercaya oleh seluruh civitas akademika.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
