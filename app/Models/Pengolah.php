<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengolah extends Model
{
    use HasFactory;
    protected $table = 'pengolah';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
}
