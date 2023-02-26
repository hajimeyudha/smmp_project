<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_penerimaan extends Model
{
    use HasFactory;
    protected $table = 'data_penerimaan';
    protected $primaryKey = 'id_data_penerimaan';
    // public $timestamps = 'false'; //Dipakai kalau gapake timestamps
    // public $incrementing = false; //Dipakai kalau id nya string atau lainnya misal M001

    
}
