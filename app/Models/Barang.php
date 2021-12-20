<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='barang';

    protected $fillable=[
        'nama_barang',
        'id_kategori',
        'harga_barang',
        'stok_barang',
        'foto_barang',
        'deskripsi'
    ];

    function kategori(){
        return $this->belongsTo(kategori::class,'id_kategori');
    }
}
