<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Edit Layanan - Seruli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logomkablue.png') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar.sidebar')
        <div class="flex-grow-1 p-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="container-fluid" style="max-width: 900px;">

                <form action="{{ route('layanan.update', $layanans->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="namalayanan" class="form-label text-dark fw-normal mb-2">Nama Layanan</label>
                        <div class="position-relative">
                            <input type="text" name="namalayanan" id="namalayanan"
                                class="form-control border-0 rounded-3 py-3 pe-5"
                                placeholder="Masukkan nama layanan disini"
                                value="{{ old('namalayanan', $layanans->namalayanan) }}" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsilayanan" class="form-label text-dark fw-normal mb-2">Deskripsi Layanan</label>
                        <div class="position-relative">
                            <textarea name="deskripsilayanan" id="deskripsilayanan" rows="5" class="form-control border-0 rounded-3 py-3 pe-5"
                                placeholder="Masukkan deskripsi layanan disini" required>{{ old('deskripsilayanan', $layanans->deskripsilayanan) }}</textarea>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary text-white">Simpan Perubahan</button>
                        <a href="{{ route('layanan') }}" class="btn btn-outline-primary">Batal</a>
                    </div>

                </form>
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
