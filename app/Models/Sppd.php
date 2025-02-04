<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'maksud',
        'tujuan',
        'tanggal_berangkat',
        'tanggal_kembali',
        'ket',
        'surat'
    ];
}
