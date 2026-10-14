@forelse ($galeris as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <img src="{{ asset('storage/' . $item->gambargaleri) }}" class="card-img-top"
                style="height: 200px; object-fit: cover;">
            <div class="card-body text-start d-flex flex-column">
                <small class="text-secondary d-inline-flex align-items-center mb-2"><ion-icon name="calendar"
                        class="me-1"></ion-icon>{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                <h5 class="card-title fw-bold">{{ Str::limit($item->judulgaleri, 96) }}</h5>
                <div class="d-flex flex-column mt-auto">
                    <a href="{{ route('guest.detailgaleri', $item->id) }}" class="btn btn-primary p-2 fw-semibold">Baca
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-image fs-1 mb-3"></i>
            <h5>Belum ada galeri</h5>
        </div>
    </div>
@endforelse

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>