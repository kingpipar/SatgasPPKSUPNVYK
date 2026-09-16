@extends('layouts.app')

@section('title', 'Profil Satgas — Satgas PPKS UPN "Veteran" Yogyakarta')

@section('content')
<!-- Page Header -->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <div class="breadcrumb-nav">
                <a href="{{ route('beranda') }}">Dashboard</a>
                <span>/</span>
                <span>Profil</span>
                <span>/</span>
                <span style="color: #ffffff;">Profil Satgas</span>
            </div>
            <h1 class="page-banner-title">Profil Satgas PPKS</h1>
            <p class="page-banner-desc">
                Mengenal Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual UPN "Veteran" Yogyakarta, mandat resmi, visi misi, serta komitmen kampus bela negara.
            </p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: flex-start;">
            <div>
                <h2 style="font-size: 1.8rem; margin-bottom: 20px; color: var(--primary);">Latar Belakang Pembentukan</h2>
                <p style="text-align: justify; line-height: 1.8;">
                    Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) UPN "Veteran" Yogyakarta dibentuk sebagai wujud komitmen institusional universitas dalam memastikan lingkungan tridharma perguruan tinggi yang aman, bermartabat, berkeadilan gender, dan bebas dari segala bentuk kekerasan, perundungan, maupun pelecehan seksual.
                </p>
                <p style="text-align: justify; line-height: 1.8;">
                    Sebagai kampus bela negara, UPN "Veteran" Yogyakarta memegang teguh nilai penghormatan atas harkat dan martabat kemanusiaan. Pembentukan Satgas PPKS dilandasi oleh mandat peraturan perundang-undangan nasional melalui <strong>Permendikbudristek Nomor 30 Tahun 2021</strong> dan ditegaskan kembali melalui <strong>Permendikbudristek Nomor 55 Tahun 2024</strong> serta payung hukum internal <strong>Peraturan Rektor UPN "Veteran" Yogyakarta Nomor 5 Tahun 2023</strong>.
                </p>

                <div style="margin-top: 36px; padding: 28px; background: var(--bg-surface); border-left: 4px solid var(--primary); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; box-shadow: var(--shadow-sm);">
                    <h3 style="font-size: 1.35rem; margin-bottom: 12px; color: var(--primary);">Visi Satgas PPKS</h3>
                    <p style="font-style: italic; color: #334155; margin-bottom: 20px; font-size: 1.05rem;">
                        "Menjadi garda terdepan terciptanya lingkungan akademik UPN 'Veteran' Yogyakarta yang berkarakter bela negara, inklusif, humanis, dan nir-kekerasan seksual bagi seluruh sivitas akademika."
                    </p>

                    <h3 style="font-size: 1.35rem; margin-bottom: 12px; color: var(--primary);">Misi Utama</h3>
                    <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 10px; color: #334155;">
                        <li>Melaksanakan edukasi dan pencegahan kekerasan seksual secara terstruktur dan berkelanjutan di seluruh fakultas dan unit kampus.</li>
                        <li>Menyelenggarakan mekanisme penerimaan laporan yang aman, terpercaya, dan menjamin 100% kerahasiaan identitas korban serta saksi.</li>
                        <li>Memberikan layanan pendampingan komprehensif mencakup pemulihan psikologis, pendampingan hukum, dan proteksi keselamatan akademik korban.</li>
                        <li>Melakukan penanganan laporan secara adil, objektif, transparan, bebas dari intervensi relasi kuasa, serta merekomendasikan sanksi yang berkeadilan.</li>
                    </ul>
                </div>

                <div style="margin-top: 40px;">
                    <h2 style="font-size: 1.8rem; margin-bottom: 20px; color: var(--primary);">Nilai-Nilai Kerja (Core Values)</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
                        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); padding: 20px; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary); font-size: 1.1rem; margin-bottom: 8px;">1. Berpihak pada Korban</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Mengutamakan keselamatan jiwa, kesehatan mental, dan pemulihan hak-hak korban.</p>
                        </div>
                        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); padding: 20px; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary); font-size: 1.1rem; margin-bottom: 8px;">2. Kerahasiaan Penuh</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Identitas pelapor, korban, dan materi penanganan dijaga ketat di bawah sumpah jabatan.</p>
                        </div>
                        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); padding: 20px; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary); font-size: 1.1rem; margin-bottom: 8px;">3. Non-Diskriminasi</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Layanan diberikan setara tanpa memandang gender, suku, agama, ras, maupun status jabatan akademik.</p>
                        </div>
                        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); padding: 20px; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary); font-size: 1.1rem; margin-bottom: 8px;">4. Akuntabel &amp; Adil</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0;">Investigasi dijalankan berbasis pembuktian fakta yang objektif dan bebas konflik kepentingan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Info Box -->
            <div style="position: sticky; top: 110px;">
                <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 28px; box-shadow: var(--shadow-md);">
                    <h3 style="font-size: 1.25rem; margin-bottom: 18px; color: var(--primary); border-bottom: 2px solid var(--primary-subtle); padding-bottom: 8px;">
                        Dasar Hukum Mandat
                    </h3>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 14px; font-size: 0.9rem;">
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Permendikbudristek No. 30/2021</strong> tentang PPKS di Lingkungan Perguruan Tinggi.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Permendikbudristek No. 55/2024</strong> tentang Pencegahan dan Penanganan Kekerasan di PT.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Peraturan Rektor UPNVY No. 5/2023</strong> tentang Pencegahan &amp; Penanganan Kekerasan Seksual.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" style="flex-shrink: 0;"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            <span><strong>Keputusan Rektor UPNVY</strong> tentang Pengangkatan Anggota Satgas PPKS.</span>
                        </li>
                    </ul>

                    <div style="margin-top: 24px; padding-top: 18px; border-top: 1px solid var(--border-subtle); text-align: center;">
                        <a href="{{ route('pedoman.index') }}" class="btn btn-outline btn-sm" style="width: 100%;">
                            <span>Buka Dokumen Pedoman</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
