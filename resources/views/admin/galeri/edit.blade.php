@extends('layouts.admin')

@section('title', 'Edit Album: ' . $galeri->judul_kegiatan)

@section('content')
<div style="max-width: 860px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
        <div>
            <h1 style="font-family: var(--font-heading); font-size: 1.6rem; color: var(--primary); margin-bottom: 4px;">
                Edit Album Kegiatan
            </h1>
            <p style="font-size: 0.9rem; color: var(--text-muted);">
                Ubah informasi kegiatan atau kelola foto-foto di dalam album.
            </p>
        </div>

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('galeri.show', $galeri) }}" target="_blank" class="btn btn-outline-white btn-sm" style="background: #3c745e;">
                <span style="color: #ffffff">Lihat Tampilan Publik</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    <polyline points="15 3 21 3 21 9"></polyline>
                    <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-outline btn-sm">
                &larr; Kembali ke Daftar
            </a>
        </div>
    </div>

    <!-- Form Utama Edit Data & Tambah Foto -->
    <div class="admin-card" style="margin-bottom: 36px;">
        <form action="{{ route('admin.galeri.update', $galeri) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Judul Kegiatan -->
            <div class="form-group">
                <label for="judul_kegiatan" class="form-label">Judul Kegiatan <span style="color: var(--accent-alert);">*</span></label>
                <input 
                    type="text" 
                    id="judul_kegiatan" 
                    name="judul_kegiatan" 
                    class="form-control" 
                    value="{{ old('judul_kegiatan', $galeri->judul_kegiatan) }}" 
                    required>
                <span class="form-hint">Slug URL saat ini: <code>/galeri/{{ $galeri->slug }}</code></span>
                @error('judul_kegiatan')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tanggal Kegiatan -->
            <div class="form-group">
                <label for="tanggal_kegiatan" class="form-label">Tanggal Kegiatan <span style="color: var(--accent-alert);">*</span></label>
                <input 
                    type="date" 
                    id="tanggal_kegiatan" 
                    name="tanggal_kegiatan" 
                    class="form-control" 
                    value="{{ old('tanggal_kegiatan', optional($galeri->tanggal_kegiatan)->format('Y-m-d')) }}" 
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
                    required>{{ old('deskripsi_singkat', $galeri->deskripsi_singkat) }}</textarea>
                @error('deskripsi_singkat')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <hr style="margin: 28px 0; border: none; border-top: 1px solid var(--border-subtle);">

            <!-- Foto Utama Saat Ini & Opsi Penggantian -->
            <div class="form-group">
                <label class="form-label">Foto Utama / Sampul Saat Ini</label>
                <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 12px;">
                    @if($galeri->foto_utama)
                        <img src="{{ asset('storage/' . $galeri->foto_utama) }}" alt="Foto Sampul" style="width: 160px; height: 100px; object-fit: cover; border-radius: var(--radius-md); border: 1px solid var(--border-subtle);" onerror="this.src='https://placehold.co/160x100/0b192c/ffffff?text=Sampul'">
                    @else
                        <div style="width: 160px; height: 100px; background: #e2e8f0; border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #64748b;">
                            Belum Ada Sampul
                        </div>
                    @endif
                    <div style="flex: 1;">
                        <span class="form-label" style="font-size: 0.85rem; margin-bottom: 4px;">Ganti Foto Sampul Baru (Opsional):</span>
                        <input type="file" name="foto_utama" class="form-control" accept="image/jpeg,image/png,image/jpg,image/webp">
                        <span class="form-hint">Biarkan kosong jika tidak ingin mengubah foto sampul utama.</span>
                    </div>
                </div>
                @error('foto_utama')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tambah Foto Dokumentasi Baru -->
            <div class="form-group">
                <label for="foto_dokumentasi" class="form-label">Tambah Foto Dokumentasi Baru (Multiple Upload)</label>
                <input 
                    type="file" 
                    id="foto_dokumentasi" 
                    name="foto_dokumentasi[]" 
                    class="form-control" 
                    accept="image/jpeg,image/png,image/jpg,image/webp" 
                    multiple>
                <span class="form-hint">Pilih satu atau beberapa foto baru untuk ditambahkan ke dalam album ini.</span>
                <div id="editFileSelectedCount" style="margin-top: 8px; font-size: 0.85rem; color: var(--secondary); font-weight: 600;"></div>
                @error('foto_dokumentasi.*')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Simpan Perubahan -->
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
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Manajemen Foto Dokumentasi yang Sudah Ada -->
    <div class="admin-card">
        <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: var(--primary); margin-bottom: 6px;">
            Foto Dokumentasi Dalam Album Ini ({{ $galeri->fotos->count() }} Foto)
        </h3>
        <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 24px;">
            Anda dapat menghapus foto individual yang tidak diperlukan di bawah ini.
        </p>

        @if($galeri->fotos->count() > 0)
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 18px;">
                @foreach($galeri->fotos as $foto)
                    <div style="position: relative; border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border-subtle); background: white; box-shadow: var(--shadow-sm);">
                        <img src="{{ asset('storage/' . $foto->foto_path) }}" alt="Foto Dokumentasi" style="width: 100%; height: 130px; object-fit: cover;" onerror="this.src='https://placehold.co/200x130/0b192c/ffffff?text=Dokumentasi'">
                        
                        <div style="padding: 10px; display: flex; justify-content: space-between; align-items: center; background: #f8fafc; border-top: 1px solid var(--border-subtle);">
                            <span style="font-size: 0.78rem; color: #64748b; font-weight: 600;">Urutan #{{ $foto->urutan }}</span>
                            
                            <form action="{{ route('admin.galeri.foto.destroy', $foto) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto dokumentasi ini?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="padding: 4px 8px; font-size: 0.75rem;" title="Hapus foto ini">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span>Hapus</span>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div style="text-align: center; padding: 32px; background: #f8fafc; border-radius: var(--radius-md); color: var(--text-muted); font-size: 0.92rem;">
                Belum ada foto dokumentasi tambahan dalam album ini selain foto sampul utama. Gunakan form di atas untuk mengunggah foto.
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    const inputDokumentasiEdit = document.getElementById('foto_dokumentasi');
    const countDisplayEdit = document.getElementById('editFileSelectedCount');

    if (inputDokumentasiEdit) {
        inputDokumentasiEdit.addEventListener('change', function() {
            const count = this.files.length;
            if (count > 0) {
                countDisplayEdit.textContent = `✓ ${count} foto baru dipilih siap ditambahkan ke album.`;
            } else {
                countDisplayEdit.textContent = '';
            }
        });
    }
</script>
@endsection
