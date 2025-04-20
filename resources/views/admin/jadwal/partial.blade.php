<h1>Jadwal Operasional Harian</h1>

<form method="POST" action="{{ route('admin.operasional.update') }}">
    @csrf
    <table border="1">
        <tr>
            <th>Hari</th>
            <th>Jam Buka</th>
            <th>Jam Tutup</th>
            <th>Status</th>
        </tr>
        @foreach ($jadwalOperasional as $item)
            <tr>
                <td>
                    <input type="hidden" name="hari[]" value="{{ $item->hari }}">
                    {{ $item->hari }}
                </td>
                <td><input type="time" name="jam_buka[]" value="{{ $item->jam_buka }}"></td>
                <td><input type="time" name="jam_tutup[]" value="{{ $item->jam_tutup }}"></td>
                <td>
                    <select name="status[]">
                        <option value="buka" {{ $item->status == 'buka' ? 'selected' : '' }}>Buka</option>
                        <option value="tutup" {{ $item->status == 'tutup' ? 'selected' : '' }}>Tutup</option>
                    </select>
                </td>
            </tr>
        @endforeach
    </table>
    <button type="submit">Simpan Perubahan</button>
</form>

<hr>

<h2>Jadwal Khusus</h2>
<form method="POST" action="{{ route('admin.operasional.khusus.store') }}">
    @csrf
    <input type="date" name="tanggal" required>
    <input type="time" name="jam_buka" required>
    <input type="time" name="jam_tutup" required>
    <select name="status">
        <option value="buka">Buka</option>
        <option value="tutup">Tutup</option>
    </select>
    <textarea name="keterangan" placeholder="Keterangan (opsional)"></textarea>
    <button type="submit">Tambah Jadwal Khusus</button>
</form>

<ul>
@foreach ($jadwalKhusus as $khusus)
    <li>
        {{ \Carbon\Carbon::parse($khusus->tanggal)->format('d M Y') }}:
        {{ $khusus->status == 'buka' ? 'Buka' : 'Tutup' }} ({{ $khusus->jam_buka }} - {{ $khusus->jam_tutup }})
        - {{ $khusus->keterangan }}
        <form action="{{ route('admin.operasional.khusus.destroy', $khusus->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
