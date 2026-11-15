<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';

    protected $fillable = [
        'nomor_polisi',
        'nama_pemilik',
        'jenis',
        'merek',
        'model',
        'tahun',
        'kilometer',
        'status',
    ];
}