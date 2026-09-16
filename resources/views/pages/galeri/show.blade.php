@extends('layouts.app')

@section('title', $galeri->judul_kegiatan . ' — Dokumentasi Kegiatan Satgas PPKS')

@php
    $slides = collect();
    if ($galeri->foto_utama) {
        $slides->push($galeri->foto_utama);
    }
    foreach ($galeri->fotos as $f) {
        if ($f->foto_path && !$slides->contains($f->foto_path)) {
            $slides->push($f->foto_path);
        }
    }
@endphp

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
                    <span>{{ $slides->count() }} Foto Dokumentasi</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">

        <!-- Slideshow Galeri Gambar -->
        @if($slides->count() > 0)
            <div class="slideshow-wrapper" style="position: relative; max-width: 960px; margin: 0 auto 36px; background: #0b1320; border-radius: var(--radius-xl); overflow: hidden; box-shadow: 0 12px 30px rgba(0,0,0,0.15);">
                <div id="gallerySlider" style="position: relative; width: 100%; aspect-ratio: 16/10; max-height: 540px; overflow: hidden; display: flex; align-items: center; justify-content: center; user-select: none;">
                    @foreach($slides as $index => $imgPath)
                        <div class="gallery-slide" 
                             data-index="{{ $index }}"
                             style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: {{ $index === 0 ? '1' : '0' }}; visibility: {{ $index === 0 ? 'visible' : 'hidden' }}; transition: opacity 0.35s ease-in-out; display: flex; align-items: center; justify-content: center; background: #0f172a;">
                            <img src="{{ asset('storage/' . $imgPath) }}" 
                                 alt="{{ $galeri->judul_kegiatan }} - Foto {{ $index + 1 }}" 
                                 style="max-width: 100%; max-height: 100%; width: auto; height: auto; object-fit: contain; pointer-events: none;"
                                 onerror="this.onerror=null; this.src='{{ asset('images/logo satgas.jpg') }}';">
                        </div>
                    @endforeach

                    <!-- Slide Counter Badge -->
                    <div style="position: absolute; top: 16px; right: 16px; background: rgba(0,0,0,0.65); backdrop-filter: blur(6px); color: #ffffff; padding: 4px 14px; border-radius: 9999px; font-size: 0.82rem; font-weight: 600; z-index: 10; letter-spacing: 0.05em;">
                        <span id="currentSlideNum">1</span> / {{ $slides->count() }}
                    </div>

                    @if($slides->count() > 1)
                        <!-- Tombol Prev -->
                        <button type="button" id="prevSlideBtn" aria-label="Foto Sebelumnya"
                                style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.9); color: var(--primary-dark); border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 14px rgba(0,0,0,0.3); z-index: 10; transition: all 0.2s;"
                                onmouseenter="this.style.background='#ffffff'; this.style.transform='translateY(-50%) scale(1.1)'"
                                onmouseleave="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-50%) scale(1)'">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>

                        <!-- Tombol Next -->
                        <button type="button" id="nextSlideBtn" aria-label="Foto Berikutnya"
                                style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; border-radius: 50%; background: rgba(255,255,255,0.9); color: var(--primary-dark); border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 14px rgba(0,0,0,0.3); z-index: 10; transition: all 0.2s;"
                                onmouseenter="this.style.background='#ffffff'; this.style.transform='translateY(-50%) scale(1.1)'"
                                onmouseleave="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='translateY(-50%) scale(1)'">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                    @endif
                </div>

                @if($slides->count() > 1)
                    <!-- Dot Indicators -->
                    <div style="background: rgba(11, 19, 32, 0.98); padding: 14px 16px; display: flex; justify-content: center; align-items: center; gap: 8px; flex-wrap: wrap;">
                        @foreach($slides as $index => $imgPath)
                            <button type="button" class="slide-dot" 
                                    data-target="{{ $index }}"
                                    aria-label="Ke slide {{ $index + 1 }}"
                                    style="width: {{ $index === 0 ? '26px' : '10px' }}; height: 10px; border-radius: 9999px; border: none; background: {{ $index === 0 ? '#4ade80' : '#475569' }}; cursor: pointer; transition: all 0.25s; padding: 0;">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <div style="text-align: center; padding: 48px; background: white; border-radius: var(--radius-lg); margin-bottom: 32px; border: 1px solid var(--border-subtle);">
                <p style="color: var(--text-muted); font-style: italic; margin: 0;">Belum ada foto dokumentasi untuk kegiatan ini.</p>
            </div>
        @endif

        <!-- Deskripsi Kegiatan di Bawah Slideshow -->
        <div style="max-width: 960px; margin: 0 auto 48px; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 36px; box-shadow: var(--shadow-sm);">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <h2 style="font-size: 1.35rem; color: var(--primary); margin: 0;">Deskripsi Kegiatan</h2>
            </div>
            <p style="color: #334155; line-height: 1.85; font-size: 1.02rem; margin: 0; white-space: pre-line;">{{ $galeri->deskripsi_singkat }}</p>
        </div>

        <!-- Rekomendasi Kegiatan Lainnya -->
        @if(isset($kegiatanLainnya) && $kegiatanLainnya->count() > 0)
            <div style="max-width: 960px; margin: 0 auto; padding-top: 36px; border-top: 1px solid var(--border-subtle);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <h3 style="font-size: 1.35rem; color: var(--primary); margin: 0;">Dokumentasi Kegiatan Lainnya</h3>
                    <a href="{{ route('galeri.index') }}" class="btn btn-outline btn-sm">Lihat Semua Galeri</a>
                </div>
                <div class="gallery-grid">
                    @foreach($kegiatanLainnya as $lain)
                        <div class="gallery-card">
                            <div class="gallery-thumb-wrapper" style="aspect-ratio: 16/9;">
                                @if($lain->foto_utama)
                                    <img src="{{ asset('storage/' . $lain->foto_utama) }}" alt="{{ $lain->judul_kegiatan }}" class="gallery-thumb-img">
                                @else
                                    <img src="{{ asset('images/logo satgas.jpg') }}" alt="{{ $lain->judul_kegiatan }}" class="gallery-thumb-img" style="object-fit: contain; background: #f8fafc;">
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
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.gallery-slide');
        const dots = document.querySelectorAll('.slide-dot');
        const prevBtn = document.getElementById('prevSlideBtn');
        const nextBtn = document.getElementById('nextSlideBtn');
        const counter = document.getElementById('currentSlideNum');
        const sliderContainer = document.getElementById('gallerySlider');

        if (slides.length <= 1) return;

        let currentIndex = 0;
        const total = slides.length;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = total - 1;
            } else if (index >= total) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            slides.forEach((slide, i) => {
                if (i === currentIndex) {
                    slide.style.opacity = '1';
                    slide.style.visibility = 'visible';
                } else {
                    slide.style.opacity = '0';
                    slide.style.visibility = 'hidden';
                }
            });

            dots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.style.background = '#4ade80';
                    dot.style.width = '26px';
                } else {
                    dot.style.background = '#475569';
                    dot.style.width = '10px';
                }
            });

            if (counter) {
                counter.textContent = currentIndex + 1;
            }
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                showSlide(currentIndex - 1);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                showSlide(currentIndex + 1);
            });
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', function() {
                const target = parseInt(this.getAttribute('data-target'));
                showSlide(target);
            });
        });

        // Keyboard navigation (ArrowLeft & ArrowRight)
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                showSlide(currentIndex - 1);
            } else if (e.key === 'ArrowRight') {
                showSlide(currentIndex + 1);
            }
        });

        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        if (sliderContainer) {
            sliderContainer.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            sliderContainer.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });

            // Pointer/mouse swipe support
            let pointerDown = false;
            sliderContainer.addEventListener('pointerdown', function(e) {
                pointerDown = true;
                touchStartX = e.clientX;
            });

            sliderContainer.addEventListener('pointerup', function(e) {
                if (!pointerDown) return;
                pointerDown = false;
                touchEndX = e.clientX;
                handleSwipe();
            });

            function handleSwipe() {
                const threshold = 40; // minimum swipe distance in px
                if (touchEndX < touchStartX - threshold) {
                    showSlide(currentIndex + 1); // swipe left -> next
                } else if (touchEndX > touchStartX + threshold) {
                    showSlide(currentIndex - 1); // swipe right -> prev
                }
            }
        }
    });
</script>
@endsection
