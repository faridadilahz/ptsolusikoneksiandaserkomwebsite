<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Masuk - PT Solusi Koneksi Anda</title>
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
    <main>
        <div class="d-flex min-vh-100 justify-content-center align-items-center text-white"
            style="background: linear-gradient(130deg, #4274d9 0%, #172a5096 100%), url('{{ asset('assets/img/herobanner.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-5">
                        <div class="card h-100 border-0 px-3 py-4">
                            <div class="text-center">
                                <h3 class="card-title fw-bold">Masuk</h3>
                                <p class="text-secondary">Masuk ke Admin PT Solusi Koneksi Anda</p>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger py-2 small mb-3">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <form action="/login" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold text-secondary small">Alamat
                                        Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Alamat Email" required autofocus />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label fw-semibold text-secondary small">
                                        Kata Sandi</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Masukkan Kata Sandi" required autofocus />
                                </div>

                                <button type="submit"
                                    class="btn btn-primary text-white w-100 fw-semibold mb-2 p-2">Masuk</button>

                            </form>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/beranda"
                                    class="btn btn-white text-secondary d-inline-flex align-items-center justify-content-center gap-1"><ion-icon name="arrow-back"></ion-icon> Kembali ke Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
