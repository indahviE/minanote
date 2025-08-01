<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

     protected $table = 'barang';

    protected $fillable = [
        'id',
        'nama_brg',
        'foto',
        'stock',
        'jml_peminjam',
        'kelayakan',
        'deskripsi'
    ];
}
