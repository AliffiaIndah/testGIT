<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi_toko extends Model
{
    protected $table = 'lokasi_toko';

    protected $fillable = [
        'barcode',
        'nama_toko',
        'latitude',
        'longitude',
        'accuracy'

    ];
}
