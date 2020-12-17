<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_gudang',
        'id_produk_jadi',
        'qty_produksi'
    ];
}
