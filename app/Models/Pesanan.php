<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable =[
        'tanggal_kunjungan',
        'pengunjung_dewasa',
        'pengunjung_anak_anak',
        'total_bayar',
        'persetujuan',
        'id_pemesan',
        'id_tempat_wisata'
    ];
}
