<div
    class="d-flex flex-column shadow-none bg-white p-3 text-primary position-lg-fixed w-100 w-lg-auto vh-lg-100 overflow-y-lg-auto shadow-sm sidebar-admin">

    <div class="d-flex justify-content-between align-items-center mb-lg-4">
        <a href="{{ route('dasbor') }}" class="d-flex align-items-center text-decoration-none px-2">
            <img src="{{ asset('assets/img/logomkablue.png') }}" alt="Logo PT Solusi Koneksi Anda" class="me-1"
                style="max-width: 36px; object-fit: cover;">
            <span class="fs-4 fw-bold text-primary">PT SKA</span>
        </a>

        <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#adminNavbarMenu" aria-controls="adminNavbarMenu" aria-expanded="false">
            <ion-icon name="menu" class="fs-2 text-primary"></ion-icon>
        </button>
    </div>

    <!-- Container Menu di desktop muncul, di hp hilang/collapse -->
    <div class="collapse d-lg-flex flex-column flex-grow-1 mt-3 mt-lg-0" id="adminNavbarMenu">

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="{{ route('dasbor') }}"
                    class="nav-link d-flex align-items-center mb-2 text-primary {{ request()->is('admin/dasbor*') ? 'active text-white' : '' }}"
                    aria-current="page">
                    <ion-icon name="grid" class="fs-5 me-3"></ion-icon>
                    <span>Dasbor</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('layanan') }}"
                    class="nav-link d-flex align-items-center mb-2 text-primary {{ request()->is('admin/layanan*') ? 'active text-white' : '' }}"
                    aria-current="page">
                    <ion-icon name="pricetag" class="fs-5 me-3"></ion-icon>
                    <span>Kelola Layanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('artikel') }}"
                    class="nav-link d-flex align-items-center mb-2 text-primary {{ request()->is('admin/artikel*') ? 'active text-white' : '' }}"
                    aria-current="page">
                    <ion-icon name="newspaper" class="fs-5 me-3"></ion-icon>
                    <span>Kelola Artikel</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('galeri') }}"
                    class="nav-link d-flex align-items-center mb-2 text-primary {{ request()->is('admin/galeri*') ? 'active text-white' : '' }}"
                    aria-current="page">
                    <ion-icon name="images" class="fs-5 me-3"></ion-icon>
                    <span>Kelola Galeri</span>
                </a>
            </li>
        </ul>

        <ul class="nav nav-pills flex-column mt-lg-auto pt-3 pt-lg-0 border-top border-light-subtle border-lg-0">
            <li class="nav-item mt-2">
                <a href="{{ route('profil') }}"
                    class="nav-link d-flex align-items-center mb-2 text-primary {{ request()->is('admin/profil*') || request()->is('admin/ubahprofil*') || request()->is('admin/kelolakatasandi*') || request()->is('admin/ubahkatasandi*') ? 'active text-white' : '' }}"
                    aria-current="page">
                    <ion-icon name="person-circle" class="fs-5 me-3"></ion-icon>
                    <span>Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post"
                    onsubmit="return confirm('Apakah Anda yakin keluar dari akun ini?')">
                    @csrf
                    <button type="submit"
                        class="nav-link d-flex align-items-center text-danger w-100 text-start border-0 bg-transparent">
                        <ion-icon name="log-out" class="fs-5 me-3"></ion-icon>
                        <span>Keluar</span>
                    </button>
                </form>
            </li>
        </ul>

    </div>
</div>

<style>
    @media (min-width: 992px) {
        .sidebar-admin {
            width: 256px !important;
            height: 100vh !important;
            position: fixed !important;
            top: 0;
            left: 0;
            overflow-y: auto;
            flex-shrink: 0;
        }

        .layout-sidebar {
            margin-left: 0 !important;
        }

        @media (min-width: 992px) {
            .layout-sidebar {
                margin-left: 256px !important;
            }
        }
    }
</style>

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
