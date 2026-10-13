@forelse ($artikels as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            @if ($item->gambarartikel)
                    <img src="{{ asset('storage/' . $item->gambarartikel) }}" class="card-img-top"
                        style="height: 200px; object-fit: cover;">
                @else
                    <div class="card-img-top bg-light d-flex flex-column align-items-center justify-content-center text-secondary"
                        style="height: 200px;">
                        <i class="fa-regular fa-image fs-1 mb-2"></i>
                        <small class="fw-regular">Tanpa Gambar</small>
                    </div>
                @endif
            <div class="card-body text-start d-flex flex-column">
                <small class="text-secondary">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                <h5 class="card-title fw-bold">{{ Str::limit($item->judulartikel, 96) }}</h5>
                <p class="card-text text-secondary">{{ Str::limit($item->deskripsiartikel, 196) }}</p>
                <div class="d-flex flex-column mt-auto">
                    <a href="{{ route('guest.detailartikel', $item->id) }}" class="btn btn-primary p-2 fw-semibold">Baca
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum ada artikel</h5>
        </div>
    </div>
@endforelse
