@extends('layouts.app')
@section('title', 'Beranda — Satgas PPKS UPN "Veteran" Yogyakarta')
@section('content')

{{-- ============================================================
     HERO — Logo Satgas + Judul Singkat
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
     STATISTIK PENANGANAN KASUS
     ============================================================ --}}
<section id="statistik" class="section" style="background: #ffffff;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 28px; flex-wrap: wrap; gap: 12px;">
            <div>
                <span class="section-tag">Transparansi &amp; Akuntabilitas</span>
                <h2 class="section-title" style="margin-bottom: 6px;">Statistik Penanganan Kasus</h2>
                <p style="color: #64748b; font-size: 0.95rem; margin: 0;">
                    Data pelaporan dan penanganan kekerasan di lingkungan kampus — Periode <strong>{{ $statistik->tahun_periode ?? 'Tahun 2026' }}</strong>
                </p>
            </div>
            @auth
            <a href="{{ route('statistik.edit') }}" class="btn btn-outline btn-sm">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                <span>Kelola Statistik</span>
            </a>
            @endauth
        </div>

        {{-- Metrics Summary Cards --}}
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 32px;">
            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 20px; display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: #3c745e; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 700;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                </div>
                <div>
                    <div style="font-size: 0.82rem; font-weight: 600; color: #166534; text-transform: uppercase; letter-spacing: 0.5px;">Total Laporan Masuk</div>
                    <div style="font-size: 1.8rem; font-weight: 800; color: #14532d; line-height: 1.2;">{{ $statistik->total_masuk }}</div>
                </div>
            </div>

            <div style="background: #fefce8; border: 1px solid #fef08a; border-radius: 12px; padding: 20px; display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: #eab308; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 700;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <div style="font-size: 0.82rem; font-weight: 600; color: #854d0e; text-transform: uppercase; letter-spacing: 0.5px;">Telah Selesai</div>
                    <div style="font-size: 1.8rem; font-weight: 800; color: #713f12; line-height: 1.2;">{{ $statistik->telah_selesai }}</div>
                </div>
            </div>

            <div style="background: #fff7ed; border: 1px solid #fed7aa; border-radius: 12px; padding: 20px; display: flex; align-items: center; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: #f97316; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 700;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <div>
                    <div style="font-size: 0.82rem; font-weight: 600; color: #9a3412; text-transform: uppercase; letter-spacing: 0.5px;">Sedang Ditangani</div>
                    <div style="font-size: 1.8rem; font-weight: 800; color: #7c2d12; line-height: 1.2;">{{ $statistik->on_going }}</div>
                </div>
            </div>
        </div>

        {{-- 2 Columns Chart Grid --}}
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 28px;">
            {{-- Status Penanganan (Bar Chart) --}}
            <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: 16px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: #1e293b; margin: 0;">Status Penanganan Kasus</h3>
                    <span style="font-size: 0.78rem; background: #f1f5f9; color: #475569; padding: 4px 10px; border-radius: 6px; font-weight: 600;">Metrik Status</span>
                </div>
                <div style="position: relative; height: 260px; width: 100%;">
                    <canvas id="statusBarChart"></canvas>
                </div>
            </div>

            {{-- Jenis Kekerasan (Doughnut Chart) --}}
            <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: 16px; padding: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: #1e293b; margin: 0;">Klasifikasi Jenis Kasus</h3>
                    <span style="font-size: 0.78rem; background: #f1f5f9; color: #475569; padding: 4px 10px; border-radius: 6px; font-weight: 600;">Kategori Laporan</span>
                </div>
                <div style="position: relative; height: 260px; width: 100%;">
                    <canvas id="jenisDoughnutChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Breakdown Table / List for Accessibility & Clarity --}}
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; margin-bottom: 24px;">
            <div style="font-size: 0.88rem; font-weight: 700; color: #334155; margin-bottom: 12px;">Rincian Jenis Kasus Terlaporkan:</div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; font-size: 0.88rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #ef4444; display: inline-block;"></span> Kekerasan Fisik</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->kekerasan_fisik }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #8b5cf6; display: inline-block;"></span> Kekerasan Psikis</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->kekerasan_psikis }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #06b6d4; display: inline-block;"></span> Perundungan</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->perundungan }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #f01dbbff; display: inline-block;"></span> Kekerasan Seksual</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->kekerasan_seksual }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #f59e0b; display: inline-block;"></span> Diskriminasi &amp; Intoleransi</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->diskriminasi_intoleransi }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; padding: 8px 12px; border-radius: 8px; border: 1px solid #e2e8f0;">
                    <span style="color: #64748b; display: flex; align-items: center; gap: 6px;"><span style="width: 10px; height: 10px; border-radius: 50%; background: #64748b; display: inline-block;"></span> Kebijakan Kekerasan</span>
                    <span style="font-weight: 700; color: #1e293b;">{{ $statistik->kebijakan_kekerasan }}</span>
                </div>
            </div>
        </div>

        {{-- Catatan Kriteria Kasus Selesai --}}
        <div style="background: #f8fafc; border-left: 4px solid #3c745e; border-radius: 0 10px 10px 0; padding: 18px 22px;">
            <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: #1e293b; margin-bottom: 8px; font-size: 0.95rem;">
                <span>Catatan Kriteria Penyelesaian Kasus:</span>
            </div>
            <div style="color: #475569; font-size: 0.88rem; line-height: 1.65; white-space: pre-line;">{{ $statistik->catatan_kriteria }}</div>
        </div>
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

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Bar Chart: Status Penanganan
    const barCanvas = document.getElementById('statusBarChart');
    if (barCanvas) {
        new Chart(barCanvas, {
            type: 'bar',
            data: {
                labels: ['Total Masuk', 'Telah Selesai', 'Sedang Ditangani'],
                datasets: [{
                    label: 'Jumlah Laporan',
                    data: [
                        {{ (int) $statistik->total_masuk }},
                        {{ (int) $statistik->telah_selesai }},
                        {{ (int) $statistik->on_going }}
                    ],
                    backgroundColor: [
                        '#3c745e', // Hijau Satgas
                        '#eab308', // Kuning Selesai
                        '#f97316'  // Oren On Going
                    ],
                    borderRadius: 8,
                    maxBarThickness: 48
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.parsed.y + ' Kasus';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5,
                            precision: 0
                        },
                        grid: {
                            color: '#f1f5f9'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    // 2. Doughnut Chart: Klasifikasi 6 Jenis Kekerasan
    const doughnutCanvas = document.getElementById('jenisDoughnutChart');
    if (doughnutCanvas) {
        new Chart(doughnutCanvas, {
            type: 'doughnut',
            data: {
                labels: [
                    'Kekerasan Fisik',
                    'Kekerasan Psikis',
                    'Perundungan',
                    'Kekerasan Seksual',
                    'Diskriminasi & Intoleransi',
                    'Kebijakan Kekerasan'
                ],
                datasets: [{
                    data: [
                        {{ (int) $statistik->kekerasan_fisik }},
                        {{ (int) $statistik->kekerasan_psikis }},
                        {{ (int) $statistik->perundungan }},
                        {{ (int) $statistik->kekerasan_seksual }},
                        {{ (int) $statistik->diskriminasi_intoleransi }},
                        {{ (int) $statistik->kebijakan_kekerasan }}
                    ],
                    backgroundColor: [
                        '#ef4444', // Merah Fisik
                        '#8b5cf6', // Ungu Psikis
                        '#06b6d4', // Cyan Perundungan
                        '#f01dbbff', // Rose Kekerasan Seksual
                        '#f59e0b', // Amber Diskriminasi
                        '#64748b'  // Slate Kebijakan
                    ],
                    borderWidth: 2,
                    borderColor: '#ffffff',
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 10,
                            font: { size: 11 }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.label + ': ' + context.parsed + ' Kasus';
                            }
                        }
                    }
                },
                cutout: '60%'
            }
        });
    }
});
</script>
@endsection
