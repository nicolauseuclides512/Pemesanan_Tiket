<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tempat_wisata',
        'harga_tiket'
    ];
}
