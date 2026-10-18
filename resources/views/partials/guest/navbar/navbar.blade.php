<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top z-3 p-3 px-0 px-lg-5">
    <div class="container-fluid position-relative">

        <a href="/beranda" class="navbar-brand d-flex align-items-center text-decoration-none me-0">
            <img src="{{ asset('assets/img/logoskawhite.png') }}" style="max-width: 40px; object-fit: cover;">
            <span class="ms-2 fw-bold mb-0 text-white">PT SKA</span>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-between align-items-center mt-3 mt-lg-0" id="navbarNav">

            <ul
                class="navbar-nav position-lg-absolute start-lg-50 translate-middle-lg-x mx-auto text-center mb-3 mb-lg-0">
                <li class="nav-item me-lg-4">
                    <a href="/beranda"
                        class="nav-link {{ request()->is('beranda*') || request()->is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="nav-item me-lg-4">
                    <a href="/layanan" class="nav-link {{ request()->is('layanan*') ? 'active' : '' }}">Layanan</a>
                </li>
                <li class="nav-item me-lg-4">
                    <a href="/artikel" class="nav-link {{ request()->is('artikel*') ? 'active' : '' }}">Artikel</a>
                </li>
                <li class="nav-item me-lg-4">
                    <a href="/galeri" class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a href="/kontak" class="nav-link {{ request()->is('kontak*') ? 'active' : '' }}">Kontak</a>
                </li>
            </ul>

            <div class="text-center ms-lg-auto pt-2 pt-lg-0">
                <a href="https://wa.me/628988307081?text=Halo%20Admin%20PT%20Solusi%20Koneksi%20Anda%2C%20saya%20ingin%20berkonsultasi%20mengenai%20pembuatan%2Fpengembangan%20sistem%20IT%20untuk%20bisnis%20saya.%20Boleh%20bantu%20infokan%20alur%20dan%20jadwal%20diskusi%20selengkapnya%3F%20Terima%20kasih." target="_blank"
                    class="btn btn-light fw-semibold text-primary text-nowrap d-inline-flex align-items-center justify-content-center w-auto w-lg-100">
                    <span>Konsultasi Sekarang</span>
                    <ion-icon name="logo-whatsapp" class="ms-2 fs-5"></ion-icon>
                </a>
            </div>

        </div>

    </div>
</nav>

<style>
    @media (min-width: 992px) {
        .position-lg-absolute {
            position: absolute !important;
        }

        .start-lg-50 {
            left: 50% !important;
        }

        .translate-middle-lg-x {
            transform: translateX(-50%) !important;
        }
    }
</style>
