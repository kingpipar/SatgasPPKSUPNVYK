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
        <!-- Daftar Dokumen (Horizontal Card) -->
        <div style="display: flex; flex-direction: column; gap: 16px;">
            @forelse($dokumen as $doc)
                <div class="pedoman-horizontal-card" style="display: flex; align-items: center; justify-content: space-between; gap: 24px; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 22px 26px; box-shadow: var(--shadow-sm); transition: all 0.25s ease;"
                     onmouseenter="this.style.boxShadow='var(--shadow-md)'; this.style.borderColor='var(--primary-border)'; this.style.transform='translateY(-2px)'"
                     onmouseleave="this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--border-subtle)'; this.style.transform='none'">

                    <!-- Sisi Kiri: Ikon PDF + Teks -->
                    <div style="display: flex; align-items: center; gap: 20px; flex: 1; min-width: 0;">
                        <!-- Ikon PDF -->
                        <div style="flex-shrink: 0; width: 54px; height: 54px; background: var(--primary-subtle); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>

                        <!-- Konten Judul & Info -->
                        <div style="flex: 1; min-width: 0;">
                            <h3 style="font-size: 1.05rem; font-weight: 700; color: var(--text-heading); margin: 0 0 6px; line-height: 1.45;">
                                {{ $doc['judul'] }}
                            </h3>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0 0 8px; line-height: 1.55;">
                                {{ $doc['deskripsi'] }}
                            </p>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <span style="font-size: 0.78rem; font-weight: 600; color: var(--primary); background: var(--primary-subtle); padding: 3px 9px; border-radius: 9999px; display: inline-flex; align-items: center; gap: 4px;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    PDF &bull; {{ $doc['ukuran'] }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Sisi Kanan: Tombol Aksi -->
                    <div style="display: flex; align-items: center; gap: 10px; flex-shrink: 0;">
                        <a href="{{ route('pedoman.lihat', $doc['slug']) }}" class="btn btn-outline btn-sm" title="Lihat/Preview file PDF di browser">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>Lihat</span>
                        </a>
                        <a href="{{ route('pedoman.download', $doc['slug']) }}" class="btn btn-primary btn-sm" title="Unduh file PDF">
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
                    <p style="color: var(--text-muted); font-size: 1rem; margin: 0;">Belum ada dokumen pedoman yang tersedia.</p>
                </div>
            @endforelse
        </div>

        <style>
            @media (max-width: 768px) {
                .pedoman-horizontal-card {
                    flex-direction: column !important;
                    align-items: flex-start !important;
                }
                .pedoman-horizontal-card > div:last-child {
                    width: 100%;
                    justify-content: flex-end;
                    margin-top: 10px;
                }
            }
        </style>
    </div>
</section>
@endsection
