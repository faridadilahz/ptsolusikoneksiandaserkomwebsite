<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Artikel - PT Solusi Koneksi Anda</title>
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
        @include('partials.guest.navbar.navbar')
    </header>
    <main class="mt-5 pt-6" style="background-color: #f5f5f5;">
        <div class="px-3 px-md-4 py-5">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center">

                    <div class="col-12 col-lg-6 text-center text-lg-start">
                        <h2 class="fw-bolder mb-2">Kami Siap Membantu</h2>
                        <p class="text-secondary mb-4 mx-auto mx-lg-0" style="max-width: 500px;">
                            Ceritakan sedikit tentang kebutuhan atau kendala yang sedang Anda hadapi melalui formulir di
                            bawah ini. Kami akan menganalisisnya dan kembali dengan solusi terbaik untuk Anda.
                        </p>

                        <div class="d-flex flex-column gap-3 align-items-center align-items-lg-start">
                            <div class="d-flex gap-2 align-items-center">
                                <span
                                    class="badge bg-primary-subtle text-primary rounded-circle p-2 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <ion-icon name="mail" class="fs-6"></ion-icon>
                                </span>
                                <span class="text-primary text-start text-break">ptsolusikoneksianda@gmail.com</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <span
                                    class="badge bg-primary-subtle text-primary rounded-circle p-2 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <ion-icon name="call" class="fs-6"></ion-icon>
                                </span>
                                <span class="text-primary text-start">(+62) 898 8307 081</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        @include('partials.guest.kontak.formkontak')
                    </div>

                </div>
            </div>
        </div>

        <div class="px-3 px-md-4 py-5">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center flex-column-reverse flex-lg-row">

                    <div class="col-12 col-lg-6">
                        @include('partials.guest.lokasi.peta')
                    </div>

                    <div class="col-12 col-lg-6 text-center text-lg-start">
                        <h2 class="fw-bolder mb-2">Temukan Kantor Kami</h2>
                        <p class="text-secondary mb-4 mx-auto mx-lg-0" style="max-width: 500px;">
                            Kunjungi kantor operasional PT Solusi Koneksi Anda untuk diskusi dan konsultasi proyek IT
                            secara langsung bersama tim ahli kami.
                        </p>

                        <div class="d-flex flex-column gap-3 align-items-center align-items-lg-start">
                            <div class="d-flex gap-2 align-items-center">
                                <span
                                    class="badge bg-primary-subtle text-primary rounded-circle p-2 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <ion-icon name="location" class="fs-6"></ion-icon>
                                </span>
                                <span class="text-primary text-start">Jl. Raya Pajajaran No.88f</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <span
                                    class="badge bg-primary-subtle text-primary rounded-circle p-2 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <ion-icon name="time" class="fs-6"></ion-icon>
                                </span>
                                <span class="text-primary text-start">Senin - Jumat, 09.00 - 17.00 WIB</span>
                            </div>

                            <div class="d-flex gap-2 align-items-center">
                                <span
                                    class="badge bg-primary-subtle text-primary rounded-circle p-2 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                    <ion-icon name="navigate" class="fs-6"></ion-icon>
                                </span>
                                <a href="https://maps.app.goo.gl/eZNxgwpYaqAnGkWs9" target="_blank"
                                    class="text-primary d-inline-flex align-items-center text-decoration-none">Buka di
                                    Google Maps<ion-icon name="arrow-forward" class="fs-6 ms-1"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

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