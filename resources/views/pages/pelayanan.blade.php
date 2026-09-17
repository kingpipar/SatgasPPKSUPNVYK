@extends('layouts.app')
@section('title', 'Pelayanan & Alur Pelaporan — Satgas PPKS UPN "Veteran" Yogyakarta')
@section('content')

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
