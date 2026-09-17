@extends('layouts.app')

@section('title', 'Masuk Pengelola Galeri')

@section('content')
<div style="padding: 80px 20px; min-height: 70vh; display: flex; align-items: center; justify-content: center;">
    <div style="width: 100%; max-width: 440px;">
        <div class="card" style="padding: 40px; box-shadow: var(--shadow-xl); border-radius: var(--radius-xl);">
            <div style="text-align: center; margin-bottom: 28px;">
                <div class="brand-icon-wrapper" style="margin: 0 auto 16px; width: 56px; height: 56px;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h2 style="font-family: var(--font-heading); font-size: 1.45rem; color: var(--primary); margin-bottom: 6px;">
                    Kelola Galeri Satgas
                </h2>
                <p style="font-size: 0.88rem; color: var(--text-muted);">
                    Masukkan kata sandi administrator untuk mengelola dokumentasi kegiatan.
                </p>
            </div>

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi Administrator</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Ketik password admin..." 
                        required 
                        autofocus>
                    @error('password')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">
                    <span>Masuk ke Panel Kelola</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </form>

            <div style="margin-top: 24px; padding-top: 18px; border-top: 1px solid var(--border-subtle); text-align: center;">
                <a href="{{ route('beranda') }}" style="font-size: 0.84rem; color: var(--secondary); font-weight: 600; display: inline-block; margin-top: 8px;">
                    &larr; Kembali ke Beranda Publik
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
