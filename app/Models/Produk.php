<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'id_jenis_produk'
    ];
}
