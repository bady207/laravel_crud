<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_barang','harga','stok','id_merek'];

    protected $visable =  ['id','nama_barang','harga','stok','id_merek'];
}
