@extends('layouts.admin')

@section('title', 'Daftar Album Galeri')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
    <div>
        <h1 style="font-family: var(--font-heading); font-size: 1.65rem; color: var(--primary); margin-bottom: 4px;">
            Daftar Album Kegiatan Galeri
        </h1>
        <p style="font-size: 0.92rem; color: var(--text-muted);">
            Kelola arsip dokumentasi kegiatan Satgas PPKS (Total: {{ $galeris->total() }} Kegiatan)
        </p>
    </div>

    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        <span>Tambah Kegiatan Baru</span>
    </a>
</div>

<div class="admin-card">
    @if($galeris->count() > 0)
        <div style="overflow-x: auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">Sampul</th>
                        <th>Judul Kegiatan</th>
                        <th style="width: 150px;">Tanggal</th>
                        <th style="width: 110px;">Total Foto</th>
                        <th style="width: 220px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galeris as $item)
                        <tr>
                            <td>
                                @if($item->foto_utama)
                                    <img src="{{ asset('storage/' . $item->foto_utama) }}" alt="{{ $item->judul_kegiatan }}" class="table-thumb" onerror="this.src='https://placehold.co/100x70/0b192c/ffffff?text=Sampul'">
                                @else
                                    <div class="table-thumb" style="display: flex; align-items: center; justify-content: center; font-size: 0.75rem; color: #64748b;">
                                        No Image
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div style="font-weight: 700; color: var(--primary); font-size: 0.96rem; margin-bottom: 3px;">
                                    {{ $item->judul_kegiatan }}
                                </div>
                                <div style="font-size: 0.82rem; color: var(--text-muted); max-width: 480px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $item->deskripsi_singkat }}
                                </div>
                            </td>
                            <td>
                                <span style="font-size: 0.88rem; color: #475569;">
                                    {{ optional($item->tanggal_kegiatan)->format('d M Y') ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <span style="display: inline-flex; align-items: center; gap: 4px; padding: 3px 10px; background: #e0f2fe; color: #0369a1; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 700;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    {{ $item->fotos_count }} Foto
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 8px; justify-content: center;">
                                    <a href="{{ route('galeri.show', $item) }}" target="_blank" class="btn btn-outline btn-sm" title="Lihat Tampilan Publik">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>

                                    <a href="{{ route('admin.galeri.edit', $item) }}" class="btn btn-secondary btn-sm" title="Edit Album & Kelola Foto">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('admin.galeri.destroy', $item) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan \'{{ $item->judul_kegiatan }}\' beserta seluruh fotonya?');" style="margin: 0;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus Album">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="margin-top: 24px; display: flex; justify-content: center;">
            {{ $galeris->links() }}
        </div>
    @else
        <div style="text-align: center; padding: 48px 20px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: #f1f5f9; color: var(--secondary); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
            </div>
            <h3 style="font-family: var(--font-heading); color: var(--primary); margin-bottom: 6px;">Belum Ada Data Kegiatan</h3>
            <p style="font-size: 0.92rem; color: var(--text-muted); margin-bottom: 20px;">
                Silakan klik tombol di bawah untuk menambahkan album kegiatan dokumentasi pertama Anda.
            </p>
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
                Tambah Kegiatan Sekarang
            </a>
        </div>
    @endif
</div>
@endsection
