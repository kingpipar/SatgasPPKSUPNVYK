@extends('layouts.app')

@section('title', 'Beranda — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')

{{-- ============================================================
     HERO — Logo Satgas + Judul Singkat (Gaya Minimalis)
     ============================================================ --}}
<section style="background: #ffffff; padding: 56px 0 48px; border-bottom: 1px solid var(--border-subtle);">
    <div class="container" style="text-align: center;">

        <img src="{{ asset('images/logo satgas.jpg') }}"
             alt="Logo Satgas PPKS UPN Veteran Yogyakarta"
             style="width: 160px; height: auto; display: block; margin: 0 auto 24px;"
             onerror="this.onerror=null; this.src='{{ asset('images/logo-satgas.png') }}';">

        <h1 style="font-size: 1.8rem; font-weight: 800; color: var(--primary); margin: 0 0 10px; letter-spacing: -0.01em; line-height: 1.25;">
            Satgas PPKS UPN "Veteran" Yogyakarta
        </h1>
        <p style="font-size: 1rem; color: #64748b; max-width: 560px; margin: 0 auto 28px; line-height: 1.65;">
            Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual — menjamin kampus yang aman, inklusif, dan bermartabat bagi seluruh sivitas akademika.
        </p>
        <div style="display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
            <a href="{{ route('pelayanan') }}" class="btn btn-primary btn-sm">Layanan &amp; Alur Pengaduan</a>
            <a href="{{ route('profil.satgas') }}" class="btn btn-outline btn-sm">Profil Satgas</a>
        </div>
    </div>
</section>

{{-- ============================================================
     KEGIATAN TERKINI (Galeri)
     ============================================================ --}}
<section class="section section-subtle">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 28px; flex-wrap: wrap; gap: 12px;">
            <div>
                <span class="section-tag">Dokumentasi</span>
                <h2 class="section-title" style="margin-bottom: 0;">Kegiatan Terkini</h2>
            </div>
            <a href="{{ route('galeri.index') }}" class="btn btn-outline btn-sm">
                <span>Lihat Semua</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #cbd5e1;">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                </div>
                            @endif
                            @if($galeri->tanggal_kegiatan)
                                <div class="gallery-date-badge">{{ \Carbon\Carbon::parse($galeri->tanggal_kegiatan)->isoFormat('D MMMM Y') }}</div>
                            @endif
                        </div>
                        <div class="gallery-body">
                            <h3 class="gallery-title">
                                <a href="{{ route('galeri.show', $galeri) }}" class="hover-text-primary">{{ $galeri->judul_kegiatan }}</a>
                            </h3>
                            <p class="gallery-desc">{{ Str::limit($galeri->deskripsi_singkat, 100) }}</p>
                            <a href="{{ route('galeri.show', $galeri) }}" class="btn btn-primary btn-sm" style="align-self: flex-start; margin-top: auto;">Lihat Dokumentasi</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div style="background: #ffffff; border: 1px dashed var(--border-subtle); border-radius: var(--radius-lg); padding: 40px; text-align: center; color: var(--text-muted);">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#cbd5e1" stroke-width="1.5" style="margin: 0 auto 12px; display: block;"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                <p style="margin: 0; font-size: 0.95rem;">Belum ada kegiatan yang dipublikasikan.</p>
            </div>
        @endif
    </div>
</section>

{{-- ============================================================
     PELAPORAN — CTA Banner
     ============================================================ --}}
<section style="background: var(--primary); padding: 56px 0; color: #ffffff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr auto; gap: 32px; align-items: center; flex-wrap: wrap;">
            <div>
                <h2 style="color: #ffffff; font-size: 1.65rem; margin: 0 0 10px; line-height: 1.3;">
                    Butuh Bantuan atau Mengalami Kekerasan Seksual?
                </h2>
                <p style="color: #c7e3d6; font-size: 0.97rem; margin: 0; line-height: 1.7; max-width: 600px;">
                    Jangan ragu untuk berbicara. Satgas PPKS hadir siap mendengar, melindungi hak Anda, dan memberikan pendampingan psikologis serta hukum secara rahasia dan gratis.
                </p>
            </div>
            <div style="display: flex; flex-direction: column; gap: 10px; flex-shrink: 0;">
                <a href="{{ route('pelayanan') }}" class="btn btn-lapor btn-sm">
                    <span>Pelajari Alur Pengaduan</span>
                </a>
                <a href="{{ config('satgas.google_form_url', env('GOOGLE_FORM_URL', '#')) }}" target="_blank" rel="noopener"
                   style="display: inline-flex; align-items: center; gap: 6px; justify-content: center; font-size: 0.88rem; color: #ffffffff; border: 1px solid #ffffffff; border-radius: var(--radius-md); padding: 8px 14px; text-decoration: none; transition: all 0.2s;"
                   onmouseenter="this.style.color='#fff'; this.style.borderColor='#fff'"
                   onmouseleave="this.style.color='#c7e3d6'; this.style.borderColor='rgba(255,255,255,0.3)'">
                    <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffffff" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg> -->
                    Isi Google Form Pengaduan
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     PEDOMAN — Highlight 3 Dokumen Pertama
     ============================================================ --}}
<section class="section">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 28px; flex-wrap: wrap; gap: 12px;">
            <div>
                <span class="section-tag">Regulasi &amp; Dokumen</span>
                <h2 class="section-title" style="margin-bottom: 0;">Pedoman &amp; SOP Resmi</h2>
            </div>
            <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm">
                <span>Lihat Seluruh Pedoman</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>

        <div class="doc-grid">
            @foreach($pedomanTerbaru as $doc)
                <div class="doc-card">
                    <div>
                        <div class="doc-header">
                            <div class="doc-icon-badge">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                            </div>
                            <div>
                                <div class="doc-meta">
                                    <span style="font-size: 0.78rem; color: #64748b;">PDF &bull; {{ $doc['ukuran'] }}</span>
                                </div>
                                <h3 class="doc-title">{{ $doc['judul'] }}</h3>
                            </div>
                        </div>
                        <p class="doc-desc">{{ $doc['deskripsi'] }}</p>
                    </div>
                    <div class="doc-actions">
                        <a href="{{ route('pedoman.lihat', $doc['slug']) }}" target="_blank" rel="noopener" class="btn btn-outline btn-sm">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            <span>Lihat</span>
                        </a>
                        <a href="{{ route('pedoman.download', $doc['slug']) }}" class="btn btn-primary btn-sm">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Unduh</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
