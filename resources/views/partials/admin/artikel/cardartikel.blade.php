@forelse ($artikels as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <a href="{{ route('artikel.show', $item->id) }}" class="text-decoration-none text-dark">
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
                <div class="card-body text-start">
                    <small
                        class="text-secondary d-inline-flex align-items-center mb-2"><ion-icon name="calendar"
                        class="me-1"></ion-icon>{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                    <h5 class="card-title fw-bold">{{ Str::limit($item->judulartikel, 96) }}</h5>
                    <p class="card-text text-secondary">{{ Str::limit($item->deskripsiartikel, 124) }}</p>
                </div>

                <div class="card-footer p-3 mt-auto">
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-primary fw-semibold p-2">Edit</a>

                        <form action="{{ route('artikel.destroy', $item->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger p-2 w-100">Hapus</button>
                        </form>
                    </div>
                </div>
            </a>
        </div>
    </div>

@empty
    <!-- Tampilan jika tidak ada artikel -->
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum Ada Artikel</h5>
            <p class="small">Klik tombol "Posting Artikel" di atas untuk menambahkan artikel baru.</p>
        </div>
    </div>
@endforelse
