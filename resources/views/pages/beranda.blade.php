@extends('layouts.app')

@section('title', 'Beranda Utama — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- =======================================================================
     HERO SECTION
     ======================================================================= -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    <span>Kampus Bebas Kekerasan Seksual &amp; Bermartabat</span>
                </div>
                <h1 class="hero-title">
                    Ruang Aman Bersama di Lingkungan Kampus Bela Negara
                </h1>
                <p class="hero-lead">
                    Satgas PPKS UPN "Veteran" Yogyakarta hadir mendampingi, melindungi, dan menegakkan keadilan dengan prinsip kerahasiaan penuh serta keberpihakan mutlak pada korban.
                </p>
                <div class="hero-cta-group">
                    <a href="{{ route('pelayanan') }}" class="btn btn-lapor btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <span>Layanan &amp; Alur Pengaduan</span>
                    </a>
                    <a href="{{ route('profil.satgas') }}" class="btn btn-outline" style="border-color: #ffffff; color: #ffffff;">
                        <span>Profil Satgas</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Hero Card -->
            <div class="hero-card">
                <h3>Kerahasiaan &amp; Perlindungan Anda Terjamin</h3>
                <p>
                    Setiap laporan yang masuk ditangani oleh tim tersertifikasi dengan perlindungan identitas pelapor dan korban tanpa risiko intimidasi atau sanksi akademik.
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Kerahasiaan Identitas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Layanan Aduan Daring</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3 Pilar</span>
                        <span class="stat-label">Cegah, Tangani, Dampingi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">0</span>
                        <span class="stat-label">Toleransi Kekerasan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =======================================================================
     RINGKASAN TENTANG SATGAS & 3 PILAR KERJA
     ======================================================================= -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Komitmen Utama</span>
            <h2 class="section-title">Tiga Pilar Perlindungan Kampus</h2>
            <p class="section-desc">
                Sesuai Permendikbudristek No. 30 Tahun 2021 dan Peraturan Rektor No. 5 Tahun 2023, Satgas PPKS UPN "Veteran" Yogyakarta menjalankan mandat terpadu:
            </p>
        </div>

        <div class="card-grid">
            <!-- Pilar 1: Pencegahan -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h4>Pencegahan &amp; Edukasi</h4>
                <p>
                    Sosialisasi buku saku, workshop kepekaan gender, edukasi batasan relasi kuasa dalam bimbingan tugas akhir dan kegiatan organisasi mahasiswa.
                </p>
            </div>

            <!-- Pilar 2: Penanganan -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <h4>Penanganan Laporan</h4>
                <p>
                    Penerimaan aduan secara aman melalui formulir daring, pemeriksaan faktual yang independen, dan perumusan rekomendasi sanksi tegas bagi pelaku.
                </p>
            </div>

            <!-- Pilar 3: Pendampingan -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
                <h4>Pendampingan &amp; Pemulihan</h4>
                <p>
                    Layanan konseling psikologis gratis, advokasi bantuan hukum, dan jaminan keamanan akademik agar korban dapat menyelesaikan studi tanpa intimidasi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =======================================================================
     HIGHLIGHT GALERI DOKUMENTASI KEGIATAN TERBARU (3 ALBUM TERAKHIR)
     ======================================================================= -->
<section class="section section-subtle">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 16px;">
            <div>
                <span class="section-tag">Dokumentasi &amp; Aksi</span>
                <h2 class="section-title" style="margin-bottom: 6px;">Kegiatan Terkini Satgas PPKS</h2>
                <p class="section-desc" style="margin-bottom: 0;">
                    Dokumentasi nyata kegiatan sosialisasi, seminar, dan penguatan lingkungan kampus.
                </p>
            </div>
            <a href="{{ route('galeri.index') }}" class="btn btn-outline">
                <span>Lihat Semua Galeri</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

        @if($kegiatanTerbaru->count() > 0)
            <div class="gallery-grid">
                @foreach($kegiatanTerbaru as $galeri)
                    <div class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            @if($galeri->foto_utama)
                                <img src="{{ asset('storage/' . $galeri->foto_utama) }}" alt="{{ $galeri->judul_kegiatan }}" class="gallery-thumb-img">
                            @else
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #94a3b8;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                            @endif

                            @if($galeri->tanggal_kegiatan)
                                <div class="gallery-date-badge">
                                    {{ \Carbon\Carbon::parse($galeri->tanggal_kegiatan)->isoFormat('D MMMM Y') }}
                                </div>
                            @endif

                            <div class="gallery-count-badge">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <span>{{ $galeri->fotos_count }} Foto</span>
                            </div>
                        </div>

                        <div class="gallery-body">
                            <h3 class="gallery-title">
                                <a href="{{ route('galeri.show', $galeri) }}" class="hover-text-primary">
                                    {{ $galeri->judul_kegiatan }}
                                </a>
                            </h3>
                            <p class="gallery-desc">
                                {{ Str::limit($galeri->deskripsi_singkat, 110) }}
                            </p>
                            <a href="{{ route('galeri.show', $galeri) }}" class="btn btn-primary btn-sm" style="align-self: flex-start;">
                                <span>Lihat Dokumentasi</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Fallback jika data kegiatan belum diinput via admin -->
            <div style="background: #ffffff; border: 1px dashed var(--border-subtle); border-radius: var(--radius-lg); padding: 48px; text-align: center;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5" style="margin: 0 auto 16px;">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
                <h4 style="margin-bottom: 8px; color: var(--text-heading);">Belum Ada Dokumentasi Kegiatan</h4>
                <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto 20px;">
                    Dokumentasi kegiatan dapat ditambahkan kapan saja melalui panel mini-CRUD di URL rahasia pengelola.
                </p>
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline btn-sm">Buka Halaman Kelola Galeri</a>
            </div>
        @endif
    </div>
</section>

<!-- =======================================================================
     HIGHLIGHT PEDOMAN REGULASI
     ======================================================================= -->
<section class="section">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 36px; flex-wrap: wrap; gap: 16px;">
            <div>
                <span class="section-tag">Regulasi &amp; Dokumen</span>
                <h2 class="section-title" style="margin-bottom: 6px;">Pedoman &amp; SOP Resmi</h2>
                <p class="section-desc" style="margin-bottom: 0;">
                    Unduh dan pelajari payung hukum serta panduan teknis operasional penanganan kekerasan di kampus.
                </p>
            </div>
            <a href="{{ route('pedoman.index') }}" class="btn btn-outline">
                <span>Lihat Seluruh Pedoman</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

        <div class="doc-grid">
            @foreach($pedomanTerbaru as $doc)
                <div class="doc-card">
                    <div>
                        <div class="doc-header">
                            <div class="doc-icon-badge">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <div>
                                <div class="doc-meta">
                                    <span class="badge-tag">{{ $doc['kategori'] }}</span>
                                    <span style="font-size: 0.8rem; color: #64748b;">{{ $doc['ukuran'] }}</span>
                                </div>
                                <h3 class="doc-title">{{ $doc['judul'] }}</h3>
                            </div>
                        </div>
                        <p class="doc-desc">{{ $doc['deskripsi'] }}</p>
                    </div>

                    <div class="doc-actions">
                        <a href="{{ route('pedoman.lihat', $doc['slug']) }}" class="btn btn-outline btn-sm">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>Lihat</span>
                        </a>
                        <a href="{{ route('pedoman.download', $doc['slug']) }}" class="btn btn-primary btn-sm">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span>Download</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =======================================================================
     CTA PROMINENT BANNER KE HALAMAN PELAYANAN / PENGADUAN
     ======================================================================= -->
<section style="background: linear-gradient(135deg, #1b382d 0%, #2a5343 60%, #3c745e 100%); padding: 70px 0; color: #ffffff;">
    <div class="container" style="text-align: center;">
        <h2 style="color: #ffffff; font-size: 2.3rem; margin-bottom: 16px;">
            Butuh Bantuan atau Mengalami Kekerasan Seksual?
        </h2>
        <p style="color: #c7e3d6; font-size: 1.15rem; max-width: 680px; margin: 0 auto 32px; line-height: 1.7;">
            Jangan ragu untuk berbicara. Satgas PPKS UPN "Veteran" Yogyakarta hadir siap mendengar, melindungi hak Anda, dan memberikan pendampingan psikologis serta hukum secara gratis.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="{{ route('pelayanan') }}" class="btn btn-lapor btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                    <line x1="12" y1="9" x2="12" y2="13"></line>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>
                <span>Pelajari Alur &amp; Lapor Sekarang</span>
            </a>
            <a href="{{ config('satgas.google_form_url', env('GOOGLE_FORM_URL', 'https://forms.gle/samplePPKSreportURL')) }}" target="_blank" rel="noopener" class="btn btn-outline" style="border-color: #ffd166; color: #ffd166;">
                <span>Isi Google Form Pengaduan</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    <polyline points="15 3 21 3 21 9"></polyline>
                    <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
