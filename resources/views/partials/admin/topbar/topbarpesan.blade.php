<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<header class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center bg-white p-3 mb-4 rounded-3 gap-3">

    <div class="topbar-left">
        <h4 class="fw-bold mb-1">Kelola Pesan Masuk</h4>
        <p class="text-secondary mb-0">Pantau, baca, atau hapus pesan.</p>
    </div>

    <div class="topbar-right d-flex align-items-center">
        <form action="{{ url()->current() }}" method="GET" class="search-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control px-3 py-2 bg-light border-0"
                    placeholder="Cari nama atau email..." value="{{ request('search') }}">
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
    </div>

</header>

<style>
    .search-form, 
    .topbar-right {
        width: 100%;
    }

    @media (min-width: 992px) {
        .search-form, 
        .topbar-right {
            width: auto;
        }
        
        .search-form .input-group {
            width: 320px;
        }
    }
</style>