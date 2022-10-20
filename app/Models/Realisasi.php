<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    use HasFactory;
    protected $table = 'realisasi';

    protected $fillable = [
        'nama_pabrik',
        'lokasi_pabrik',
        'rph',
        'nama_petak',
        'produksi_dkp',
        'nama_pengolah',
        'produksi_mkp',
        'rendemen',
    ];
}
