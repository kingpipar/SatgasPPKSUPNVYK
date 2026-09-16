@extends('layouts.app')

@section('title', 'Galeri Dokumentasi Kegiatan — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span style="color: #ffffff;">Galeri</span>
            </div>
            <h1 class="page-banner-title">Galeri Dokumentasi Kegiatan</h1>
            <p class="page-banner-desc">
                Dokumentasi foto aksi nyata, sosialisasi, seminar, dan pelatihan edukasi pencegahan kekerasan seksual di kampus UPN "Veteran" Yogyakarta.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        @if($galeris->count() > 0)
            <div class="gallery-grid">
                @foreach($galeris as $galeri)
                    <div class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            @if($galeri->foto_utama)
                                <img src="{{ asset('storage/' . $galeri->foto_utama) }}" alt="{{ $galeri->judul_kegiatan }}" class="gallery-thumb-img" loading="lazy">
                            @else
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #94a3b8; background: #e2e8f0;">
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
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
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
                                {{ Str::limit($galeri->deskripsi_singkat, 120) }}
                            </p>
                            <a href="{{ route('galeri.show', $galeri) }}" class="btn btn-primary btn-sm" style="align-self: flex-start;">
                                <span>Buka Album Foto</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div style="margin-top: 48px; display: flex; justify-content: center;">
                {{ $galeris->links() }}
            </div>
        @else
            <div style="text-align: center; padding: 70px 20px; background: white; border-radius: var(--radius-lg); border: 1px solid var(--border-subtle);">
                <div style="width: 64px; height: 64px; border-radius: 50%; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 8px; color: var(--text-heading);">Belum Ada Album Kegiatan</h3>
                <p style="color: var(--text-muted); max-width: 480px; margin: 0 auto 24px; font-size: 0.95rem;">
                    Album kegiatan belum ditambahkan ke database. Pengelola dapat menambahkan album foto melalui modul mini-CRUD.
                </p>
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline btn-sm">
                    Kelola Galeri (Admin)
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
