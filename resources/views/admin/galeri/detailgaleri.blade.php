<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ $galeris->judulgaleri }} - PT Solusi Koneksi Anda</title>
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
                    <a href="{{ route('galeri') }}"
                        class="text-decoration-none d-inline-flex align-items-center text-secondary">
                        <ion-icon name="arrow-back" class="me-1 fs-5"></ion-icon>Kembali
                    </a>

                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('galeri.edit', ['id' => $galeris->id, 'from' => 'detail']) }}"
                            class="btn btn-primary d-inline-flex align-items-center btn-sm px-2 py-2 rounded-2">
                            <ion-icon name="create" class="me-1 fs-5"></ion-icon><span class="d-none d-sm-inline">Edit
                                Galeri</span>
                        </a>

                        <form action="{{ route('galeri.destroy', $galeris->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-outline-danger d-inline-flex align-items-center btn-sm px-2 py-2 rounded-2">
                                <ion-icon name="trash" class="me-1 fs-5"></ion-icon><span
                                    class="d-none d-sm-inline">Hapus Galeri</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="d-flex text-center flex-column justify-content-center align-items-center">

                    <p class="text-secondary mb-4"><i
                            class="fa-regular fa-calendar me-2"></i>{{ $galeris->created_at->locale('id')->translatedFormat('d F Y') }}
                    </p>
                    <h2 class="fw-bold mb-4" style="max-width: 850px;">{{ $galeris->judulgaleri }}</h2>
                    <img src="{{ asset('storage/' . $galeris->gambargaleri) }}" alt=""
                        class="rounded-3 mb-3 img-fluid" style="max-width: 850px; width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
