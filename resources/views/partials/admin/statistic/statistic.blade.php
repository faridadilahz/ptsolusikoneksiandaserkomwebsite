<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<div class="row g-4">
    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0 shadow-sm py-2">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><ion-icon name="pricetag" class="fs-5"></ion-icon></div>
                <h1 class="card-title text-primary fw-bolder">{{ $totalLayanan }}</h1>
                <p class="text-secondary mb-0">Jumlah Layanan</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0 shadow-sm py-2">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><ion-icon name="newspaper" class="fs-5"></ion-icon></div>
                <h1 class="card-title text-primary fw-bolder">{{ $totalArtikel }}</h1>
                <p class="text-secondary mb-0">Jumlah Artikel</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0 shadow-sm py-2">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><ion-icon name="images" class="fs-5"></ion-icon></div>
                <h1 class="card-title text-primary fw-bolder">{{ $totalGaleri }}</h1>
                <p class="text-secondary mb-0">Jumlah Galeri</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="card card-light h-100 border-0 shadow-sm py-2">
            <div class="card-body">
                <div class="badge bg-primary-subtle text-primary p-2 mb-3"><ion-icon name="pricetag" class="fs-5"></ion-icon></div>
                <h1 class="card-title text-primary fw-bolder">{{ $totalPesan }}</h1>
                <p class="text-secondary mb-0">Jumlah Pesan Masuk</p>
            </div>
        </div>
    </div>
</div>