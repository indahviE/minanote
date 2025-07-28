<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'id',
        'siswa_id',
        'guru_id',
        'barang_id',
        'admin_id',
        'tgl_pinjam',
        'tgl_kembali',
        'jml_pinjam',
        'status',
        'entitas_peminjam'
    ];

    public function siswa(){
        return $this->belongsTo(siswa::class, 'siswa_id', 'id');
    }

    public function guru(){
        return $this->belongsTo(guru::class, 'guru_id', 'id');
    }

    public function barang(){
        return $this->belongsTo(barang::class, 'barang_id', 'id');
    }

    public function admin(){
        return $this->belongsTo(admin::class, 'admin_id', 'id');
    }

}
