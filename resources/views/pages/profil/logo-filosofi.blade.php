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
                Makna simbolik, filosofi elemen visual, dan representasi nilai perlindungan di balik lambang resmi Satgas PPKS UPN "Veteran" Yogyakarta.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <!-- Visual Logo Showcase Card -->
        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 40px; box-shadow: var(--shadow-md); margin-bottom: 50px;">
            <div style="display: grid; grid-template-columns: 320px 1fr; gap: 40px; align-items: center;">
                
                <!-- =======================================================================
                     TEMPAT GAMBAR LOGO UTAMA
                     Petunjuk Anda:
                     - Letakkan file gambar logo Satgas Anda di: public/images/logo-satgas.png
                     - Jika file belum ada, sistem menampilkan fallback vector SVG yang estetik
                     ======================================================================= -->
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background: linear-gradient(145deg, #f0f7f3 0%, #e2efe8 100%); border-radius: var(--radius-lg); padding: 36px; border: 1px solid var(--primary-border);">
                    <img src="{{ asset('images/logo-satgas.png') }}" 
                         alt="Logo Satgas PPKS UPN Veteran Yogyakarta" 
                         style="max-width: 180px; height: auto;"
                         onerror="this.onerror=null; this.src='{{ asset('images/logo-satgas.svg') }}';">
                    <span style="margin-top: 16px; font-size: 0.82rem; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.05em;">
                        Lambang Resmi Satgas PPKS
                    </span>
                    <span style="font-size: 0.75rem; color: #64748b; margin-top: 4px;">
                        UPN "Veteran" Yogyakarta
                    </span>
                </div>

                <div>
                    <span class="section-tag">Filosofi Lambang</span>
                    <h2 style="font-size: 1.9rem; margin-bottom: 14px; color: var(--primary);">
                        Simbol Keberanian, Keadilan, dan Pemulihan
                    </h2>
                    <p style="color: var(--text-muted); line-height: 1.75; margin-bottom: 20px;">
                        Logo Satgas PPKS UPN "Veteran" Yogyakarta dirancang dengan memadukan nilai-nilai bela negara, kepekaan kemanusiaan, serta ketegasan institusi dalam melindungi seluruh sivitas akademika. Setiap guratan garis, sudut, dan warna memiliki pesan filosofis yang mendalam sebagai komitmen perlindungan tanpa henti.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 12px;">
                        <span style="display: inline-flex; align-items: center; gap: 6px; background: var(--primary-subtle); color: var(--primary); padding: 6px 14px; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 600;">
                            #BelaNegaraTanpaKekerasan
                        </span>
                        <span style="display: inline-flex; align-items: center; gap: 6px; background: var(--primary-subtle); color: var(--primary); padding: 6px 14px; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 600;">
                            #RuangAmanKampus
                        </span>
                        <span style="display: inline-flex; align-items: center; gap: 6px; background: var(--primary-subtle); color: var(--primary); padding: 6px 14px; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 600;">
                            #BeraniBicara
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Makna Elemen Visual -->
        <div class="section-header" style="text-align: left; max-width: 100%; margin-bottom: 30px;">
            <h3 style="font-size: 1.7rem; color: var(--primary);">Uraian Makna Elemen &amp; Warna</h3>
            <p style="color: var(--text-muted);">Penjabaran setiap komponen simbolik dalam logo:</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
            <!-- Elemen 1: Perisai -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h4>1. Bentuk Perisai Perlindungan</h4>
                <p>
                    Melambangkan fungsi utama Satgas PPKS sebagai perisai pelindung, benteng keadilan, dan jaminan rasa aman bagi setiap mahasiswa, dosen, dan tenaga kependidikan di kampus.
                </p>
            </div>

            <!-- Elemen 2: Warna Hijau Hutan UPN -->
            <div class="feature-card">
                <div class="feature-icon-box" style="background: #3c745e; color: #ffffff;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <h4>2. Warna Hijau Tua (#3c745e)</h4>
                <p>
                    Warna identitas bela negara UPN "Veteran" Yogyakarta. Merefleksikan ketenangan, kedamaian, integritas nurani, serta komitmen etis pengabdian kampus kepada masyarakat dan bangsa.
                </p>
            </div>

            <!-- Elemen 3: Tunas Harapan & Tangan Merangkul -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                        <path d="M2 12h20"></path>
                    </svg>
                </div>
                <h4>3. Tunas Kehidupan &amp; Tangan Perlindungan</h4>
                <p>
                    Bentuk tunas yang bertumbuh di dalam dekapan melambangkan proses pemulihan (trauma healing), harapan masa depan korban, serta dukungan penuh yang tidak menghakimi.
                </p>
            </div>

            <!-- Elemen 4: Titik Emas Pencerahan -->
            <div class="feature-card">
                <div class="feature-icon-box" style="background: #fffbeb; color: #d97706;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h4>4. Aksen Emas / Kuning</h4>
                <p>
                    Melambangkan kejujuran intelektual, optimisme, dan keberanian menegakkan kebenaran (*whistleblowing*) dalam membongkar tabir kekerasan seksual tanpa keraguan.
                </p>
            </div>

            <!-- Elemen 5: Pita Tegas PPKS -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                        <circle cx="12" cy="5" r="2"></circle>
                        <path d="M12 7v4"></path>
                    </svg>
                </div>
                <h4>5. Pita / Tipografi Penegasan</h4>
                <p>
                    Menegaskan legalitas yuridis Satgas PPKS sebagai badan resmi yang berwenang menindaklanjuti laporan berdasarkan regulasi rektorat dan kementerian.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
