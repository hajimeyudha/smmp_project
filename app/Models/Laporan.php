<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $fillable = ['tanggal_laporan', 'uang_masuk', 'uang_keluar', 'saldo', 'keterangan_laporan', 'nota_laporan', 'id_user'];
}
