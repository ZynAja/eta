<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinta extends Model
{
    use HasFactory;
    protected $fillable = ['stok', 'namatinta','minQ'];
}


