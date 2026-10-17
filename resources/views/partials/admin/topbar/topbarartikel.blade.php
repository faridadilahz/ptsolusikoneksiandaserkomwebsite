<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<header
    class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center bg-white p-3 mb-4 rounded-3 gap-3 shadow-sm">

    <div class="topbar-left">
        <h4 class="fw-bold mb-1">Kelola Artikel</h4>
        <p class="text-secondary mb-0">Tambah, ubah, atau hapus postingan artikel sekolah.</p>
    </div>

    <div class="topbar-right d-flex align-items-center gap-2">
        {{-- Search Bar Simpel --}}
        <form action="{{ url()->current() }}" method="GET" class="search-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-light border-0"
                    placeholder="Cari artikel..." value="{{ request('search') }}">
                <button class="btn btn-light border-0" type="submit">
                    <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                </button>
                @if (request('search'))
                    <a href="{{ url()->current() }}" class="btn btn-light border-0">
                        <i class="fa-solid fa-xmark text-secondary"></i>
                    </a>
                @endif
            </div>
        </form>

        <a href="{{ route('artikel.posting') }}" class="btn btn-primary btn-fab text-nowrap"><i
                class="fa-solid fa-plus me-0 me-lg-2 fa-lg"></i>
            <span class="d-none d-lg-inline">Posting Artikel</span>
        </a>
    </div>
</header>

<style>
    @media (max-width: 991.98px) {

        .topbar-right,
        .search-form {
            width: 100%;
        }

        .btn-fab {
            position: fixed !important;
            bottom: 24px;
            right: 24px;
            z-index: 2000;
            width: 64px;
            height: 64px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
    }

    @media (min-width: 992px) {
        .search-form .input-group {
            min-width: 220px;
        }
    }
</style>
