<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ $layanans->namalayanan }} - PT Solusi Koneksi Anda</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoskablue.png') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar.sidebar')

        <div class="flex-grow-1 p-4 px-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="mx-auto">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="d-flex justify-content-between align-items-center w-100 mb-4">
                    <a href="{{ route('layanan') }}"
                        class="text-decoration-none d-inline-flex align-items-center text-secondary">
                        <ion-icon name="arrow-back" class="me-1 fs-5"></ion-icon>Kembali
                    </a>

                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('layanan.edit', ['id' => $layanans->id, 'from' => 'detail']) }}"
                            class="btn btn-primary d-inline-flex align-items-center btn-sm px-2 py-2 rounded-2">
                            <ion-icon name="create" class="me-1 fs-5"></ion-icon><span class="d-none d-sm-inline">Edit
                                Layanan</span>
                        </a>

                        <form action="{{ route('layanan.destroy', $layanans->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-outline-danger d-inline-flex align-items-center btn-sm px-2 py-2 rounded-2">
                                <ion-icon name="trash" class="me-1 fs-5"></ion-icon><span
                                    class="d-none d-sm-inline">Hapus Layanan</span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="d-flex text-start flex-column justify-content-start align-items-start">
                    <div>
                        <span class="badge fs-6 bg-primary-subtle text-primary rounded-2 p-3 mb-3">
                            <ion-icon size="large" name="pricetag"></ion-icon>
                        </span>
                    </div>
                    <h2 class="fw-bold mb-2" style="max-width: 850px;">{{ $layanans->namalayanan }}</h2>
                    <p class="text-secondary mb-3" style="max-width: 850px;">{{ $layanans->deskripsilayanan }}</p>
                    <p class="text-secondary d-inline-flex align-items-center mb-0">
                        <ion-icon name="calendar"
                            class="me-2"></ion-icon>{{ $layanans->created_at->locale('id')->translatedFormat('d F Y') }}
                    </p>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>
