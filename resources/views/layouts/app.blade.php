<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Website Resmi Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) UPN 'Veteran' Yogyakarta. Menjamin kampus aman, inklusif, dan bebas kekerasan seksual.">
    <title>@yield('title', 'Satgas PPKS') — UPN "Veteran" Yogyakarta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-upn.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body>

    <!-- HEADER & NAVBAR (Warna Utama Brand: #3c745e Forest Green) -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-brand-logos">
                    <a href="{{ route('beranda') }}" class="brand-logo-item" title="UPN 'Veteran' Yogyakarta">
                        <img src="{{ asset('images/logo-upn.png') }}" 
                             alt="Logo UPN 'Veteran' Yogyakarta" 
                             class="header-logo-img">
                    </a>
                    <a href="{{ route('beranda') }}" class="brand-logo-item" title="Satgas PPKS UPN 'Veteran' Yogyakarta">
                        <img src="{{ asset('images/logo-satgas.png') }}" 
                             alt="Logo Satgas PPKS" 
                             class="header-logo-img">
                    </a>
                    <a href="{{ route('beranda') }}" class="brand-logo-item" title="Kampus Merdeka">
                        <img src="{{ asset('images/logo-kampus-merdeka.png') }}" 
                             alt="Logo Kampus Merdeka" 
                             class="header-logo-img">
                    </a>

                    <div class="brand-divider"></div>

                    <a href="{{ route('beranda') }}" class="brand-text-block">
                        <span class="brand-name">SATGAS PPKS</span>
                        <span class="brand-tagline">UPN "VETERAN" YOGYAKARTA</span>
                    </a>
                </div>
                <!-- Tombol Mobile Toggle -->
                <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu Navigasi">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li>
                        <a href="{{ route('beranda') }}" class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-dropdown">
                        <a href="#" class="nav-link {{ request()->routeIs('profil.*') ? 'active' : '' }}" onclick="event.preventDefault();">
                            <span>Profil</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('profil.satgas') }}" class="dropdown-item {{ request()->routeIs('profil.satgas') ? 'active' : '' }}">
                                    <span>Profil Satgas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profil.logo-filosofi') }}" class="dropdown-item {{ request()->routeIs('profil.logo-filosofi') ? 'active' : '' }}">
                                    <span>Logo dan Filosofi</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profil.struktur-kepengurusan') }}" class="dropdown-item {{ request()->routeIs('profil.struktur-kepengurusan') ? 'active' : '' }}">
                                    <span>Struktur Kepengurusan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('pedoman.index') }}" class="nav-link {{ request()->routeIs('pedoman.*') ? 'active' : '' }}">
                            Pedoman
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pelayanan') }}" class="nav-link {{ request()->routeIs('pelayanan') ? 'active' : '' }}">
                            Pelayanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeri.index') }}" class="nav-link {{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                            Galeri
                        </a>
                    </li>
                    <li style="margin-left: 8px;">
                        <form action="{{ route('cari') }}" method="GET" style="display: flex; align-items: center; gap: 6px;" role="search">
                            <div style="position: relative;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)" stroke-width="2.2" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <input type="text" name="q" id="navSearch"
                                       value="{{ request('q') }}"
                                       aria-label="Pencarian seluruh website"
                                       style="width: 180px; padding: 7px 12px 7px 34px; border-radius: 20px; border: 1.5px solid rgba(255,255,255,0.35); background: rgba(255,255,255,0.12); color: #ffffff; font-size: 0.85rem; font-family: var(--font-body); outline: none; transition: all 0.2s;"
                                       onfocus="this.style.background='rgba(255,255,255,0.22)'; this.style.borderColor='rgba(255,255,255,0.7)'; this.style.width='210px'"
                                       onblur="this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.35)'; this.style.width='180px'">
                            </div>
                            <button type="submit" style="background: rgba(255,255,255,0.18); border: 1.5px solid rgba(255,255,255,0.3); border-radius: 20px; color: #ffffff; font-size: 0.82rem; padding: 6px 14px; cursor: pointer; font-family: var(--font-body); transition: background 0.2s;" onmouseenter="this.style.background='rgba(255,255,255,0.3)'" onmouseleave="this.style.background='rgba(255,255,255,0.18)'">
                                Cari
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Flash Alerts -->
    @if(session('success') || session('warning') || session('info') || session('error'))
        <div class="container" style="margin-top: 24px;">
            @if(session('success'))
                <div class="alert alert-success">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            @if(session('warning'))
                <div class="alert alert-warning">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    <span>{{ session('warning') }}</span>
                </div>
            @endif
            @if(session('info'))
                <div class="alert alert-info">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    <span>{{ session('info') }}</span>
                </div>
            @endif
        </div>
    @endif

    <!-- Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- =======================================================================
         FOOTER (Kontak Resmi Satgas PPKS UPN "Veteran" Yogyakarta)
         ======================================================================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h5>Kontak & Alamat Resmi</h5>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Jl. Padjajaran, Sleman, Yogyakarta, Indonesia. 55283</span>
                    </div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>081225573747</span>
                    </div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                        <span> <a href="https://instagram.com/satgasppkupnvy" target="_blank" rel="noopener" style="text-decoration: underline;">@satgasppkupnvy</a></span>
                    </div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span> <a href="mailto:satgas.ppks@upnyk.ac.id">satgas.ppks@upnyk.ac.id</a></span>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div>
                    &copy; {{ date('Y') }} Universitas Pembangunan Nasional "Veteran" Yogyakarta.
                </div>
                <div>
                    Kerahasiaan data dan keselamatan pelapor/korban adalah komitmen tertinggi kami.
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Nav JavaScript -->
    <script>
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        if (mobileToggle && navMenu) {
            mobileToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }
    </script>
    @yield('scripts')
</body>
</html>
