<div class="container">
    <h2>Tambah Donasi</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.donasi.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_penerima">Nama Penerima:</label><br>
            <input type="text" name="nama_penerima" id="nama_penerima" value="{{ old('nama_penerima') }}" required>
        </div>
        <br>
        <div>
            <label for="no_rek">Nomor Rekening:</label><br>
            <input type="text" name="no_rek" id="no_rek" value="{{ old('no_rek') }}" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <br>
    <!-- <a href="{{ route('admin.donasi.index') }}">← Kembali ke daftar donasi</a> -->
    <a href="#" onclick="kembaliKeDaftar()">← Kembali ke daftar donasi</a>
    
    <script>
        function kembaliKeDaftar() {
            document.getElementById("formEdit").style.display = "none";
            document.getElementById("listDonasi").style.display = "block";
        }
    </script>
</div>
