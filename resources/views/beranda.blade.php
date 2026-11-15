@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- JUDUL -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">GENASTIO AUTO SERVICE</h1>
        <p class="text-muted fs-5">
            Sistem Informasi Manajemen Bengkel
        </p>
    </div>

    <!-- BANNER UTAMA -->
    <div class="card border-0 shadow-lg mb-5"
         style="background: linear-gradient(135deg, #173b70, #2878d0);
                border-radius: 18px;">

        <div class="card-body text-center text-white p-5">

            <h2 class="fw-bold mb-3">
                Selamat Datang di GENASTIO AUTO SERVICE
            </h2>

            <p class="fs-5 mb-4">
                Kelola data kendaraan pelanggan dengan mudah,
                cepat, dan terstruktur.
            </p>

            <a href="{{ route('kendaraan.index') }}"
               class="btn btn-light btn-lg text-primary fw-bold px-4">
                Lihat Data Kendaraan →
            </a>

        </div>
    </div>

    <!-- KARTU INFORMASI -->
    <div class="row g-4 text-center">

        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-4 h-100">
                <h1>🚗</h1>
                <h5 class="fw-bold">Data Kendaraan</h5>
                <p class="text-muted">
                    Mengelola informasi kendaraan pelanggan.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-4 h-100">
                <h1>🔧</h1>
                <h5 class="fw-bold">Manajemen Bengkel</h5>
                <p class="text-muted">
                    Mengelola informasi kendaraan secara terstruktur.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-4 h-100">
                <h1>📋</h1>
                <h5 class="fw-bold">Informasi Servis</h5>
                <p class="text-muted">
                    Menampilkan informasi kendaraan pelanggan.
                </p>
            </div>
        </div>

    </div>

</div>

@endsection