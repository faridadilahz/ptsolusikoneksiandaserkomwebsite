@forelse ($layanans as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <div class="card-body text-start d-flex flex-column">
                <div>
                    <span class="badge fs-6 bg-primary-subtle text-primary rounded-2 p-3 mb-3">
                        <ion-icon style="font-size: 24px;" name="pricetag"></ion-icon>
                    </span>
                </div>
                <h5 class="card-title fw-bold">{{ Str::limit($item->namalayanan, 96) }}</h5>
                <p class="card-text text-secondary">{{ Str::limit($item->deskripsilayanan, 196) }}</p>
                <div class="d-flex flex-column mt-auto">
                    <a href="{{ route('guest.detaillayanan', $item->id) }}" class="btn btn-primary p-2 fw-semibold">Baca
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-lightbulb fs-1 mb-3"></i>
            <h5>Belum ada layanan</h5>
        </div>
    </div>
@endforelse

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
