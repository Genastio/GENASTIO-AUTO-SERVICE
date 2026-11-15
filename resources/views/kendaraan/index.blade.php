@extends('layouts.app')

@section('title', 'Dashboard - GENASTIO AUTO SERVICE')

@section('content')

<div class="p-4 mb-4 rounded-4 text-white"
     style="background: linear-gradient(120deg, #173b70, #438de0);">

    <h2 class="fw-bold">Dashboard Bengkel 🔧</h2>

    <p class="mb-0">
        Selamat datang di GENASTIO AUTO SERVICE.
        Kelola data kendaraan pelanggan dengan mudah.
    </p>
</div>

{{-- KARTU STATISTIK --}}
<div class="row g-4 mb-4">

    {{-- TOTAL KENDARAAN --}}
    <div class="col-md-4">
        <a href="{{ route('kendaraan.index') }}"
           class="text-decoration-none text-dark">
            <div class="card p-4 shadow-sm h-100">
                <h6 class="text-muted">🚗 Total Kendaraan</h6>
                <h2 class="fw-bold text-primary">{{ $totalKendaraan }}</h2>
                <small>Kendaraan terdaftar</small>
                <small class="text-primary mt-2">Klik untuk melihat semua →</small>
            </div>
        </a>
    </div>

    {{-- TOTAL MOTOR --}}
    <div class="col-md-4">
        <a href="{{ route('kendaraan.index', ['jenis' => 'Motor']) }}"
           class="text-decoration-none text-dark">
            <div class="card p-4 shadow-sm h-100">
                <h6 class="text-muted">🏍️ Total Motor</h6>
                <h2 class="fw-bold text-success">{{ $totalMotor }}</h2>
                <small>Kendaraan roda dua</small>
                <small class="text-success mt-2">Klik untuk melihat motor →</small>
            </div>
        </a>
    </div>

    {{-- TOTAL MOBIL --}}
    <div class="col-md-4">
        <a href="{{ route('kendaraan.index', ['jenis' => 'Mobil']) }}"
           class="text-decoration-none text-dark">
            <div class="card p-4 shadow-sm h-100">
                <h6 class="text-muted">🚙 Total Mobil</h6>
                <h2 class="fw-bold text-warning">{{ $totalMobil }}</h2>
                <small>Kendaraan roda empat</small>
                <small class="text-warning mt-2">Klik untuk melihat mobil →</small>
            </div>
        </a>
    </div>

</div>

{{-- DAFTAR KENDARAAN --}}
<div class="card p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>
            <h4 class="fw-bold mb-1">📋 Daftar Kendaraan</h4>
            <p class="text-muted mb-0">
                Informasi seluruh kendaraan pelanggan bengkel.
            </p>
        </div>

        <a href="{{ route('kendaraan.create') }}"
           class="btn btn-primary">
            + Tambah Kendaraan
        </a>

    </div>

    {{-- NOTIFIKASI --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABEL --}}
    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nomor Polisi</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis</th>
                    <th>Merek / Model</th>
                    <th>Tahun</th>
                    <th>Kilometer</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($kendaraans as $index => $kendaraan)

                    <tr>
                        <td>{{ $kendaraans->firstItem() + $index }}</td>

                        <td class="fw-bold text-primary">
                            {{ $kendaraan->nomor_polisi }}
                        </td>

                        <td>{{ $kendaraan->nama_pemilik }}</td>

                        <td>{{ $kendaraan->jenis }}</td>

                        <td>
                            {{ $kendaraan->merek }}
                            {{ $kendaraan->model }}
                        </td>

                        <td>{{ $kendaraan->tahun }}</td>

                        <td>
                            {{ number_format($kendaraan->kilometer, 0, ',', '.') }} km
                        </td>

                        <td>
                            @if($kendaraan->status)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Tidak Aktif</span>
                            @endif
                        </td>

                        <td>
                            <div class="d-flex gap-1">

                                <a href="{{ route('kendaraan.show', $kendaraan->id) }}"
                                   class="btn btn-sm btn-info text-white">
                                    Detail
                                </a>

                                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <button type="button"
    class="btn btn-danger btn-sm"
    data-bs-toggle="modal"
    data-bs-target="#hapusModal"
    data-url="{{ route('kendaraan.destroy', $kendaraan->id) }}">
    Hapus
</button>
                            </div>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="9" class="text-center py-5">

                            <h1>🚗</h1>

                            <h5>Belum Ada Data Kendaraan</h5>

                            <p class="text-muted">
                                Silakan tambahkan kendaraan pertama.
                            </p>

                            <a href="{{ route('kendaraan.create') }}"
                               class="btn btn-primary">
                                + Tambah Kendaraan
                            </a>

                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-3">
        {{ $kendaraans->links('pagination::bootstrap-5') }}
    </div>

</div>
<div class="modal fade" id="hapusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Konfirmasi Hapus Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center p-4">
                <h2>⚠️</h2>
                <h5>Yakin ingin menghapus kendaraan ini?</h5>
                <p>Data yang dihapus tidak dapat dikembalikan.</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Batal</button>

                <form id="formHapus" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Ya, Hapus
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
document.querySelectorAll('[data-bs-target="#hapusModal"]').forEach(button => {
    button.addEventListener('click', function () {
        document.getElementById('formHapus').action = this.dataset.url;
    });
});
</script>
@endsection