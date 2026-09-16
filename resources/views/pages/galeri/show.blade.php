@extends('layouts.app')

@section('title', $galeri->judul_kegiatan . ' — Dokumentasi Kegiatan Satgas PPKS')

@section('content')
<!-- Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <a href="{{ route('galeri.index') }}">Galeri</a>
                <span>/</span>
                <span style="color: #ffffff;">Detail Kegiatan</span>
            </div>
            <h1 class="page-banner-title">{{ $galeri->judul_kegiatan }}</h1>
            <div style="display: flex; align-items: center; gap: 16px; margin-top: 12px; color: #c7e3d6; font-size: 0.92rem; flex-wrap: wrap;">
                @if($galeri->tanggal_kegiatan)
                    <div style="display: flex; align-items: center; gap: 6px;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>{{ \Carbon\Carbon::parse($galeri->tanggal_kegiatan)->isoFormat('dddd, D MMMM Y') }}</span>
                    </div>
                @endif
                <div style="display: flex; align-items: center; gap: 6px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    <span>{{ $galeri->fotos->count() }} Foto Dokumentasi</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <!-- Deskripsi Kegiatan Card -->
        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 36px; box-shadow: var(--shadow-sm); margin-bottom: 40px;">
            <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 12px;">Deskripsi Kegiatan</h2>
            <p style="color: #334155; line-height: 1.8; font-size: 1.05rem; margin-bottom: 0;">
                {{ $galeri->deskripsi_singkat }}
            </p>
        </div>

        <!-- Grid Foto Dokumentasi -->
        <div class="section-header" style="text-align: left; margin-bottom: 20px;">
            <h3 style="font-size: 1.5rem; color: var(--primary);">Semua Foto Dokumentasi ({{ $galeri->fotos->count() }})</h3>
            <p style="color: var(--text-muted); font-size: 0.92rem;">Klik pada salah satu foto untuk memperbesar tampilan (lightbox).</p>
        </div>

        @if($galeri->fotos->count() > 0)
            <div class="album-photos-grid">
                @foreach($galeri->fotos as $foto)
                    <div class="album-photo-item" onclick="openLightbox('{{ asset('storage/' . $foto->foto_path) }}')">
                        <img src="{{ asset('storage/' . $foto->foto_path) }}" alt="Dokumentasi {{ $galeri->judul_kegiatan }}" class="album-photo-img" loading="lazy">
                    </div>
                @endforeach
            </div>
        @else
            <!-- Jika belum ada multiple foto, tampilkan foto utama -->
            @if($galeri->foto_utama)
                <div style="max-width: 700px; margin: 0 auto; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md);">
                    <img src="{{ asset('storage/' . $galeri->foto_utama) }}" alt="{{ $galeri->judul_kegiatan }}" style="width: 100%; height: auto;">
                </div>
            @else
                <p style="color: var(--text-muted); font-style: italic;">Belum ada foto dokumentasi untuk kegiatan ini.</p>
            @endif
        @endif

        <!-- Rekomendasi Kegiatan Lainnya -->
        @if(isset($kegiatanLainnya) && $kegiatanLainnya->count() > 0)
            <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid var(--border-subtle);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <h3 style="font-size: 1.35rem; color: var(--primary); margin: 0;">Dokumentasi Kegiatan Lainnya</h3>
                    <a href="{{ route('galeri.index') }}" class="btn btn-outline btn-sm">Lihat Semua</a>
                </div>
                <div class="gallery-grid">
                    @foreach($kegiatanLainnya as $lain)
                        <div class="gallery-card">
                            <div class="gallery-thumb-wrapper" style="aspect-ratio: 16/9;">
                                @if($lain->foto_utama)
                                    <img src="{{ asset('storage/' . $lain->foto_utama) }}" alt="{{ $lain->judul_kegiatan }}" class="gallery-thumb-img">
                                @endif
                            </div>
                            <div class="gallery-body">
                                <h4 style="font-size: 1.05rem; margin-bottom: 6px;">
                                    <a href="{{ route('galeri.show', $lain) }}">{{ $lain->judul_kegiatan }}</a>
                                </h4>
                                <a href="{{ route('galeri.show', $lain) }}" class="btn btn-outline btn-sm" style="margin-top: 10px; align-self: flex-start;">Lihat Album</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Lightbox Modal Pop-up -->
<div class="lightbox-modal" id="lightboxModal" onclick="closeLightbox(event)">
    <button class="lightbox-close" onclick="closeLightbox(event)" aria-label="Tutup">&times;</button>
    <img src="" alt="Pratinjau Foto" class="lightbox-img" id="lightboxImg" onclick="event.stopPropagation()">
</div>
@endsection

@section('scripts')
<script>
    function openLightbox(src) {
        const modal = document.getElementById('lightboxModal');
        const img = document.getElementById('lightboxImg');
        img.src = src;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox(event) {
        const modal = document.getElementById('lightboxModal');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Keyboard ESC to close lightbox
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        }
    });
</script>
@endsection
