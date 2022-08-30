<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris_type extends Model
{
    use HasFactory;

    protected $table = 'inventaris_types';
    protected $fillable = ["kode_barang", "jenis_barang"];
}
