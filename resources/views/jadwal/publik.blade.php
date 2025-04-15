<!-- @section('content')
    <h1>Jadwal Berkunjung</h1>

    <h2>Jadwal Operasional Harian</h2>
    <table border="1">
        <tr>
            <th>Hari</th>
            <th>Jam Buka</th>
            <th>Jam Tutup</th>
            <th>Status</th>
        </tr>
        @foreach ($jadwalOperasional as $item)
            <tr>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->jam_buka }}</td>
                <td>{{ $item->jam_tutup }}</td>
                <td>{{ ucfirst($item->status) }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Jadwal Khusus</h2>
    @if (count($jadwalKhusus) > 0)
        <ul>
            @foreach ($jadwalKhusus as $item)
                <li>
                    <strong>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</strong>:
                    {{ $item->status == 'buka' ? 'Buka' : 'Tutup' }}
                    ({{ $item->jam_buka }} - {{ $item->jam_tutup }})<br>
                    <em>{{ $item->keterangan }}</em>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada jadwal khusus.</p>
    @endif
@endsection -->


<h1>Jadwal Operasional</h1>
<ul>
    @foreach($jadwalOperasional as $jadwal)
        <li>{{ $jadwal->hari }}: {{ $jadwal->jam_buka }} - {{ $jadwal->jam_tutup }} ({{ $jadwal->status }})</li>
    @endforeach
</ul>

<h2>Jadwal Khusus</h2>
<ul>
    @foreach($jadwalKhusus as $jadwal)
        <li>{{ $jadwal->tanggal }}: {{ $jadwal->jam_buka }} - {{ $jadwal->jam_tutup }} ({{ $jadwal->status }}) - {{ $jadwal->keterangan }}</li>
    @endforeach
</ul>
