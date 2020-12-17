<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProduksiDetail extends Model
{
    protected $table = 'produksi_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_produksi',
        'id_produk',
        'qty'
    ];
}
