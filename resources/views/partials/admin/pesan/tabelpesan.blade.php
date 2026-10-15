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
                                <a href="{{ route('admin.pesan.show', $item->id) }}"
                                    class="btn btn-sm btn-primary rounded-2 me-1">
                                    Lihat Detail
                                </a>
                                <form action="{{ route('admin.pesan.destroy', $item->id) }}" method="POST" class="d-inline"
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
                                <ion-icon name="mail-unread" class="mb-2 d-block mx-auto" style="font-size: 36px;"></ion-icon>
                                <span>Belum ada pesan masuk.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>