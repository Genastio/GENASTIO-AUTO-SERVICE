<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nomor_polisi' => 'A 1234 BC', 'nama_pemilik' => 'Andi Saputra', 'jenis' => 'Motor', 'merek' => 'Honda', 'model' => 'Vario 160', 'tahun' => 2023, 'kilometer' => 12000, 'status' => true],
            ['nomor_polisi' => 'A 2345 CD', 'nama_pemilik' => 'Budi Santoso', 'jenis' => 'Mobil', 'merek' => 'Toyota', 'model' => 'Avanza', 'tahun' => 2022, 'kilometer' => 25000, 'status' => true],
            ['nomor_polisi' => 'A 3456 DE', 'nama_pemilik' => 'Citra Amelia', 'jenis' => 'Motor', 'merek' => 'Yamaha', 'model' => 'NMAX', 'tahun' => 2021, 'kilometer' => 30000, 'status' => true],
            ['nomor_polisi' => 'A 4567 EF', 'nama_pemilik' => 'Dedi Kurniawan', 'jenis' => 'Mobil', 'merek' => 'Honda', 'model' => 'Brio', 'tahun' => 2023, 'kilometer' => 15000, 'status' => true],
            ['nomor_polisi' => 'A 5678 FG', 'nama_pemilik' => 'Eka Putri', 'jenis' => 'Motor', 'merek' => 'Honda', 'model' => 'Beat', 'tahun' => 2020, 'kilometer' => 40000, 'status' => true],
            ['nomor_polisi' => 'A 6789 GH', 'nama_pemilik' => 'Fajar Ramadhan', 'jenis' => 'Mobil', 'merek' => 'Mitsubishi', 'model' => 'Xpander', 'tahun' => 2022, 'kilometer' => 28000, 'status' => true],
            ['nomor_polisi' => 'A 7890 HI', 'nama_pemilik' => 'Gina Maharani', 'jenis' => 'Motor', 'merek' => 'Yamaha', 'model' => 'Mio', 'tahun' => 2019, 'kilometer' => 50000, 'status' => false],
            ['nomor_polisi' => 'A 8901 IJ', 'nama_pemilik' => 'Hendra Wijaya', 'jenis' => 'Mobil', 'merek' => 'Suzuki', 'model' => 'Ertiga', 'tahun' => 2021, 'kilometer' => 35000, 'status' => true],
            ['nomor_polisi' => 'A 9012 JK', 'nama_pemilik' => 'Indah Permata', 'jenis' => 'Motor', 'merek' => 'Honda', 'model' => 'Scoopy', 'tahun' => 2022, 'kilometer' => 18000, 'status' => true],
            ['nomor_polisi' => 'A 1122 KL', 'nama_pemilik' => 'Joko Susilo', 'jenis' => 'Mobil', 'merek' => 'Toyota', 'model' => 'Agya', 'tahun' => 2020, 'kilometer' => 45000, 'status' => false],
            ['nomor_polisi' => 'A 2233 LM', 'nama_pemilik' => 'Kiki Ananda', 'jenis' => 'Motor', 'merek' => 'Yamaha', 'model' => 'Aerox', 'tahun' => 2024, 'kilometer' => 5000, 'status' => true],
            ['nomor_polisi' => 'A 3344 MN', 'nama_pemilik' => 'Lukman Hakim', 'jenis' => 'Mobil', 'merek' => 'Daihatsu', 'model' => 'Xenia', 'tahun' => 2019, 'kilometer' => 60000, 'status' => true],
            ['nomor_polisi' => 'A 4455 NO', 'nama_pemilik' => 'Maya Sari', 'jenis' => 'Motor', 'merek' => 'Honda', 'model' => 'PCX', 'tahun' => 2023, 'kilometer' => 10000, 'status' => true],
            ['nomor_polisi' => 'A 5566 OP', 'nama_pemilik' => 'Nanda Pratama', 'jenis' => 'Mobil', 'merek' => 'Honda', 'model' => 'Civic', 'tahun' => 2021, 'kilometer' => 32000, 'status' => true],
            ['nomor_polisi' => 'A 6677 PQ', 'nama_pemilik' => 'Oki Firmansyah', 'jenis' => 'Motor', 'merek' => 'Suzuki', 'model' => 'Satria', 'tahun' => 2020, 'kilometer' => 38000, 'status' => false],
            ['nomor_polisi' => 'A 7788 QR', 'nama_pemilik' => 'Putri Lestari', 'jenis' => 'Mobil', 'merek' => 'Toyota', 'model' => 'Calya', 'tahun' => 2022, 'kilometer' => 22000, 'status' => true],
            ['nomor_polisi' => 'A 8899 RS', 'nama_pemilik' => 'Rizky Maulana', 'jenis' => 'Motor', 'merek' => 'Yamaha', 'model' => 'Fazzio', 'tahun' => 2024, 'kilometer' => 3000, 'status' => true],
            ['nomor_polisi' => 'A 9900 ST', 'nama_pemilik' => 'Sinta Dewi', 'jenis' => 'Mobil', 'merek' => 'Mitsubishi', 'model' => 'Pajero', 'tahun' => 2023, 'kilometer' => 12000, 'status' => true],
        ];

        foreach ($data as $kendaraan) {
            Kendaraan::updateOrCreate(
                ['nomor_polisi' => $kendaraan['nomor_polisi']],
                $kendaraan
            );
        }
    }
}