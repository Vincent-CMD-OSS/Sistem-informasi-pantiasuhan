@extends('layouts.app')

@section('title', 'Pengenalan')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Tentang Panti Asuhan Kami</h1>
        <p class="lead text-muted">Menjadi tempat bernaung penuh kasih sejak 1995</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Awal Berdiri</h5>
                    <p class="card-text">
                        Panti Asuhan kami didirikan pada tahun 1995 dengan tujuan mulia untuk memberikan perlindungan, kasih sayang, dan pendidikan
                        kepada anak-anak yatim dan kurang mampu. Berawal dari satu rumah kecil, kami bertekad menciptakan lingkungan yang aman dan penuh cinta bagi anak-anak.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Perkembangan dan Pelayanan</h5>
                    <p class="card-text">
                        Seiring waktu, fasilitas dan layanan kami terus berkembang. Kami tidak hanya menyediakan kebutuhan dasar seperti makanan dan tempat tinggal,
                        tetapi juga pendidikan formal, bimbingan rohani, serta pelatihan keterampilan untuk mempersiapkan anak-anak menghadapi masa depan.
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Komitmen Kami</h5>
                    <p class="card-text">
                        Dengan menjunjung tinggi nilai kasih sayang, tanggung jawab, dan keikhlasan, kami berkomitmen untuk terus menjadi tempat terbaik bagi anak-anak
                        yang membutuhkan. Semua ini tidak terlepas dari dukungan para donatur, relawan, dan masyarakat yang selalu setia bersama kami dalam misi kemanusiaan ini.
                    </p>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ url('/') }}" class="text-decoration-none text-secondary">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection