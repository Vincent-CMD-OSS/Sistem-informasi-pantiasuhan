<div class="container mt-4">
    <h2>Kebutuhan Panti Asuhan</h2>
    <div class="row">
        @foreach ($kebutuhan as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                        <p class="mb-1"><strong>Kategori:</strong> {{ $item->kategori }}</p>
                        <p><strong>Status:</strong> {{ $item->status }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
