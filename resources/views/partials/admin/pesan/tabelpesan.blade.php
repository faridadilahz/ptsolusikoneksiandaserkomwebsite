<div class="card border-0 rounded-4 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesans as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="fw-semibold">{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at->locale('id')->translatedFormat('d M Y H:i') }}</td>
                            <td class="text-center">
                                @if ($item->status == 'belum_dibaca')
                                    <span
                                        class="badge bg-warning-subtle text-warning px-2 py-2 text-dark rounded-pill">Belum
                                        Dibaca</span>
                                @else
                                    <span class="badge bg-primary-subtle text-primary px-2 py-2 rounded-pill">Sudah
                                        Dibaca</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('pesan.show', $item->id) }}"
                                    class="btn btn-sm btn-primary rounded-2 me-1">
                                    Lihat Detail
                                </a>
                                <form action="{{ route('pesan.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-sm btn-outline-danger rounded-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-secondary">
                                <ion-icon name="chatbubbles" class="mb-2 d-block mx-auto"
                                    style="font-size: 36px;"></ion-icon>
                                <span>Belum ada pesan masuk.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
