@extends('layouts.app')
@section('title', (!empty($query) ? 'Hasil Pencarian: "' . $query . '"' : 'Pencarian Website') . ' — Satgas PPKS UPN "Veteran" Yogyakarta')
@section('content')

<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span style="color: #ffffff;">Pencarian</span>
            </div>
            <h1 class="page-banner-title">Pencarian Website</h1>
            <p class="page-banner-desc">
                Pusat pencarian informasi terpadu: temukan profil satuan tugas, alur layanan pengaduan, dokumen pedoman resmi, serta dokumentasi kegiatan Satgas PPKS UPN "Veteran" Yogyakarta.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="max-width: 680px; margin: 0 auto 40px;">
            <form action="{{ route('cari') }}" method="GET" style="display: flex; gap: 10px; background: #ffffff; padding: 6px 6px 6px 16px; border: 1.5px solid var(--border-subtle); border-radius: 9999px; box-shadow: var(--shadow-sm); transition: all 0.2s;"
                  onfocusin="this.style.borderColor='var(--primary)'; this.style.boxShadow='var(--shadow-md)'"
                  onfocusout="this.style.borderColor='var(--border-subtle)'; this.style.boxShadow='var(--shadow-sm)'">
                <div style="display: flex; align-items: center; flex: 1; gap: 10px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2.2" style="flex-shrink: 0;">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" name="q" value="{{ $query }}" placeholder="Ketik kata kunci pencarian..." aria-label="Kata kunci pencarian"
                           style="width: 100%; border: none; outline: none; font-size: 0.98rem; font-family: var(--font-body); color: var(--text-heading); background: transparent;">
                </div>
                <button type="submit" class="btn btn-primary btn-sm" style="border-radius: 9999px; padding: 9px 24px;">
                    Cari
                </button>
            </form>

            @if(!empty($query))
                <div style="margin-top: 14px; text-align: center;">
                    <span style="font-size: 0.92rem; color: #64748b;">
                        Ditemukan <strong style="color: var(--primary);">{{ $totalCount }}</strong> hasil untuk kata kunci "<strong>{{ $query }}</strong>"
                    </span>
                </div>
            @endif
        </div>

        @if(!empty($query))
            @if($totalCount > 0)
                <div style="display: flex; flex-direction: column; gap: 40px; max-width: 900px; margin: 0 auto;">

                    {{-- 1. Kategori: Halaman Informasi & Profil --}}
                    @if(count($results['halaman']) > 0)
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 18px; padding-bottom: 10px; border-bottom: 2px solid var(--primary-subtle);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                                <h2 style="font-size: 1.25rem; color: var(--primary); margin: 0;">
                                    Halaman Informasi &amp; Profil ({{ count($results['halaman']) }})
                                </h2>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 14px;">
                                @foreach($results['halaman'] as $hal)
                                    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 20px 24px; box-shadow: var(--shadow-sm); transition: all 0.2s;"
                                         onmouseenter="this.style.borderColor='var(--primary-border)'; this.style.boxShadow='var(--shadow-md)'"
                                         onmouseleave="this.style.borderColor='var(--border-subtle)'; this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 16px; flex-wrap: wrap;">
                                            <div style="flex: 1; min-width: 240px;">
                                                <span style="font-size: 0.74rem; font-weight: 700; color: var(--primary); background: var(--primary-subtle); padding: 2px 8px; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.04em;">
                                                    {{ $hal['tipe'] }}
                                                </span>
                                                <h3 style="font-size: 1.05rem; font-weight: 700; margin: 8px 0 6px;">
                                                    <a href="{{ $hal['url'] }}" style="color: var(--text-heading); text-decoration: none;" onmouseenter="this.style.color='var(--primary)'" onmouseleave="this.style.color='var(--text-heading)'">
                                                        {{ $hal['judul'] }}
                                                    </a>
                                                </h3>
                                                <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0; line-height: 1.6;">
                                                    {{ Str::limit($hal['deskripsi'], 160) }}
                                                </p>
                                            </div>
                                            <a href="{{ $hal['url'] }}" class="btn btn-outline btn-sm" style="align-self: center; flex-shrink: 0;">
                                                <span>Buka Halaman</span>
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 2. Kategori: Dokumen Pedoman & Regulasi --}}
                    @if(count($results['pedoman']) > 0)
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 18px; padding-bottom: 10px; border-bottom: 2px solid var(--primary-subtle);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <h2 style="font-size: 1.25rem; color: var(--primary); margin: 0;">
                                    Dokumen Pedoman &amp; Regulasi ({{ count($results['pedoman']) }})
                                </h2>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 14px;">
                                @foreach($results['pedoman'] as $doc)
                                    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 20px 24px; box-shadow: var(--shadow-sm); display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; transition: all 0.2s;"
                                         onmouseenter="this.style.borderColor='var(--primary-border)'; this.style.boxShadow='var(--shadow-md)'"
                                         onmouseleave="this.style.borderColor='var(--border-subtle)'; this.style.boxShadow='var(--shadow-sm)'">
                                        <div style="flex: 1; min-width: 240px;">
                                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                                <span style="font-size: 0.74rem; font-weight: 700; color: #b91c1c; background: #fee2e2; padding: 2px 8px; border-radius: 9999px;">
                                                    PDF &bull; {{ $doc['ukuran'] }}
                                                </span>
                                                <span style="font-size: 0.78rem; color: #64748b;">Pedoman Resmi</span>
                                            </div>
                                            <h3 style="font-size: 1.05rem; font-weight: 700; margin: 0 0 6px; color: var(--text-heading); line-height: 1.45;">
                                                {{ $doc['judul'] }}
                                            </h3>
                                            <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0; line-height: 1.55;">
                                                {{ $doc['deskripsi'] }}
                                            </p>
                                        </div>
                                        <div style="display: flex; gap: 8px; align-items: center; flex-shrink: 0;">
                                            <a href="{{ $doc['url'] }}" target="_blank" rel="noopener" class="btn btn-outline btn-sm" title="Lihat PDF di browser">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                <span>Lihat</span>
                                            </a>
                                            <a href="{{ $doc['download_url'] }}" class="btn btn-primary btn-sm" title="Unduh file PDF">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                <span>Unduh</span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- 3. Kategori: Dokumentasi Galeri Kegiatan --}}
                    @if(count($results['galeri']) > 0)
                        <div>
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 18px; padding-bottom: 10px; border-bottom: 2px solid var(--primary-subtle);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <h2 style="font-size: 1.25rem; color: var(--primary); margin: 0;">
                                    Dokumentasi Kegiatan / Galeri ({{ count($results['galeri']) }})
                                </h2>
                            </div>

                            <div class="gallery-grid">
                                @foreach($results['galeri'] as $g)
                                    <div class="gallery-card">
                                        <div class="gallery-thumb-wrapper" style="aspect-ratio: 16/9;">
                                            @if(!empty($g['foto_utama']))
                                                <img src="{{ asset('storage/' . $g['foto_utama']) }}" alt="{{ $g['judul'] }}" class="gallery-thumb-img">
                                            @else
                                                <img src="{{ asset('images/logo satgas.jpg') }}" alt="{{ $g['judul'] }}" class="gallery-thumb-img" style="object-fit: contain; background: #f8fafc;">
                                            @endif
                                            @if(!empty($g['tanggal']))
                                                <div class="gallery-date-badge">
                                                    {{ \Carbon\Carbon::parse($g['tanggal'])->isoFormat('D MMMM Y') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="gallery-body">
                                            <h4 style="font-size: 1.05rem; margin-bottom: 6px;">
                                                <a href="{{ $g['url'] }}" style="color: var(--text-heading); text-decoration: none;">
                                                    {{ $g['judul'] }}
                                                </a>
                                            </h4>
                                            <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 12px; line-height: 1.5;">
                                                {{ Str::limit($g['deskripsi'], 90) }}
                                            </p>
                                            <a href="{{ $g['url'] }}" class="btn btn-outline btn-sm" style="align-self: flex-start;">
                                                <span>Buka Album</span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            @else
                {{-- Hasil Kosong --}}
                <div style="max-width: 600px; margin: 40px auto 0; text-align: center; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 48px 32px; box-shadow: var(--shadow-sm);">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; color: #94a3b8;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--text-heading); margin: 0 0 10px;">
                        Tidak Ada Hasil Ditemukan
                    </h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0 0 24px;">
                        Tidak ditemukan informasi yang cocok untuk kata kunci "<strong>{{ $query }}</strong>". Silakan coba kata kunci lain atau periksa opsi menu di bawah ini.
                    </p>
                    <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
                        <a href="{{ route('beranda') }}" class="btn btn-outline btn-sm">Beranda</a>
                        <a href="{{ route('profil.satgas') }}" class="btn btn-outline btn-sm">Profil Satgas</a>
                        <a href="{{ route('pelayanan') }}" class="btn btn-outline btn-sm">Pelayanan</a>
                        <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm">Pedoman</a>
                        <a href="{{ route('galeri.index') }}" class="btn btn-outline btn-sm">Galeri</a>
                    </div>
                </div>
            @endif
        @else
            {{-- Keadaan Saat Input Masih Kosong --}}
            <div style="max-width: 640px; margin: 40px auto 0; text-align: center; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 48px 32px; box-shadow: var(--shadow-sm);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--primary-subtle); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; color: var(--primary);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3 style="font-size: 1.25rem; color: var(--primary); margin: 0 0 10px;">
                    Cari Segala Hal di Website Satgas PPKS
                </h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0 0 20px;">
                    Gunakan kotak pencarian di atas untuk mencari peraturan, nomor kontak pengaduan, struktur anggota, filosofi lambang, atau galeri kegiatan edukasi kampus.
                </p>
                <div style="display: flex; gap: 8px; justify-content: center; flex-wrap: wrap;">
                    <span style="font-size: 0.85rem; color: #64748b; align-self: center;">Contoh pencarian:</span>
                    <a href="{{ route('cari', ['q' => 'peraturan']) }}" class="btn btn-outline btn-sm" style="font-size: 0.8rem; padding: 4px 12px;">Peraturan</a>
                    <a href="{{ route('cari', ['q' => 'pengaduan']) }}" class="btn btn-outline btn-sm" style="font-size: 0.8rem; padding: 4px 12px;">Pengaduan</a>
                    <a href="{{ route('cari', ['q' => 'visi']) }}" class="btn btn-outline btn-sm" style="font-size: 0.8rem; padding: 4px 12px;">Visi Misi</a>
                    <a href="{{ route('cari', ['q' => 'divisi']) }}" class="btn btn-outline btn-sm" style="font-size: 0.8rem; padding: 4px 12px;">Divisi</a>
                </div>
            </div>
        @endif

    </div>
</section>
@endsection
