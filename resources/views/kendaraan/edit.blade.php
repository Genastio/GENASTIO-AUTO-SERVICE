@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h2 class="fw-bold text-primary">Edit Data Kendaraan</h2>
        <p class="text-muted">Perbarui informasi kendaraan bengkel.</p>
    </div>

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0">Formulir Edit Kendaraan</h5>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nomor Polisi</label>
                    <input type="text" name="nomor_polisi"
                        class="form-control"
                        value="{{ old('nomor_polisi', $kendaraan->nomor_polisi) }}">
                    @error('nomor_polisi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik"
                        class="form-control"
                        value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}">
                    @error('nama_pemilik')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Jenis Kendaraan</label>
                    <select name="jenis" class="form-select">
                        <option value="Motor" {{ old('jenis', $kendaraan->jenis) == 'Motor' ? 'selected' : '' }}>Motor</option>
                        <option value="Mobil" {{ old('jenis', $kendaraan->jenis) == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Merek</label>
                    <input type="text" name="merek" class="form-control"
                        value="{{ old('merek', $kendaraan->merek) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Model</label>
                    <input type="text" name="model" class="form-control"
                        value="{{ old('model', $kendaraan->model) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Tahun</label>
                    <input type="number" name="tahun" class="form-control"
                        value="{{ old('tahun', $kendaraan->tahun) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Kilometer</label>
                    <input type="number" name="kilometer" class="form-control"
                        value="{{ old('kilometer', $kendaraan->kilometer) }}">
                </div>

                <div class="form-check mb-4">
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1"
                        class="form-check-input" id="status"
                        {{ old('status', $kendaraan->status) ? 'checked' : '' }}>
                    <label class="form-check-label fw-semibold" for="status">
                        Kendaraan Aktif
                    </label>
                </div>

                <hr>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('kendaraan.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <a href="{{ route('kendaraan.index') }}"
                       class="btn btn-light border">
                        Batal
                    </a>

                    <button type="submit" class="btn btn-primary px-4">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection