@forelse ($layanans as $item)
    <div class="col-md-3 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <div class="card-body text-start d-flex flex-column">
                <div>
                    <span class="badge fs-6 bg-primary-subtle text-primary rounded-2 p-3 mb-3">
                        <ion-icon style="font-size: 24px;" name="pricetag"></ion-icon>
                    </span>
                </div>
                <h5 class="card-title fw-bold">{{ Str::limit($item->namalayanan, 96) }}</h5>
                <p class="card-text text-secondary">{{ Str::limit($item->deskripsilayanan, 96) }}</p>
                <div class="mt-auto align-items-start">
                    <a href="{{ route('guest.detaillayanan', $item->id) }}" class="d-inline-flex align-items-center fw-semibold text-decoration-none text-primary">Baca
                        aa<ion-icon name="arrow-forward" class="ms-1"></ion-icon></a>
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
