<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'id', 'penulis', 'penerbit', 'tahun_terbit', 'judul', 'jumlah_buku', 'jenis_buku',
    ];

    public $timestamps = false;
}
