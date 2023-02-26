<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stokgas extends Model
{
    use HasFactory;

    protected $table = 'stokgas';
    protected $primaryKey = 'id_stok';
}
