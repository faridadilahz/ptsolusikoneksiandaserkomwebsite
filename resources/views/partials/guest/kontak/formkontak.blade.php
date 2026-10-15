<div class="card border-0 rounded-4 p-4 p-lg-4 bg-white mx-auto" style="max-width: 720px;">
    <div class="mb-4 text-center">
        <h3 class="fw-bold text-dark mb-2">Punya Pertanyaan? Hubungi Kami</h3>
        <p class="text-secondary mb-0">Hubungi tim PT Solusi Koneksi Anda langsung melalui formulir di bawah ini.</p>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
            <div class="d-flex align-items-center">
                <ion-icon name="checkmark-circle" class="me-2 fs-4"></ion-icon>
                <div>{{ session('success') }}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('kontak.kirim') }}" method="POST">
        @csrf

        <div class="mb-3 text-start">
            <label for="nama_lengkap" class="form-label text-dark fw-semibold">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" 
                class="form-control rounded-3 py-3 px-3 border-light-subtle"
                placeholder="Masukkan nama lengkap Anda" value="{{ old('nama_lengkap') }}" required>
        </div>

        <div class="mb-3 text-start">
            <label for="email" class="form-label text-dark fw-semibold">Alamat Email</label>
            <input type="email" name="email" id="email" 
                class="form-control rounded-3 py-3 px-3 border-light-subtle"
                placeholder="contoh@gmail.com" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4 text-start">
            <label for="pesan" class="form-label text-dark fw-semibold">Pesan</label>
            <textarea name="pesan" id="pesan" rows="4" 
                class="form-control rounded-3 py-3 px-3 border-light-subtle"
                placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." required>{{ old('pesan') }}</textarea>
        </div>

        <div class="text-start">
            <button type="submit" class="btn btn-primary fw-semibold px-3 py-2 rounded-3 d-inline-flex align-items-center shadow-sm">
                <span>Kirim Pesan</span>
                <ion-icon name="paper-plane" class="ms-2"></ion-icon>
            </button>
        </div>
    </form>
</div>