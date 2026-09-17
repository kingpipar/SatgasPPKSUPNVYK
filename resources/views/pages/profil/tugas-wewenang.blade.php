@extends('layouts.app')
@section('title', 'Tugas & Wewenang')
@section('meta_description', 'Tugas pokok, fungsi, wewenang, dan tanggung jawab hukum Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS).')
@section('content')

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title">Tugas & Wewenang Satgas PPKS</h1>
        <p class="page-header-subtitle">
            Payung hukum pelaksanaan mandat penanganan, kewenangan investigasi, dan rekomendasi sanksi berkeadilan.
        </p>
        <div class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>&bull;</span>
            <span>Profil</span>
            <span>&bull;</span>
            <span style="color: #ffffff;">Tugas & Wewenang</span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container container-narrow">
        <div class="card" style="margin-bottom: 32px;">
            <span class="section-badge">Tugas Pokok (Pasal 34)</span>
            <h2 class="card-title" style="font-size: 1.5rem; margin-bottom: 16px;">Tugas Utama Satgas PPKS</h2>
            <div style="display: flex; flex-direction: column; gap: 14px; font-size: 0.95rem; color: #334155;">
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">a.</span>
                    <p>Membantu Pemimpin Perguruan Tinggi menyusun pedoman teknis pencegahan dan penanganan kekerasan seksual di lingkungan kampus.</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">b.</span>
                    <p>Melakukan sosialisasi pendidikan kesetaraan gender dan pencegahan kekerasan seksual bagi seluruh mahasiswa, pendidik, dan tenaga kependidikan.</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">c.</span>
                    <p>Menerima dan menindaklanjuti laporan dugaan kekerasan seksual yang melibatkan civitas akademika baik di dalam maupun di luar kampus.</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">d.</span>
                    <p>Melakukan pemeriksaan dan investigasi menyeluruh terhadap dugaan laporan kekerasan seksual dengan mengedepankan hak privasi korban.</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">e.</span>
                    <p>Menyusun dan menyampaikan kesimpulan serta rekomendasi penjatuhan sanksi administratif kepada Pemimpin Perguruan Tinggi (Rektor).</p>
                </div>
                <div style="display: flex; gap: 12px;">
                    <span style="font-weight: 700; color: var(--secondary);">f.</span>
                    <p>Memfasilitasi pendampingan psikologis, konseling medis, dan bantuan hukum yang dibutuhkan oleh korban atau saksi.</p>
                </div>
            </div>
        </div>
        <div class="card" style="margin-bottom: 32px; border-left: 4px solid var(--primary);">
            <span class="section-badge">Wewenang Hukum</span>
            <h2 class="card-title" style="font-size: 1.5rem; margin-bottom: 16px;">Wewenang Satgas PPKS</h2>
            <p style="font-size: 0.94rem; color: var(--text-muted); margin-bottom: 16px;">
                Dalam menjalankan mandat investigasi dan perlindungan, Satgas PPKS memiliki wewenang resmi:
            </p>
            <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 10px; font-size: 0.95rem; color: #334155;">
                <li><strong>Memanggil dan Meminta Keterangan:</strong> Memanggil pelapor, terlapor, saksi, atau pihak terkait di lingkungan kampus untuk dimintai keterangan tertulis maupun lisan.</li>
                <li><strong>Mengakses & Memeriksa Dokumen/Bukti:</strong> Mengakses rekaman CCTV kampus, log data sistem informasi, atau bukti relevan lainnya sesuai ketentuan perlindungan data.</li>
                <li><strong>Menetapkan Status Perlindungan Sementara:</strong> Merekomendasikan pemindahan kelas bimbingan, perubahan jadwal ujian, atau pelarangan kontak fisik bagi terlapor selama proses pemeriksaan berjalan.</li>
                <li><strong>Bermitra dengan Lembaga Eksternal:</strong> Menjalin kerja sama rujukan dengan Unit Pelaksana Teknis Daerah Perlindungan Perempuan dan Anak (UPTD PPA), kepolisian, dan rumah sakit.</li>
            </ul>
        </div>
        <div class="card">
            <span class="section-badge">Tindak Lanjut Laporan</span>
            <h2 class="card-title" style="font-size: 1.5rem; margin-bottom: 16px;">Klasifikasi Rekomendasi Sanksi Administratif</h2>
            <div class="grid-3" style="margin-top: 18px;">
                <div style="background: #f8fafc; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 18px;">
                    <h4 style="color: #0284c7; margin-bottom: 8px;">Sanksi Ringan</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">
                        Teguran tertulis, atau pernyataan permohonan maaf secara tertulis yang dipublikasikan di internal kampus.
                    </p>
                </div>
                <div style="background: #f8fafc; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 18px;">
                    <h4 style="color: #d97706; margin-bottom: 8px;">Sanksi Sedang</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">
                        Pemberhentian sementara dari jabatan struktural, skorsing akademik, atau penundaan kenaikan pangkat/gaji berkala.
                    </p>
                </div>
                <div style="background: #f8fafc; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 18px;">
                    <h4 style="color: #dc2626; margin-bottom: 8px;">Sanksi Berat</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted);">
                        Pemberhentian tetap sebagai mahasiswa (Drop Out / DO) atau pemecatan tetap sebagai dosen/tenaga kependidikan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
