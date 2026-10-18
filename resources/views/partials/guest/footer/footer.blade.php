<footer class="bg-primary text-white pt-5 pb-4 px-2">
    <div class="container text-start">
        <div class="row g-4 justify-content-between">

            <div class="col-12 col-md-5 col-lg-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/logoskawhite.png') }}" alt="Logo PT SKA" class="me-2"
                        style="height: 40px; object-fit: contain;">
                    <span class="fs-4 fw-bold text-white">PT SKA</span>
                </div>
                <p class="text-white-50 small mb-3" style="line-height: 1.7; max-width: 360px;">
                    Konsultan IT profesional yang membantu bisnis mengembangkan solusi digital yang efisien, aman, dan
                    scalable untuk mendukung pertumbuhan dan transformasi teknologi Anda.
                </p>
                <div class="d-flex gap-3 mb-2">
                    <a href="https://www.instagram.com/ptsolusikoneksianda/" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-instagram" class="fs-5"></ion-icon>
                    </a>
                    <a href="https://www.facebook.com/bnsp.official" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-facebook" class="fs-5"></ion-icon>
                    </a>
                    <a href="https://wa.me/628988307081" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-whatsapp" class="fs-5"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-7 col-lg-6 offset-lg-1">
                <div class="row g-4 justify-content-md-end">

                    <div class="col-6 col-md-5 col-lg-5">
                        <h6 class="fw-bold text-white mb-3">Informasi Umum</h6>
                        <ul class="list-unstyled text-small mb-0">
                            <li class="mb-2"><a href="{{ route('guest.beranda') }}"
                                    class="text-white-50 text-decoration-none hover-white">Beranda</a></li>
                            <li class="mb-2"><a href="{{ route('guest.layanan') }}"
                                    class="text-white-50 text-decoration-none hover-white">Layanan</a></li>
                            <li class="mb-2"><a href="{{ route('guest.artikel') }}"
                                    class="text-white-50 text-decoration-none hover-white">Artikel</a></li>
                            <li class="mb-2"><a href="{{ route('guest.galeri') }}"
                                    class="text-white-50 text-decoration-none hover-white">Galeri</a></li>
                            <li class="mb-2"><a href="{{ route('guest.kontak') }}"
                                    class="text-white-50 text-decoration-none hover-white">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-6 col-lg-6">
                        <h6 class="fw-bold text-white mb-3">Layanan Kami</h6>
                        <ul class="list-unstyled text-small mb-0">
                            @if (isset($footerLayanans) && $footerLayanans->count() > 0)
                                @foreach ($footerLayanans as $item)
                                    <li class="mb-2">
                                        <a href="{{ route('guest.detaillayanan', $item->id) }}"
                                            class="text-white-50 text-decoration-none hover-white">
                                            {{ $item->namalayanan }}
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="mb-2"><span class="text-white-50">Belum ada layanan</span></li>
                            @endif
                        </ul>
                    </div>

                </div>
            </div>

        </div>

        <div
            class="border-top border-white mt-4 pt-4 text-center text-md-start d-flex flex-column flex-md-row justify-content-between align-items-center opacity-50">
            <p class="small mb-0 text-white">&copy; {{ date('Y') }} PT Solusi Koneksi Anda. Hak Cipta Dilindungi
                Undang-Undang.</p>
        </div>
    </div>
</footer>

<style>
    .hover-white:hover {
        color: #ffffff !important;
        transition: color 0.2s ease-in-out;
    }
</style>

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>