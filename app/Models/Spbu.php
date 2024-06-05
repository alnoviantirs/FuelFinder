<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spbu extends Model
{
    protected $table = 'spbu';
    use HasFactory;

    protected $fillable = [
        'namaspbu',
        'alamat',
        'jam_operasional',
        'jenis_bahan_bakar',
        'telepon',
        'fasilitas',
        'longitude',
        'latitude',
    ];
}
