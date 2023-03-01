<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_penyaluran extends Model
{
    use HasFactory;

    protected $table = 'data_penyaluran';
    protected $primaryKey = 'id_data_penyaluran';
    protected $fillable = ['tanggal_penyaluran', 'tempo_penyaluran', 'status_penyaluran', 'gas_dipesan', 'keterangan_penyaluran'];
}
