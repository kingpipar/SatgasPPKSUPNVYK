@extends('layouts.app')
@section('title', 'Logo dan Filosofi — Satgas PPKS UPN "Veteran" Yogyakarta')
@section('content')

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
        <div style="display: grid; grid-template-columns: 280px 1fr; gap: 48px; align-items: flex-start; margin-bottom: 56px;">
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
            <div>
                <span class="section-tag">Filosofi Logo</span>
                <h2 style="font-size: 1.8rem; color: var(--primary); margin: 12px 0 24px;">Makna di Balik Lambang</h2>
                <h3 style="font-size: 1.25rem; color: var(--text-heading); margin-bottom: 14px; padding-bottom: 6px; border-bottom: 2px solid var(--primary-subtle);">a. Bentuk</h3>
                <p style="color: #334155; line-height: 1.85; text-align: justify; margin-bottom: 16px;">
                    <strong>Lingkaran Luar (Hijau dan Biru)</strong> melambangkan kesatuan, inklusivitas, dan perlindungan menyeluruh dari Satuan Tugas. Warna hijau mencerminkan pertumbuhan dan harapan, sedangkan warna biru merepresentasikan kepercayaan dan stabilitas. Lingkaran ini menggambarkan komitmen teguh Satgas untuk senantiasa menciptakan ruang aman dan responsif bagi seluruh anggota komunitas kampus.
                </p>
                <p style="color: #334155; line-height: 1.85; text-align: justify; margin-bottom: 32px;">
                    <strong>Tiga Figur Berpegangan Tangan (Pink, Hijau, Biru)</strong> merepresentasikan keberagaman individu dalam komunitas kampus, yakni mahasiswa, dosen, dan tenaga kependidikan. Figur-figur yang saling terhubung melambangkan kolaborasi, solidaritas, serta dukungan antar sesama dalam upaya pencegahan dan penanganan kekerasan. Bentuknya yang mengalir mencerminkan pendekatan Satgas yang suportif, empatik, dan tidak menghakimi, sementara gerakan dua figur pinggir yang "membuka" ke atas menggambarkan harapan, optimisme, dan semangat bersama untuk menciptakan lingkungan yang lebih baik.
                </p>
                <h3 style="font-size: 1.25rem; color: var(--text-heading); margin-bottom: 14px; padding-bottom: 6px; border-bottom: 2px solid var(--primary-subtle);">b. Warna</h3>
                <p style="color: #334155; line-height: 1.85; text-align: justify; margin-bottom: 16px;">
                    <strong>Pink (Figur Tengah)</strong> menandakan kelembutan, empati, kasih sayang, dan keberanian. Warna ini mencerminkan pendekatan yang sensitif dalam mendampingi korban serta mendorong keberanian untuk bersuara.
                </p>
                <p style="color: #334155; line-height: 1.85; text-align: justify; margin-bottom: 16px;">
                    <strong>Hijau (Figur Kiri)</strong> melambangkan pertumbuhan, kesegaran, harapan, dan keamanan. Warna ini merepresentasikan upaya menciptakan lingkungan kampus yang asri dan bebas kekerasan, serta proses pemulihan bagi korban.
                </p>
                <p style="color: #334155; line-height: 1.85; text-align: justify; margin-bottom: 0;">
                    <strong>Biru (Figur Kanan)</strong> menandakan kepercayaan, ketenangan, profesionalisme, dan stabilitas. Warna ini menggambarkan komitmen Satgas untuk bekerja secara adil, profesional, dan dapat dipercaya oleh seluruh sivitas akademika.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
