<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $fillable = [
        'deskripsi_aplikasi',
        'versi_aplikasi',
        'tanggal_dibuat',
        'created_at',
        'updated_at',
    ];
}
 