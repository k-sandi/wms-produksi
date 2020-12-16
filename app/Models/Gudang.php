<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    // protected $keyType = 'string';
    // public $incrementing = false;
    protected $table = 'gudang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];

}
