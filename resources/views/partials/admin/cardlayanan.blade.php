@forelse ($layanans as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <a href="{{ route('layanan.show', $item->id) }}" class="text-decoration-none text-dark">
                <div class="card-body text-start">
                    <div>
                        <span class="badge fs-6 bg-primary-subtle text-primary rounded-2 p-3 mb-3">
                            <ion-icon size="large" name="pricetag"></ion-icon>
                        </span>
                    </div>
                    <h5 class="card-title fw-bolder">{{ Str::limit($item->namalayanan, 96) }}</h5>
                    <p class="card-text text-secondary">{{ Str::limit($item->deskripsilayanan, 124) }}</p>

                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-muted">
                            {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}
                        </small>
                    </div>
                </div>

                <div class="card-footer p-3 mt-auto">
                    <div class="d-flex flex-column gap-2">
                        <a href="{{ route('layanan.edit', $item->id) }}"
                            class="btn btn-primary fw-semibold p-2">Edit</a>

                        <form action="{{ route('layanan.destroy', $item->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
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
    <!-- Tampilan jika tidak ada layanan -->
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-lightbulb fs-1 mb-3"></i>
            <h5>Belum Ada Layanan Jurusan</h5>
            <p class="small">Klik tombol "Posting Layanan" di atas untuk menambahkan layanan baru.</p>
        </div>
    </div>
@endforelse

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
