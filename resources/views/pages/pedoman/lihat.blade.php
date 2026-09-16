@extends('layouts.app')

@section('title', 'Lihat Dokumen: ' . $dokumen['judul'])

@section('content')
<!-- Preview Header Bar -->
<div style="background: var(--primary-deep); color: white; padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
        <div>
            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                <span class="badge-tag" style="background: rgba(255,255,255,0.18); color: #ffffff;">{{ $dokumen['kategori'] }}</span>
                <span style="font-size: 0.8rem; color: #c7e3d6;">No: {{ $dokumen['nomor_dokumen'] }}</span>
            </div>
            <h1 style="font-size: 1.35rem; color: #ffffff; line-height: 1.3;">
                {{ $dokumen['judul'] }}
            </h1>
        </div>

        <div style="display: flex; gap: 12px; align-items: center;">
            <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm" style="border-color: rgba(255,255,255,0.4); color: #ffffff;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span>Kembali ke Daftar</span>
            </a>
            <a href="{{ route('pedoman.download', $dokumen['slug']) }}" class="btn btn-primary btn-sm">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                <span>Download PDF ({{ $dokumen['ukuran'] ?? 'Unduh' }})</span>
            </a>
        </div>
    </div>
</div>

<!-- PDF Embed Frame -->
<div class="container" style="padding-top: 30px; padding-bottom: 50px;">
    <div style="background: white; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 1px solid var(--border-subtle); height: 82vh;">
        <iframe 
            src="{{ route('pedoman.stream', $dokumen['slug']) }}" 
            type="application/pdf" 
            width="100%" 
            height="100%" 
            style="border: none;"
            title="{{ $dokumen['judul'] }}">
            <p style="padding: 30px; text-align: center; color: var(--text-muted);">
                Browser Anda tidak mendukung preview PDF langsung di dalam frame. 
                <a href="{{ route('pedoman.download', $dokumen['slug']) }}" class="btn btn-primary btn-sm" style="margin-top: 12px; display: inline-block;">
                    Klik di sini untuk mengunduh dokumen secara langsung
                </a>
            </p>
        </iframe>
    </div>
</div>
@endsection
