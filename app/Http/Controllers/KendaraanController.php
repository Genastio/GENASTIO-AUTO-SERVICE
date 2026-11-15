<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    // Menampilkan daftar kendaraan
    public function index(Request $request)
{
    $query = Kendaraan::query();

    if ($request->jenis == 'Motor') {
        $query->where('jenis', 'Motor');
    } elseif ($request->jenis == 'Mobil') {
        $query->where('jenis', 'Mobil');
    }

    $kendaraans = $query->latest()->paginate(10);

    $totalKendaraan = Kendaraan::count();
    $totalMotor = Kendaraan::where('jenis', 'Motor')->count();
    $totalMobil = Kendaraan::where('jenis', 'Mobil')->count();

    return view('kendaraan.index', compact(
        'kendaraans',
        'totalKendaraan',
        'totalMotor',
        'totalMobil'
    ));
}

    // Menampilkan form tambah
    public function create()
    {
        return view('kendaraan.create');
    }

    // Menyimpan kendaraan
    public function store(Request $request)
    {
        $request->validate([
            'nomor_polisi' => 'required|unique:kendaraans,nomor_polisi',
            'nama_pemilik' => 'required',
            'jenis' => 'required',
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required|integer',
            'kilometer' => 'required|integer|min:0',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    // Menampilkan detail
    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    // Menampilkan form edit
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    // Memperbarui kendaraan
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'nomor_polisi' => 'required|unique:kendaraans,nomor_polisi,' . $kendaraan->id,
            'nama_pemilik' => 'required',
            'jenis' => 'required',
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required|integer',
            'kilometer' => 'required|integer|min:0',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil diperbarui!');
    }

    // Menghapus kendaraan
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil dihapus!');
    }
}