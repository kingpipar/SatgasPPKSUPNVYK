@extends('layouts.app')

@section('title', 'Dokumen Pedoman & Regulasi — Satgas PPKS UPN "Veteran" Yogyakarta')

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
                Daftar lengkap dokumen resmi Satgas PPKS UPN "Veteran" Yogyakarta — Peraturan Rektor, Standar Operasional Prosedur (SOP), dan regulasi nasional terkait pencegahan kekerasan seksual.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">

        <!-- Search Bar Pedoman -->
        <div style="margin-bottom: 32px;">
            <form action="{{ route('pedoman.index') }}" method="GET" style="display: flex; gap: 12px; max-width: 560px;">
                <div style="flex: 1; position: relative;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" name="q" id="searchPedoman"
                           value="{{ $query ?? '' }}"
                           placeholder="Cari judul dokumen..."
                           style="width: 100%; padding: 11px 14px 11px 44px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 0.95rem; font-family: var(--font-body); outline: none; transition: border-color 0.2s; box-sizing: border-box;"
                           onfocus="this.style.borderColor='var(--primary)'" onblur="this.style.borderColor='var(--border-subtle)'">
                </div>
                <button type="submit" class="btn btn-primary btn-sm" style="white-space: nowrap;">Cari</button>
                @if(!empty($query))
                    <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm" style="white-space: nowrap;">Reset</a>
                @endif
            </form>
            @if(!empty($query))
                <p style="margin-top: 10px; font-size: 0.88rem; color: var(--text-muted);">
                    Menampilkan {{ count($dokumen) }} hasil untuk "<strong>{{ $query }}</strong>"
                </p>
            @endif
        </div>

        <!-- Daftar Dokumen (Flat List) -->
        @forelse($dokumen as $doc)
            <div style="display: flex; align-items: flex-start; gap: 20px; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 24px; margin-bottom: 16px; box-shadow: var(--shadow-sm); transition: box-shadow 0.2s, border-color 0.2s;"
                 onmouseenter="this.style.boxShadow='var(--shadow-md)'; this.style.borderColor='var(--primary-border)'"
                 onmouseleave="this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--border-subtle)'">

                <!-- Ikon PDF -->
                <div style="flex-shrink: 0; width: 52px; height: 52px; background: var(--primary-subtle); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>

                <!-- Konten -->
                <div style="flex: 1; min-width: 0;">
                    <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-heading); margin: 0 0 6px; line-height: 1.5;">
                        {{ $doc['judul'] }}
                    </h3>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0 0 14px; line-height: 1.6;">
                        {{ $doc['deskripsi'] }}
                    </p>
                    <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                        <span style="font-size: 0.78rem; color: #64748b; display: flex; align-items: center; gap: 4px;">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            PDF &bull; {{ $doc['ukuran'] }}
                        </span>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div style="display: flex; flex-direction: column; gap: 8px; flex-shrink: 0;">
                    <a href="{{ route('pedoman.lihat', $doc['slug']) }}" class="btn btn-outline btn-sm" title="Lihat/Preview file PDF di browser">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <span>Lihat</span>
                    </a>
                    <a href="{{ route('pedoman.download', $doc['slug']) }}" class="btn btn-primary btn-sm" title="Download file PDF">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span>Unduh</span>
                    </a>
                </div>
            </div>
        @empty
            <div style="text-align: center; padding: 60px 20px; background: white; border-radius: var(--radius-lg); border: 1px solid var(--border-subtle);">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#cbd5e1" stroke-width="1.5" style="margin: 0 auto 16px; display: block;">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 16px;">
                    Tidak ditemukan dokumen untuk kata kunci "<strong>{{ $query }}</strong>".
                </p>
                <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm">Tampilkan Semua Dokumen</a>
            </div>
        @endforelse

    </div>
</section>
@endsection
