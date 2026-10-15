<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Kelola Pesan Masuk - PT Solusi Koneksi Anda</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoskablue.png') }}">
</head>

<body>
    <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar.sidebar')

        <div class="flex-grow-1 p-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="container-fluid">
                @include('partials.admin.topbar.topbarpesan')

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @include('partials.admin.pesan.tabelpesan')

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>