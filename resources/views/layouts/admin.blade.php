<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Galeri') - Panel Kelola Satgas PPKS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body style="background-color: #f1f5f9;">

    <!-- Admin Header Bar -->
    <header style="background: var(--primary-deep); color: white; padding: 16px 0; border-bottom: 3px solid var(--primary); box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div class="brand-icon-wrapper" style="width: 40px; height: 40px;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight: 700; color: #ffffff; line-height: 1.2;">
                        Panel Kelola Satgas PPKS
                    </h2>
                    <span style="font-size: 0.76rem; color: #94a3b8;">
                        Manajemen Dokumentasi Kegiatan &amp; Statistik Kasus
                    </span>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <a href="{{ route('beranda') }}" target="_blank" class="btn btn-outline-white btn-sm" style="background: #3c745e;">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                    <span>Lihat Website</span>
                </a>

                @if(session('admin_authenticated'))
                    <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin keluar dari panel admin?');">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Keluar</span>
                        </button>
                    </form>
                @endif
            </div>
        </div>

        @if(session('admin_authenticated'))
            <!-- Admin Navigation Tabs -->
            <div class="container" style="margin-top: 14px; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 10px; display: flex; gap: 8px;">
                <a href="{{ route('admin.galeri.index') }}" 
                   style="padding: 7px 16px; border-radius: var(--radius-md); font-size: 0.88rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s; {{ request()->routeIs('admin.galeri.*') ? 'background: rgba(255,255,255,0.22); color: #ffffff;' : 'color: #cbd5e1; background: transparent;' }}"
                   onmouseenter="this.style.background='rgba(255,255,255,0.18)'; this.style.color='#fff'"
                   onmouseleave="{{ request()->routeIs('admin.galeri.*') ? 'this.style.background=\'rgba(255,255,255,0.22)\';' : 'this.style.background=\'transparent\'; this.style.color=\'#cbd5e1\';' }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    <span>Galeri Kegiatan</span>
                </a>

                <a href="{{ route('admin.statistik.edit') }}" 
                   style="padding: 7px 16px; border-radius: var(--radius-md); font-size: 0.88rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s; {{ request()->routeIs('admin.statistik.*') ? 'background: rgba(255,255,255,0.22); color: #ffffff;' : 'color: #cbd5e1; background: transparent;' }}"
                   onmouseenter="this.style.background='rgba(255,255,255,0.18)'; this.style.color='#fff'"
                   onmouseleave="{{ request()->routeIs('admin.statistik.*') ? 'this.style.background=\'rgba(255,255,255,0.22)\';' : 'this.style.background=\'transparent\'; this.style.color=\'#cbd5e1\';' }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    <span>Statistik Kasus</span>
                </a>
            </div>
        @endif
    </header>

    <!-- Main Admin Content -->
    <main style="padding: 40px 0 60px;">
        <div class="container">
            <!-- Alert Messages -->
            @if(session('success'))
                <div class="alert alert-success">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if(session('warning'))
                <div class="alert alert-warning">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <span>{{ session('warning') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <div>
                        <strong>Terjadi beberapa kesalahan:</strong>
                        <ul style="margin-left: 20px; margin-top: 6px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer style="text-align: center; padding: 24px; font-size: 0.85rem; color: #64748b;">
        Panel Pengelola Galeri Dokumentasi Kegiatan Satgas PPKS &bull; Akses Terbatas
    </footer>

    @yield('scripts')
</body>
</html>
