<div class="container">
    <h2>Daftar Donasi</h2>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- <a id="donasi-btn" href="{{ route('admin.donasi.create') }}">+ Tambah Donasi</a> -->
    <button id="tambah-btn">+ Tambah Donasi</button>


    <table border="1" cellpadding="10" style="margin-top: 15px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penerima</th>
                <th>No. Rekening</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($donasi as $d)
                <tr>
                    <td>{{ $d->donasi_id }}</td>
                    <td>{{ $d->nama_penerima }}</td>
                    <td>{{ $d->no_rek }}</td>
                    <td>
                        <form action="{{ route('admin.donasi.destroy', $d->donasi_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus donasi ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data donasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
