<footer class="bg-primary text-white pt-5 pb-4 px-2">
    <div class="container text-start">
        <div class="row g-4 justify-content-between">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/logoskawhite.png') }}" alt="Logo PT SKA" class="me-2"
                        style="height: 40px; object-fit: contain;">
                    <span class="fs-4 fw-bold text-white">PT SKA</span>
                </div>
                <p class="text-white-50 small mb-3" style="line-height: 1.7; max-width: 340px;">
                    Konsultan IT profesional yang membantu bisnis mengembangkan solusi digital yang efisien, aman, dan
                    scalable untuk mendukung pertumbuhan dan transformasi teknologi Anda.
                </p>
                <div class="d-flex gap-3">
                    <a href="https://www.instagram.com/smkn4kotabogor/" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-instagram" class="fs-5"></ion-icon>
                    </a>
                    <a href="https://web.facebook.com/profile.php?id=100054636630766" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-facebook" class="fs-5"></ion-icon>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=628212262442" target="_blank"
                        class="btn btn-sm btn-outline-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 p-0"
                        style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.1); border: none;">
                        <ion-icon name="logo-whatsapp" class="fs-5"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="col-6 col-md-2 col-lg-2">
                <h6 class="fw-bold text-white mb-3">Informasi Umum</h6>
                <ul class="list-unstyled text-small">
                    <li class="mb-2"><a href="/beranda"
                            class="text-white-50 text-decoration-none hover-white">Beranda</a></li>
                    <li class="mb-2"><a href="/layanan"
                            class="text-white-50 text-decoration-none hover-white">Layanan</a></li>
                    <li class="mb-2"><a href="/artikel"
                            class="text-white-50 text-decoration-none hover-white">Artikel</a></li>
                    <li class="mb-2"><a href="/galeri"
                            class="text-white-50 text-decoration-none hover-white">Galeri</a></li>
                    <li class="mb-2"><a href="/kontak"
                            class="text-white-50 text-decoration-none hover-white">Kontak</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-3 col-lg-3">
                <h6 class="fw-bold text-white mb-3">Layanan Kami</h6>
                <ul class="list-unstyled text-small">
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
