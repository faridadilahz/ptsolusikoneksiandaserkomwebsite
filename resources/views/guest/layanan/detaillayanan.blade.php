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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoskablue.png') }}">
</head>

<body>
    <header>
        @include('partials.guest.navbar.navbar')
    </header>
    <main class="mt-5 pt-6">
        <div class="d-flex text-center flex-column justify-content-center align-items-center px-5 py-5">
            <div>
                <span class="badge fs-6 bg-primary-subtle text-primary rounded-2 p-3 mb-3">
                    <ion-icon size="large" name="pricetag"></ion-icon>
                </span>
            </div>
            <h2 class="fw-bold mb-1">{{ $layanans->namalayanan }}</h2>
            <img src="{{ asset('storage/' . $layanans->gambarlayanan) }}" alt="" class="rounded-3 mb-3"
                style="max-width: 850px;">
            <p class="text-secondary" style="max-width: 850px;">{{ $layanans->deskripsilayanan }}</p>
            <div>
                <button onclick="history.back()" class="btn btn-outline-primary px-4 py-2 rounded-3">
                    <i class="fa-solid fa-arrow-left me-2"></i>Kembali
                </button>
            </div>
        </div>
        </div>

        <div class="container mt-5 text-center px-4">
            <img src="{{ asset('assets/img/dottedmap.png') }}" class="img-fluid mb-4"
                style="max-width: 1080px; width: 100%; height: auto; object-fit: cover; 
                -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 30%, rgba(0,0,0,0) 100%); 
                mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 30%, rgba(0,0,0,0) 100%);">
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-4 py-5">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    @include('partials.guest.kontak.kontak')
                </div>
            </div>
        </div>

    </main>
    <footer>
        @include('partials.guest.footer.footer')
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
