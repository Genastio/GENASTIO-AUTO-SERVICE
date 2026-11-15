GENASTIO AUTO SERVICE

Identitas Mahasiswa

- Nama: Genastio Shidqi Dhiaurahman
- NIM: 2457401018
- Kelas: MI24
- Program Studi: D3 Manajemen Informatika

Deskripsi Aplikasi

GENASTIO AUTO SERVICE merupakan aplikasi berbasis web yang dibuat menggunakan Laravel untuk mengelola data kendaraan pelanggan bengkel.

Informasi Project

- Mata Kuliah: Web Development
- Tema: Bengkel
- Database: uts_2457401018
- Tabel: vehicles
- Jumlah Data Seeder: 18 kendaraan

Fitur Aplikasi

1. Dashboard kendaraan.
2. Menampilkan daftar kendaraan.
3. Menambahkan data kendaraan.
4. Melihat detail kendaraan.
5. Mengubah data kendaraan.
6. Menghapus data kendaraan.
7. Validasi input kendaraan.
8. Status kendaraan aktif dan tidak aktif.

Struktur Tabel Vehicles

No| Nama Kolom
1| id
2| plate_number
3| owner_name
4| type
5| brand_model
6| year
7| last_service_at
8| is_active
9| notes
10| mileage_km
11| created_at
12| updated_at

Teknologi

- PHP
- Laravel
- MySQL
- HTML
- CSS
- Bootstrap

Cara Menjalankan Project

1. Clone repository GitHub.
2. Masuk ke folder project.
3. Jalankan "composer install".
4. Salin ".env.example" menjadi ".env".
5. Buat database "uts_2457401018".
6. Atur koneksi database pada file ".env".
7. Jalankan "php artisan key:generate".
8. Jalankan "php artisan migrate --seed".
9. Jalankan "php artisan serve".

Repository GitHub

https://github.com/Genastio/uts-laravel-2457401018