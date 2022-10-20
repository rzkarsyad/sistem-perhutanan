<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi';

    protected $fillable = [
        'rph',
        'nama_petak',
        'nama_petani',
        'bulan',
        'tahun',
        'produksi_dkp',
    ];
}
