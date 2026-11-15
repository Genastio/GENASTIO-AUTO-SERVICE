@extends('layouts.app')

@section('title', 'Tambah Kendaraan - GENASTIO AUTO SERVICE')

@section('content')

<div class="card p-4">

    <div class="mb-4">
        <h3 class="fw-bold">🚗 Tambah Kendaraan</h3>
        <p class="text-muted">Masukkan informasi kendaraan pelanggan bengkel.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali data:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Nomor Polisi</label>
                <input type="text" name="nomor_polisi"
                    class="form-control"
                    placeholder="Contoh: A 1234 BC"
                    value="{{ old('nomor_polisi') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" name="nama_pemilik"
                    class="form-control"
                    placeholder="Nama pemilik kendaraan"
                    value="{{ old('nama_pemilik') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Jenis Kendaraan</label>
                <select name="jenis" class="form-select" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Motor" {{ old('jenis') == 'Motor' ? 'selected' : '' }}>Motor</option>
                    <option value="Mobil" {{ old('jenis') == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Merek</label>
                <input type="text" name="merek"
                    class="form-control"
                    placeholder="Contoh: Honda"
                    value="{{ old('merek') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Model Kendaraan</label>
                <input type="text" name="model"
                    class="form-control"
                    placeholder="Contoh: Beat / Avanza"
                    value="{{ old('model') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Tahun Kendaraan</label>
                <input type="number" name="tahun"
                    class="form-control"
                    placeholder="Contoh: 2022"
                    value="{{ old('tahun') }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Kilometer</label>
                <input type="number" name="kilometer"
                    class="form-control"
                    placeholder="Contoh: 15000"
                    value="{{ old('kilometer', 0) }}" min="0" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Status Kendaraan</label>

                <input type="hidden" name="status" value="0">

                <div class="form-check mt-2">
                    <input type="checkbox"
                        name="status"
                        value="1"
                        class="form-check-input"
                        id="status"
                        {{ old('status', '1') == '1' ? 'checked' : '' }}>

                    <label class="form-check-label" for="status">
                        Kendaraan Aktif
                    </label>
                </div>
            </div>

        </div>

        <hr>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                💾 Simpan Kendaraan
            </button>

            <a href="{{ route('kendaraan.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>
        </div>

    </form>

</div>

@endsection