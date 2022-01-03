<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table='keranjang';
    protected $guarded = ['id'];

    protected $fillable=[
        'jumlah_barang',
        'id_user',
        'id_barang'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id', 'id_user');
    }


    public function barang()
    {
        return $this->HasOne(Barang::class, 'id','id_barang');
    }


}
