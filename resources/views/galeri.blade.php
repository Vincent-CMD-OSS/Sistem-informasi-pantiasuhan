<h1>Galeri Kegiatan</h1>
@foreach ($kegiatan as $item)
    <div>
        <h3>{{ $item->nama_kegiatan }}</h3>
        <img src="{{ asset($item->gambar_utama) }}" alt="" style="max-width:300px;">
        <p><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d M Y') }}</p>
        <p>{{ $item->deskripsi }}</p>
    </div>
@endforeach
