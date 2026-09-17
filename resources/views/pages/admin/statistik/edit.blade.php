@extends('layouts.admin')

@section('title', 'Kelola Statistik Kasus')

@section('content')
<div style="margin-bottom: 28px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
    <div>
        <h1 style="font-size: 1.6rem; color: var(--text-heading); margin-bottom: 4px;">
            Statistik Penanganan Kasus Kekerasan
        </h1>
        <p style="color: var(--text-muted); font-size: 0.92rem; margin: 0;">
            Data di bawah ini akan ditampilkan secara transparan di Beranda dalam bentuk Bar Chart (Status) dan Doughnut Chart (Jenis Kekerasan).
        </p>
    </div>
    <a href="{{ route('beranda') }}#statistik" target="_blank" class="btn btn-outline btn-sm">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        <span>Lihat Tampilan di Beranda</span>
    </a>
</div>

<form action="{{ route('admin.statistik.update') }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Card 1: Periode & Metrik Status Penanganan -->
    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 28px; box-shadow: var(--shadow-sm); margin-bottom: 24px;">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px solid var(--primary-subtle);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
            <h3 style="font-size: 1.2rem; color: var(--primary); margin: 0;">
                1. Periode &amp; Status Penanganan Laporan (Bar Chart)
            </h3>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px; color: var(--text-heading);">
                Periode / Tahun Laporan <span style="color: #dc2626;">*</span>
            </label>
            <input type="text" name="tahun_periode" value="{{ old('tahun_periode', $statistik->tahun_periode) }}"
                   placeholder="Contoh: 2026 atau Periode 2024–2026"
                   style="width: 100%; max-width: 400px; padding: 10px 14px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-family: var(--font-body); font-size: 0.95rem; outline: none;"
                   required>
            <span style="display: block; font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                Teks ini akan muncul sebagai sub-judul atau badge periode di atas grafik Beranda.
            </span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
            <!-- Total Masuk -->
            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: var(--radius-lg); padding: 18px;">
                <label style="display: block; font-weight: 700; font-size: 0.88rem; margin-bottom: 6px; color: #166534;">
                    Total Laporan Masuk
                </label>
                <input type="number" name="total_masuk" value="{{ old('total_masuk', $statistik->total_masuk) }}" min="0"
                       style="width: 100%; padding: 10px 12px; border: 1.5px solid #86efac; border-radius: var(--radius-md); font-size: 1.25rem; font-weight: 700; color: #14532d; outline: none; background: #ffffff;"
                       required>
            </div>

            <!-- Telah Selesai -->
            <div style="background: #fefce8; border: 1px solid #fef08a; border-radius: var(--radius-lg); padding: 18px;">
                <label style="display: block; font-weight: 700; font-size: 0.88rem; margin-bottom: 6px; color: #854d0e;">
                    Telah Selesai
                </label>
                <input type="number" name="telah_selesai" value="{{ old('telah_selesai', $statistik->telah_selesai) }}" min="0"
                       style="width: 100%; padding: 10px 12px; border: 1.5px solid #fde047; border-radius: var(--radius-md); font-size: 1.25rem; font-weight: 700; color: #713f12; outline: none; background: #ffffff;"
                       required>
            </div>

            <!-- On Going -->
            <div style="background: #fff7ed; border: 1px solid #fed7aa; border-radius: var(--radius-lg); padding: 18px;">
                <label style="display: block; font-weight: 700; font-size: 0.88rem; margin-bottom: 6px; color: #9a3412;">
                    Sedang ditangani
                </label>
                <input type="number" name="on_going" value="{{ old('on_going', $statistik->on_going) }}" min="0"
                       style="width: 100%; padding: 10px 12px; border: 1.5px solid #fdba74; border-radius: var(--radius-md); font-size: 1.25rem; font-weight: 700; color: #7c2d12; outline: none; background: #ffffff;"
                       required>
            </div>
        </div>
    </div>

    <!-- Card 2: 6 Jenis Kekerasan (Doughnut Chart) -->
    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 28px; box-shadow: var(--shadow-sm); margin-bottom: 24px;">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px solid var(--primary-subtle);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="4"></circle>
            </svg>
            <h3 style="font-size: 1.2rem; color: var(--primary); margin: 0;">
                2. Distribusi 6 Kategori Jenis Kekerasan (Doughnut Chart)
            </h3>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 18px;">
            <!-- 1. Fisik -->
            <div style="padding: 14px 16px; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); background: #fafafa;">
                <label style="display: block; font-weight: 600; font-size: 0.88rem; margin-bottom: 6px; color: var(--text-heading);">
                    1. Kekerasan Fisik
                </label>
                <input type="number" name="kekerasan_fisik" value="{{ old('kekerasan_fisik', $statistik->kekerasan_fisik) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 600; outline: none;" required>
            </div>

            <!-- 2. Psikis -->
            <div style="padding: 14px 16px; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); background: #fafafa;">
                <label style="display: block; font-weight: 600; font-size: 0.88rem; margin-bottom: 6px; color: var(--text-heading);">
                    2. Kekerasan Psikis
                </label>
                <input type="number" name="kekerasan_psikis" value="{{ old('kekerasan_psikis', $statistik->kekerasan_psikis) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 600; outline: none;" required>
            </div>

            <!-- 3. Perundungan -->
            <div style="padding: 14px 16px; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); background: #fafafa;">
                <label style="display: block; font-weight: 600; font-size: 0.88rem; margin-bottom: 6px; color: var(--text-heading);">
                    3. Perundungan
                </label>
                <input type="number" name="perundungan" value="{{ old('perundungan', $statistik->perundungan) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 600; outline: none;" required>
            </div>

            <!-- 4. Kekerasan Seksual -->
            <div style="padding: 14px 16px; border: 1.5px solid var(--primary-border); border-radius: var(--radius-md); background: var(--primary-subtle);">
                <label style="display: block; font-weight: 700; font-size: 0.88rem; margin-bottom: 6px; color: var(--primary-dark);">
                    4. Kekerasan Seksual (KS)
                </label>
                <input type="number" name="kekerasan_seksual" value="{{ old('kekerasan_seksual', $statistik->kekerasan_seksual) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--primary); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 700; color: var(--primary-dark); outline: none; background: #ffffff;" required>
            </div>

            <!-- 5. Diskriminasi dan Intoleransi -->
            <div style="padding: 14px 16px; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); background: #fafafa;">
                <label style="display: block; font-weight: 600; font-size: 0.88rem; margin-bottom: 6px; color: var(--text-heading);">
                    5. Diskriminasi dan Intoleransi
                </label>
                <input type="number" name="diskriminasi_intoleransi" value="{{ old('diskriminasi_intoleransi', $statistik->diskriminasi_intoleransi) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 600; outline: none;" required>
            </div>

            <!-- 6. Kebijakan Kekerasan -->
            <div style="padding: 14px 16px; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); background: #fafafa;">
                <label style="display: block; font-weight: 600; font-size: 0.88rem; margin-bottom: 6px; color: var(--text-heading);">
                    6. Kebijakan Mengandung Kekerasan
                </label>
                <input type="number" name="kebijakan_kekerasan" value="{{ old('kebijakan_kekerasan', $statistik->kebijakan_kekerasan) }}" min="0"
                       style="width: 100%; padding: 8px 12px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-size: 1.05rem; font-weight: 600; outline: none;" required>
            </div>
        </div>
    </div>

    <!-- Card 3: Catatan Kriteria Selesai -->
    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 28px; box-shadow: var(--shadow-sm); margin-bottom: 32px;">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 2px solid var(--primary-subtle);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
            <h3 style="font-size: 1.2rem; color: var(--primary); margin: 0;">
                3. Catatan Kriteria Kasus Selesai (Ditampilkan di Bawah Grafik)
            </h3>
        </div>

        <div>
            <textarea name="catatan_kriteria" rows="4"
                      style="width: 100%; padding: 12px 14px; border: 1.5px solid var(--border-subtle); border-radius: var(--radius-md); font-family: var(--font-body); font-size: 0.92rem; line-height: 1.6; outline: none;">{{ old('catatan_kriteria', $statistik->catatan_kriteria) }}</textarea>
            <span style="display: block; font-size: 0.8rem; color: #64748b; margin-top: 6px;">
                Teks ini menjelaskan kepada publik dasar kriteria sebuah kasus dinyatakan selesai.
            </span>
        </div>
    </div>

    <!-- Tombol Simpan -->
    <div style="display: flex; gap: 12px; align-items: center;">
        <button type="submit" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
            <span>Simpan Perubahan Statistik</span>
        </button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline">
            Batal
        </a>
    </div>
</form>
@endsection
