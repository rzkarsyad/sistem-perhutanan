<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';

    protected $fillable = [
        'produksi_mkp_old',
        'produksi_mkp_now',
        'produksi_mkp_total',
    ];
}
