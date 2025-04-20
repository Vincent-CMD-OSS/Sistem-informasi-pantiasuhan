<div class="container mt-4">
    <h2>Daftar Kebutuhan</h2>
    <!-- <a href="{{ route('admin.kebutuhan.create') }}" class="btn btn-success mb-3">Tambah Kebutuhan</a> -->

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <!-- <a href="{{ route('admin.kebutuhan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a> -->
                         
                        <button onclick="showEditForm('{{ $item->id }}')" class="btn btn-warning">Edit</button>

                        <form action="{{ route('admin.kebutuhan.destroy', $item->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

