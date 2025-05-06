@extends('admin.layouts.app') {{-- Adjust this to match your layout --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Pengurus</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.pendiri.update', $pendiri->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nama_pengurus" class="form-label">Nama Pengurus</label>
                            <input type="text" class="form-control @error('nama_pengurus') is-invalid @enderror" 
                                id="nama_pengurus" name="nama_pengurus" value="{{ old('nama_pengurus', $pendiri->nama_pengurus) }}" required>
                            @error('nama_pengurus')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" 
                                id="jabatan" name="jabatan" value="{{ old('jabatan', $pendiri->jabatan) }}" required>
                            @error('jabatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            @if($pendiri->foto)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/pendiri/' . $pendiri->foto) }}" alt="{{ $pendiri->nama_pengurus }}" width="100" class="img-thumbnail">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                                id="foto" name="foto" accept="image/*">
                            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <input type="hidden" name="profil_panti_id" value="{{ $pendiri->profil_panti_id }}">
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection