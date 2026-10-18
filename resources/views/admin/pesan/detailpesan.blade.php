<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Detail Pesan - PT Solusi Koneksi Anda</title>
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
                <div class="mb-3">
                    <a href="{{ route('pesan') }}"
                        class="text-decoration-none d-inline-flex align-items-center text-secondary">
                        <ion-icon name="arrow-back" class="me-1 fs-5"></ion-icon>Kembali
                    </a>
                </div>

                <div class="card border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="border-bottom pb-3 mb-3">
                        <h4 class="fw-bold mb-1">{{ $pesan->nama_lengkap }}</h4>
                        <p class="text-primary mb-1">{{ $pesan->email }}</p>
                        <small
                            class="text-secondary">{{ $pesan->created_at->locale('id')->translatedFormat('l, d F Y - H:i') }}
                            WIB</small>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-semibold text-dark">Isi Pesan:</h6>
                        <p class="text-secondary" style="white-space: pre-line;">{{ $pesan->pesan }}</p>
                    </div>

                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <a href="mailto:{{ $pesan->email }}"
                            class="btn btn-primary fw-semibold d-inline-flex align-items-center justify-content-center">
                            Balas via Email
                        </a>

                        <form action="{{ route('pesan.destroy', $pesan->id) }}" method="POST" class="mb-0 d-flex"
                            onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="btn btn-outline-danger fw-semibold w-100 d-inline-flex align-items-center justify-content-center">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
