<div class="container mt-4">
    <h2>Profil Panti Asuhan</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.profil.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Panti</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $profil->nama ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="tentang" class="form-label">Tentang Kami</label>
            <textarea name="tentang" class="form-control" rows="3">{{ old('tentang', $profil->tentang ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea name="visi" class="form-control">{{ old('visi', $profil->visi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea name="misi" class="form-control">{{ old('misi', $profil->misi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $profil->alamat ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $profil->no_telp ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Panti</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $profil->email ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
