<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data_penerimaan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_penerimaan';
    protected $primaryKey = 'id_data_penerimaan';
    protected $fillable = ['status_penerimaan', 'bulan_penerimaan', 'minggu_1', 'minggu_2', 'minggu_3', 'minggu_4'];
// public $timestamps = 'false'; //Dipakai kalau gapake timestamps
// public $incrementing = false; //Dipakai kalau id nya string atau lainnya misal M001


}