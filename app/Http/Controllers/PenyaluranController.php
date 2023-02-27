<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyaluran;
use App\Models\Data_penyaluran;
class PenyaluranController extends Controller
{
    function index(){
        $Penyaluran = Penyaluran::all();
        $Data_penyaluran = Data_penyaluran::all();
        dd($Data_penyaluran);
        return view('penyaluran');
    }
}
