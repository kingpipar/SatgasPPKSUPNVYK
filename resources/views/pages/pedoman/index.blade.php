@extends('layouts.app')

@section('title', 'Dokumen Pedoman & SOP — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span style="color: #ffffff;">Pedoman &amp; Regulasi</span>
            </div>
            <h1 class="page-banner-title">Dokumen Pedoman &amp; Regulasi</h1>
            <p class="page-banner-desc">
                Daftar lengkap dokumen resmi Surat Rektor, Standar Operasional Prosedur (SOP), Pedoman Pencegahan, dan Kode Etik Interaksi Bebas Kekerasan Seksual.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        
        <!-- Filter Kategori Tabs -->
        <div class="category-tabs">
            <a href="{{ route('pedoman.index') }}" class="tab-btn {{ empty($filterKategori) ? 'active' : '' }}">
                Semua Dokumen
            </a>
            @foreach($kategoriList as $kategori)
                <a href="{{ route('pedoman.index', ['kategori' => $kategori]) }}" class="tab-btn {{ $filterKategori === $kategori ? 'active' : '' }}">
                    {{ $kategori }}
                </a>
            @endforeach
        </div>

        <!-- Daftar Dokumen Dikelompokkan per Kategori -->
        @forelse($dokumenPerKategori as $namaKategori => $items)
            <div class="doc-group">
                <div class="doc-group-title">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <h2 style="font-size: 1.45rem; color: var(--primary); margin: 0;">
                        {{ $namaKategori }}
                    </h2>
                    <span style="background: var(--primary-subtle); color: var(--primary); padding: 3px 12px; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700;">
                        {{ count($items) }} Dokumen
                    </span>
                </div>

                <div class="doc-grid">
                    @foreach($items as $doc)
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
                                    <div style="flex: 1;">
                                        <div class="doc-meta">
                                            <span class="badge-tag">{{ $doc['kategori'] }}</span>
                                            <span style="font-size: 0.78rem; color: #64748b;">{{ $doc['ukuran'] ?? 'PDF' }}</span>
                                        </div>
                                        <h3 class="doc-title">{{ $doc['judul'] }}</h3>
                                    </div>
                                </div>
                                <p class="doc-desc">{{ $doc['deskripsi'] }}</p>
                                <div style="font-size: 0.8rem; color: #64748b; margin-bottom: 16px;">
                                    <strong>No Dokumen:</strong> {{ $doc['nomor_dokumen'] }} &bull; <strong>Terbit:</strong> {{ $doc['tanggal_terbit'] }}
                                </div>
                            </div>

                            <div class="doc-actions">
                                <a href="{{ route('pedoman.lihat', $doc['slug']) }}" class="btn btn-outline btn-sm" title="Lihat/Preview file PDF di browser">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span>Lihat</span>
                                </a>
                                <a href="{{ route('pedoman.download', $doc['slug']) }}" class="btn btn-primary btn-sm" title="Download file PDF resmi secara aman">
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
        @empty
            <div style="text-align: center; padding: 60px 20px; background: white; border-radius: var(--radius-lg); border: 1px solid var(--border-subtle);">
                <p style="color: var(--text-muted); font-size: 1.05rem;">
                    Tidak ditemukan dokumen untuk kategori yang dipilih.
                </p>
                <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm" style="margin-top: 16px;">
                    Tampilkan Semua Dokumen
                </a>
            </div>
        @endforelse

        <!-- Petunjuk Pengisian Dokumen untuk Administrator/Host -->
        <div style="background: #f8fafc; margin-top: 20px; border-left: 4px solid var(--primary); padding: 24px; border-radius: 0 var(--radius-md) var(--radius-md) 0; box-shadow: var(--shadow-sm);">
            <h4 style="color: var(--primary); margin-bottom: 6px; font-size: 1.05rem;">
                Informasi Pengelolaan Dokumen
            </h4>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">
                Seluruh dokumen pedoman dan regulasi ini dikonfigurasikan langsung melalui file konfigurasi PHP <code>config/pedoman.php</code> dan disimpan secara aman di <code>storage/app/public/pedoman/</code>. Tombol unduh menggunakan <code>Storage::download</code> untuk menjamin path direktori server tidak terekspos langsung ke publik.
            </p>
        </div>
    </div>
</section>
@endsection
