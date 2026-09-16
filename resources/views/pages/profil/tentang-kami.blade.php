@extends('layouts.app')

@section('title', 'Tentang Kami - Visi & Misi')
@section('meta_description', 'Profil dan latar belakang pembentukan Satgas PPKS, visi, misi, serta landasan hukum pencegahan kekerasan seksual di kampus.')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="page-header-title">Tentang Satgas PPKS</h1>
        <p class="page-header-subtitle">
            Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual sebagai garda terdepan terciptanya lingkungan belajar yang aman dan bermartabat.
        </p>
        <div class="breadcrumb">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>&bull;</span>
            <span>Profil</span>
            <span>&bull;</span>
            <span style="color: #ffffff;">Tentang Kami</span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container container-narrow">
        <!-- Latar Belakang -->
        <div class="card" style="margin-bottom: 32px;">
            <span class="section-badge">Latar Belakang</span>
            <h2 class="card-title" style="font-size: 1.6rem; margin-bottom: 16px;">Mewujudkan Kampus Merdeka Bebas Kekerasan Seksual</h2>
            <div style="font-size: 1rem; color: #334155; line-height: 1.8; display: flex; flex-direction: column; gap: 16px;">
                <p>
                    Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) dibentuk sebagai tindak lanjut amanat <strong>Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia Nomor 30 Tahun 2021</strong> tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi.
                </p>
                <p>
                    Perguruan tinggi harus menjadi ekosistem pendidikan yang aman, nyaman, dan berkeadilan. Segala bentuk tindakan kekerasan seksual, pelecehan verbal, pemerasan relasi kuasa, maupun kekerasan seksual berbasis elektronik (KBGO) tidak memiliki tempat di lingkungan akademis. Satgas PPKS berdiri independen dan berdedikasi mengawal hak rasa aman bagi mahasiswa, dosen, tenaga kependidikan, serta seluruh warga kampus.
                </p>
            </div>
        </div>

        <!-- Visi & Misi Grid -->
        <div class="grid-2" style="margin-bottom: 32px;">
            <div class="card" style="border-top: 4px solid var(--secondary);">
                <div class="card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                </div>
                <h3 class="card-title">Visi</h3>
                <p class="card-text" style="font-size: 1rem; line-height: 1.7;">
                    "Terwujudnya lingkungan kampus yang inklusif, humanis, menjunjung tinggi martabat kemanusiaan, serta sepenuhnya terbebas dari segala bentuk kekerasan seksual demi mendukung pencapaian tridharma perguruan tinggi yang unggul."
                </p>
            </div>

            <div class="card" style="border-top: 4px solid var(--primary);">
                <div class="card-icon" style="background: rgba(11, 25, 44, 0.1); color: var(--primary);">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                </div>
                <h3 class="card-title">Misi</h3>
                <ul style="padding-left: 18px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.7; display: flex; flex-direction: column; gap: 8px;">
                    <li>Menyelenggarakan edukasi dan sosialisasi pencegahan kekerasan seksual yang berkesinambungan bagi seluruh civitas akademika.</li>
                    <li>Menyediakan mekanisme pelaporan dan pengaduan yang aman, cepat, mudah diakses, dan bergaransi konfidensialitas.</li>
                    <li>Melakukan pemeriksaan dan investigasi yang objektif, transparan, dan tidak menyudutkan korban (*victim blaming*).</li>
                    <li>Menjamin perlindungan menyeluruh, pendampingan psikologis, hukum, dan hak akademik bagi korban serta saksi.</li>
                </ul>
            </div>
        </div>

        <!-- Nilai-Nilai Dasar Penanganan -->
        <div class="card">
            <span class="section-badge">Prinsip Kerja</span>
            <h2 class="card-title" style="font-size: 1.5rem; margin-bottom: 18px;">Nilai-Nilai Dasar Pelayanan Satgas</h2>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <div style="display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">1</div>
                    <div>
                        <h4 style="color: var(--primary); font-size: 1rem; margin-bottom: 4px;">Kepentingan Terbaik Korban</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">Setiap tindakan, pendampingan, dan rekomendasi mendahulukan keselamatan, kehendak, dan pemulihan korban.</p>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">2</div>
                    <div>
                        <h4 style="color: var(--primary); font-size: 1rem; margin-bottom: 4px;">Kerahasiaan Ketat</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">Identitas pelapor, korban, saksi, dan detail investigasi dirahasiakan rapat sesuai standar etik hukum.</p>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">3</div>
                    <div>
                        <h4 style="color: var(--primary); font-size: 1rem; margin-bottom: 4px;">Keadilan & Kepastian Hukum</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">Pemeriksaan dilakukan secara profesional berdasarkan bukti-bukti nyata tanpa memandang relasi kuasa terlapor.</p>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">4</div>
                    <div>
                        <h4 style="color: var(--primary); font-size: 1rem; margin-bottom: 4px;">Aksesibilitas & Inklusivitas</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">Layanan terbuka untuk seluruh kalangan tanpa membedakan status sosial, gender, agama, ras, maupun disabilitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
