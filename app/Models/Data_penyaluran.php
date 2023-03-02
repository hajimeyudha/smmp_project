<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data_penyaluran extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data_penyaluran';
    protected $primaryKey = 'id_data_penyaluran';
    protected $fillable = ['tanggal_penyaluran', 'tempo_penyaluran', 'status_penyaluran', 'gas_dipesan', 'keterangan_penyaluran'];
}
