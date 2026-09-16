@extends('layouts.admin')

@section('title', 'Tambah Album Kegiatan')

@section('content')
<div style="max-width: 800px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div>
            <h1 style="font-family: var(--font-heading); font-size: 1.6rem; color: var(--primary); margin-bottom: 4px;">
                Tambah Kegiatan Baru
            </h1>
            <p style="font-size: 0.9rem; color: var(--text-muted);">
                Formulir pembuatan album dan upload foto dokumentasi kegiatan Satgas PPKS.
            </p>
        </div>

        <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline btn-sm">
            &larr; Kembali
        </a>
    </div>

    <div class="admin-card">
        <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Judul Kegiatan -->
            <div class="form-group">
                <label for="judul_kegiatan" class="form-label">Judul Kegiatan <span style="color: var(--accent-alert);">*</span></label>
                <input 
                    type="text" 
                    id="judul_kegiatan" 
                    name="judul_kegiatan" 
                    class="form-control" 
                    value="{{ old('judul_kegiatan') }}" 
                    placeholder="Contoh: Sosialisasi Pencegahan Kekerasan Seksual pada PKKMB 2024" 
                    required>
                <span class="form-hint">URL slug SEO-friendly akan digenerate otomatis berdasarkan judul kegiatan ini.</span>
                @error('judul_kegiatan')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tanggal Kegiatan -->
            <div class="form-group">
                <label for="tanggal_kegiatan" class="form-label">Tanggal Pelaksanaan Kegiatan <span style="color: var(--accent-alert);">*</span></label>
                <input 
                    type="date" 
                    id="tanggal_kegiatan" 
                    name="tanggal_kegiatan" 
                    class="form-control" 
                    value="{{ old('tanggal_kegiatan', date('Y-m-d')) }}" 
                    required>
                @error('tanggal_kegiatan')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Deskripsi Singkat -->
            <div class="form-group">
                <label for="deskripsi_singkat" class="form-label">Deskripsi Singkat Kegiatan <span style="color: var(--accent-alert);">*</span></label>
                <textarea 
                    id="deskripsi_singkat" 
                    name="deskripsi_singkat" 
                    class="form-control" 
                    rows="4" 
                    placeholder="Tuliskan ringkasan tujuan acara, peserta yang hadir, dan materi yang disampaikan..." 
                    required>{{ old('deskripsi_singkat') }}</textarea>
                @error('deskripsi_singkat')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <hr style="margin: 28px 0; border: none; border-top: 1px solid var(--border-subtle);">

            <!-- Upload Foto Utama (Cover) -->
            <div class="form-group">
                <label for="foto_utama" class="form-label">Foto Utama / Sampul Album <span style="color: var(--accent-alert);">*</span></label>
                <input 
                    type="file" 
                    id="foto_utama" 
                    name="foto_utama" 
                    class="form-control" 
                    accept="image/jpeg,image/png,image/jpg,image/webp" 
                    required>
                <span class="form-hint">Format file: JPG, PNG, atau WEBP. Maksimal ukuran 5 MB. Foto ini tampil di grid depan galeri.</span>
                @error('foto_utama')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Upload Multiple Foto Dokumentasi Tambahan -->
            <div class="form-group">
                <label for="foto_dokumentasi" class="form-label">Foto Dokumentasi Tambahan (Multiple Upload)</label>
                <input 
                    type="file" 
                    id="foto_dokumentasi" 
                    name="foto_dokumentasi[]" 
                    class="form-control" 
                    accept="image/jpeg,image/png,image/jpg,image/webp" 
                    multiple>
                <span class="form-hint">Tekan <code>Ctrl</code> (Windows) atau <code>Cmd</code> (Mac) untuk memilih banyak foto sekaligus. Maksimal 5 MB per file.</span>
                <div id="fileSelectedCount" style="margin-top: 8px; font-size: 0.85rem; color: var(--secondary); font-weight: 600;"></div>
                @error('foto_dokumentasi.*')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Aksi -->
            <div style="margin-top: 32px; display: flex; gap: 14px; justify-content: flex-end;">
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline">
                    Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg>
                    <span>Simpan Album Kegiatan</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const inputDokumentasi = document.getElementById('foto_dokumentasi');
    const countDisplay = document.getElementById('fileSelectedCount');

    if (inputDokumentasi) {
        inputDokumentasi.addEventListener('change', function() {
            const count = this.files.length;
            if (count > 0) {
                countDisplay.textContent = `✓ ${count} file foto dokumentasi dipilih siap diunggah.`;
            } else {
                countDisplay.textContent = '';
            }
        });
    }
</script>
@endsection
