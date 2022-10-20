<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petak extends Model
{
    use HasFactory;
    protected $table = 'petak';

    protected $fillable = [
        'rph',
        'nama_petak',
        'tahun_tanam',
        'luas_lahan',
        'jenis_bibit',
        'jml_pohon'
    ];
}
