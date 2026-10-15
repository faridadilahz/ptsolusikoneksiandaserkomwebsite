<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Kelola Pesan Masuk - PT Solusi Koneksi Anda</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logoskablue.png') }}">
</head>

<body>
    <main class="d-flex flex-column flex-lg-row min-vh-100">
        @include('partials.admin.sidebar.sidebar')

        <div class="flex-grow-1 p-4 layout-sidebar" style="background-color: #f5f5f5;">
            <div class="container-fluid">
                @include('partials.admin.topbar.topbarpesan')

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">No</th>
                                        <th>Nama Pengirim</th>
                                        <th>Email</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th class="text-end pe-4">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pesans as $index => $item)
                                        <tr>
                                            <td class="ps-4">{{ $index + 1 }}</td>
                                            <td class="fw-semibold">{{ $item->nama_lengkap }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->created_at->locale('id')->translatedFormat('d M Y H:i') }}</td>
                                            <td>
                                                @if ($item->status == 'belum_dibaca')
                                                    <span class="badge bg-warning text-dark rounded-pill">Belum Dibaca</span>
                                                @else
                                                    <span class="badge bg-primary rounded-pill">Sudah Dibaca</span>
                                                @endif
                                            </td>
                                            <td class="text-end pe-4">
                                                <a href="{{ route('pesan.show', $item->id) }}" class="btn btn-sm btn-primary rounded-2 me-1">
                                                    Lihat Detail
                                                </a>
                                                <form action="{{ route('pesan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-2">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4 text-secondary">Belum ada pesan masuk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>