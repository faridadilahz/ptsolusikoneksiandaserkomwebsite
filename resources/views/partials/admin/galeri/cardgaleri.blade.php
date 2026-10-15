@forelse ($galeris as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <a href="{{ route('galeri.show', $item->id) }}" class="text-decoration-none text-dark">
            <img src="{{ asset('storage/' . $item->gambargaleri) }}" class="card-img-top"
                style="height: 200px; object-fit: cover;">
            <div class="card-body text-start">
                <small class="text-secondary d-inline-flex align-items-center mb-2"><ion-icon name="calendar"
                        class="me-1"></ion-icon>{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                <h5 class="card-title fw-bold">{{ Str::limit($item->judulgaleri, 96) }}</h5>
            </div>

            <div class="card-footer p-3 mt-auto">
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-primary fw-semibold p-2">Edit</a>

                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">
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
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <ion-icon name="images" class="mb-2" style="font-size: 36px;"></ion-icon>
            <h5>Belum ada galeri</h5>
            <p class="small">Klik tombol "Posting Galeri" di atas untuk menambahkan galeri baru.</p>
        </div>
    </div>
@endforelse
