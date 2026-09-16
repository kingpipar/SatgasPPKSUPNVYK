@extends('layouts.app')

@section('title', 'Pelayanan & Alur Pelaporan — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span style="color: #ffffff;">Pelayanan &amp; Pengaduan</span>
            </div>
            <h1 class="page-banner-title">Layanan &amp; Alur Proses Pelaporan</h1>
            <p class="page-banner-desc">
                Informasi alur baku penanganan aduan, perlindungan kerahasiaan identitas korban, serta akses langsung formulir pengaduan daring resmi.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">

        <!-- Banner CTA Utama ke Google Form Eksternal -->
        <div class="reporting-hero-banner">
            <span style="background: rgba(255, 255, 255, 0.2); padding: 5px 16px; border-radius: var(--radius-full); font-size: 0.85rem; font-weight: 700; margin-bottom: 14px; text-transform: uppercase; letter-spacing: 0.05em;">
                Kanal Resmi Pengaduan Terpadu
            </span>
            <h3>Formulir Pelaporan Kekerasan Seksual Daring</h3>
            <p>
                Jika Anda menjadi korban atau saksi dugaan kekerasan seksual di lingkungan kampus UPN "Veteran" Yogyakarta, laporkan segera melalui formulir daring terenkripsi. Identitas Anda dijamin 100% rahasia dan aman dari segala bentuk ancaman maupun intimidasi.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                <a href="{{ $googleFormUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-lapor btn-lg" style="box-shadow: 0 6px 20px rgba(217, 83, 79, 0.45);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <span>Buka Google Form Pengaduan Resmi</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>

            <div class="hotline-pills">
                <div class="hotline-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Hotline Darurat: 081225573747</span>
                </div>
                <div class="hotline-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>Waktu Respon Awal: Maks. 3x24 Jam</span>
                </div>
                <div class="hotline-pill">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span>Anonimitas Dijamin</span>
                </div>
            </div>
        </div>

        <!-- =======================================================================
             BAGAN GAMBAR ALUR / SOP PROSES PELAPORAN
             Petunjuk Anda:
             - Letakkan file gambar alur/diagram SOP Anda di: public/images/alur-pelaporan.png
             - Jika file belum ada, sistem otomatis menampilkan diagram alur SVG resmi
             ======================================================================= -->
        <div class="sop-visual-container" id="alur">
            <div class="section-header" style="margin-bottom: 24px;">
                <span class="section-tag">Diagram Standar Operasional Prosedur</span>
                <h2 class="section-title">Bagan Alur Penanganan Laporan</h2>
                <p class="section-desc">
                    5 tahapan baku proses sejak laporan diterima hingga pemberian rekomendasi sanksi dan pemulihan korban.
                </p>
            </div>

            <div style="background: #ffffff; border-radius: var(--radius-lg); overflow: hidden; padding: 16px;">
                <img src="{{ asset('images/alur-pelaporan.png') }}" 
                     alt="Bagan Alur SOP Proses Pelaporan Satgas PPKS UPN Veteran Yogyakarta" 
                     class="sop-img"
                     onerror="this.onerror=null; this.src='{{ asset('images/alur-pelaporan.svg') }}';">
            </div>

            <!-- Tombol Tambahan Redirect ke Google Form -->
            <div style="margin-top: 30px; text-align: center;">
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 16px;">
                    Sudah memahami alur di atas? Silakan klik tombol di bawah untuk mengisi formulir:
                </p>
                <a href="{{ $googleFormUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                    <span>Lapor via Google Form Pengaduan</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Hak Korban & Saksi -->
        <div id="hak" style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 36px; box-shadow: var(--shadow-sm); margin-bottom: 40px;">
            <div class="section-header" style="text-align: left; margin-bottom: 24px;">
                <span class="section-tag">Hak Korban &amp; Pelapor</span>
                <h3 style="font-size: 1.6rem; color: var(--primary);">Jaminan Hak Perlindungan Korban</h3>
                <p class="section-desc">Sesuai mandat Peraturan Rektor No. 5/2023, setiap pelapor/korban berhak atas:</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div style="padding: 18px; border-radius: var(--radius-md); background: var(--bg-subtle);">
                    <h5 style="color: var(--primary); margin-bottom: 6px;">Jaminan Kerahasiaan Identitas</h5>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Nama, NIM, program studi, dan data sensitif korban tidak akan pernah disebarluaskan ke pihak luar.</p>
                </div>
                <div style="padding: 18px; border-radius: var(--radius-md); background: var(--bg-subtle);">
                    <h5 style="color: var(--primary); margin-bottom: 6px;">Perlindungan Keamanan Akademik</h5>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Jaminan bebas dari ancaman nilai, pemindahan dosen pembimbing/penguji jika terlapor adalah tenaga pendidik.</p>
                </div>
                <div style="padding: 18px; border-radius: var(--radius-md); background: var(--bg-subtle);">
                    <h5 style="color: var(--primary); margin-bottom: 6px;">Pendampingan Psikologis Gratis</h5>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Fasilitasi konseling psikolog berlisensi untuk pemulihan trauma psikologis korban selama proses berjalan.</p>
                </div>
                <div style="padding: 18px; border-radius: var(--radius-md); background: var(--bg-subtle);">
                    <h5 style="color: var(--primary); margin-bottom: 6px;">Advokasi &amp; Perlindungan Hukum</h5>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Pendampingan hukum profesional apabila kasus dinaikkan ke ranah penegak hukum kepolisian/kejaksaan.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Interaktif -->
        <div id="faq" class="faq-container">
            <div class="section-header">
                <span class="section-tag">Pertanyaan Umum</span>
                <h3 style="font-size: 1.6rem; color: var(--primary);">FAQ Layanan Satgas PPKS</h3>
                <p class="section-desc">Jawaban atas hal-hal yang sering ditanyakan seputar pelaporan.</p>
            </div>

            <div class="faq-card">
                <button class="faq-header-btn">
                    <span>Apakah saya boleh melapor jika saya adalah saksi (bukan korban langsung)?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="faq-content">
                    Boleh dan sangat dianjurkan. Saksi yang mengetahui atau melihat terjadinya dugaan kekerasan seksual dapat melapor dengan menyertakan bukti awal atau keterangan yang jelas. Identitas saksi terlindungi sepenuhnya.
                </div>
            </div>

            <div class="faq-card">
                <button class="faq-header-btn">
                    <span>Bagaimana jika terlapor memiliki kuasa atau jabatan akademik lebih tinggi?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="faq-content">
                    Satgas PPKS dibentuk dengan prinsip independensi penuh di bawah Rektor. Jika terlapor adalah dosen atau pejabat kampus, Satgas akan segera mengeluarkan rekomendasi perlindungan akademik sementara (misal: penggantian pembimbing skripsi) agar tidak ada intervensi dan intimidasi nilai terhadap korban.
                </div>
            </div>

            <div class="faq-card">
                <button class="faq-header-btn">
                    <span>Apakah proses pemeriksaan mempertemukan langsung korban dan terlapor?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="faq-content">
                    Tidak. Satgas PPKS menerapkan asas larangan konfrontasi (*non-confrontation*) untuk mencegah reviktimisasi. Pemeriksaan saksi/korban dan terlapor dilakukan dalam sesi dan ruang yang terpisah.
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.faq-header-btn').forEach(button => {
        button.addEventListener('click', () => {
            const card = button.closest('.faq-card');
            card.classList.toggle('active');
        });
    });
</script>
@endsection
