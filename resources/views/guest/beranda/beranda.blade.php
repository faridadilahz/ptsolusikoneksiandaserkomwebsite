<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Beranda - PT Solusi Koneksi Anda</title>
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
    <main style="background-color: #f5f5f5;">
        <div class="d-flex min-vh-100 justify-content-center align-items-center text-white px-3"
            style="background: linear-gradient(130deg, #4274d9 0%, #172a5096 100%), url('{{ asset('assets/img/herobanner.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="fw-bolder fs-lg mb-2 text-white" style="max-width: 720px;">Selamat
                    Datang di Website
                    Resmi PT Solusi Koneksi Anda</h1>
                <p class="text-secondary text-white" style="max-width: 860px;">Kami berpengalaman menangani berbagai
                    proyek website, aplikasi, dan sistem digital untuk klien di Bogor, Jabodetabek, hingga seluruh
                    Indonesia.</p>

                <div class="d-flex flex-column flex-sm-row gap-2">
                    <a href="https://wa.me/628988307081?text=Halo%20Admin%20PT%20Solusi%20Koneksi%20Anda%2C%20saya%20ingin%20berkonsultasi%20mengenai%20pembuatan%2Fpengembangan%20sistem%20IT%20untuk%20bisnis%20saya.%20Boleh%20bantu%20infokan%20alur%20dan%20jadwal%20diskusi%20selengkapnya%3F%20Terima%20kasih."
                        class="btn btn-light fw-semibold text-primary d-inline-flex align-items-center justify-content-center gap-1 px-3 py-2">
                        <span>Konsultasi Sekarang</span>
                        <ion-icon name="arrow-forward"></ion-icon>
                    </a>
                    <a href="{{ route('guest.layanan') }}"
                        class="btn btn-outline-light fw-semibold text-light d-inline-flex align-items-center justify-content-center gap-1 px-3 py-2">
                        <span>Lihat Layanan</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column text-center justify-content-center align-items-center px-3 pt-5 pb-5">
            <div class="container mb-2">
                <img src="{{ asset('assets/img/herobanner.jpg') }}" class="img-fluid rounded-3 mb-4"
                    style="aspect-ratio: 16 / 6; max-width: 720px; width: 100%; height: auto; object-fit: cover;">
                <h1 class="fw-bolder mb-2 text-black">Mempercepat Pertumbuhan Bisnis dengan Teknologi Terkini!</h1>
                <p class="text-secondary">PT Solusi Koneksi Anda didirikan dengan visi untuk
                    menjadi penyedia solusi teknologi terdepan di industri IT. Berawal dari layanan pengembangan
                    perangkat lunak dan website kustom, kami tumbuh menjadi perusahaan teknologi yang menawarkan solusi
                    digital lengkap, mulai dari konsultasi IT, pengembangan aplikasi mobile, keamanan sistem, hingga
                    digital marketing.</p>
            </div>

            <div class="w-100">
                @include('partials.guest.statistic.statistic')
            </div>
        </div>

        <div class="d-flex text-center flex-column justify-content-center align-items-center px-3 py-5">
            <h2 class="fw-bold mb-3">Mengapa PT Solusi Koneksi Anda?</h2>
            <div class="container my-4">
                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card h-100 rounded-3 border-0 py-3 px-3 shadow-sm">
                            <div>
                                <span class="badge fs-6 bg-primary-subtle text-primary rounded-pill p-3 mb-3">
                                    <ion-icon size="large" name="document-text"></ion-icon>
                                </span>
                            </div>
                            <h5 class="card-title fw-bolder">Berlegalitas Resmi</h5>
                            <p class="text-secondary mb-0">Kami adalah perusahaan IT berbadan hukum resmi dengan izin
                                usaha yang jelas, sehingga memberikan rasa aman dan kepercayaan penuh bagi setiap klien.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card h-100 rounded-3 border-0 py-3 px-3 shadow-sm">
                            <div>
                                <span class="badge fs-6 bg-primary-subtle text-primary rounded-pill p-3 mb-3">
                                    <ion-icon size="large" name="ribbon"></ion-icon>
                                </span>
                            </div>
                            <h5 class="card-title fw-bolder">Berpengalaman</h5>
                            <p class="text-secondary mb-0">Berpengalaman menangani berbagai project website, aplikasi,
                                dan sistem digital dari berbagai sektor bisnis dengan standar kerja profesional.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card h-100 rounded-3 border-0 py-3 px-3 shadow-sm">
                            <div>
                                <span class="badge fs-6 bg-primary-subtle text-primary rounded-pill p-3 mb-3">
                                    <ion-icon size="large" name="flash"></ion-icon>
                                </span>
                            </div>
                            <h5 class="card-title fw-bolder">Tepat Waktu & Terjamin</h5>
                            <p class="text-secondary mb-0">Komitmen tinggi dalam menyelesaikan setiap pengerjaan
                                sistem/software secara presisi, terstruktur, dan sesuai dengan deadline yang disepakati.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card h-100 rounded-3 border-0 py-3 px-3 shadow-sm">
                            <div>
                                <span class="badge fs-6 bg-primary-subtle text-primary rounded-pill p-3 mb-3">
                                    <ion-icon size="large" name="construct"></ion-icon>
                                </span>
                            </div>
                            <h5 class="card-title fw-bolder">Teknologi Modern</h5>
                            <p class="text-secondary mb-0">Kami menggunakan teknologi modern dengan standar keamanan
                                tinggi untuk memastikan website, aplikasi, dan sistem bisnis Anda stabil dan aman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-3 py-5">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                    <h2 class="fw-bolder mb-2">Layanan Kami</h2>
                    <p class="text-secondary text-center" style="max-width: 990px;">Kami menyediakan solusi aplikasi
                        bisnis dan sistem digital terintegrasi yang
                        membantu perusahaan, UMKM, dan organisasi mengelola operasional secara efisien, aman, dan
                        modern.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @include('partials.guest.layanan.cardlayanan')
                </div>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="/layanan"
                        class="btn btn-white text-primary d-inline-flex align-items-center justify-content-center gap-1">Lihat
                        semua layanan <ion-icon name="arrow-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-3 py-5">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                    <h2 class="fw-bolder mb-2">Artikel Kami</h2>
                    <p class="text-secondary text-center" style="max-width: 990px;">Dapatkan wawasan terbaru seputar
                        tren teknologi, transformasi digital, dan tips pengembangan sistem untuk mendukung pertumbuhan
                        dan efisiensi bisnis Anda.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @include('partials.guest.artikel.cardartikel')
                </div>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="/artikel"
                        class="btn btn-white text-primary d-inline-flex align-items-center justify-content-center gap-1">Lihat
                        semua artikel <ion-icon name="arrow-forward"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-3 py-5">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                    <h2 class="fw-bolder mb-2">Galeri Kami</h2>
                    <p class="text-secondary text-center" style="max-width: 990px;">Dokumentasi rekam jejak, kolaborasi
                        tim, dan dedikasi kami dalam menghadirkan solusi teknologi berkualitas bagi setiap mitra dan
                        klien.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    @include('partials.guest.galeri.cardgaleri')
                </div>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <a href="/galeri"
                        class="btn btn-white text-primary d-inline-flex align-items-center justify-content-center gap-1">Lihat
                        semua galeri <ion-icon name="arrow-forward"></ion-icon></a>
                </div>
            </div>
        </div>

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
