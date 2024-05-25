<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_merek'];

    protected $visable = ['id','nama_merek'];
}
