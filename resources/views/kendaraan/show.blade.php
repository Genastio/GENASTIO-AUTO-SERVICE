@extends('layouts.app')

@section('title', 'Detail Kendaraan - GENASTIO AUTO SERVICE')

@section('content')

<div class="card p-4">

    <h3 class="fw-bold mb-2">🚗 Detail Kendaraan</h3>

    <p class="text-muted">
        Informasi lengkap kendaraan pelanggan bengkel.
    </p>

    <hr>

    <div class="row">

        <div class="col-md-6 mb-3">
            <strong>Nomor Polisi</strong>
            <p>{{ $kendaraan->nomor_polisi }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Nama Pemilik</strong>
            <p>{{ $kendaraan->nama_pemilik }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Jenis Kendaraan</strong>
            <p>{{ $kendaraan->jenis }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Merek</strong>
            <p>{{ $kendaraan->merek }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Model</strong>
            <p>{{ $kendaraan->model }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Tahun</strong>
            <p>{{ $kendaraan->tahun }}</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Kilometer</strong>
            <p>{{ number_format($kendaraan->kilometer, 0, ',', '.') }} km</p>
        </div>

        <div class="col-md-6 mb-3">
            <strong>Status</strong>
            <p>
                @if($kendaraan->status)
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-secondary">Tidak Aktif</span>
                @endif
            </p>
        </div>

    </div>

    <hr>

    <div class="d-flex gap-2">

        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}"
           class="btn btn-warning">
            ✏️ Edit Kendaraan
        </a>

        <a href="{{ route('kendaraan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </div>

</div>

@endsection