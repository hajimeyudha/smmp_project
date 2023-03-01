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
        return view('penyaluran', ['ListPenyaluran' => $Data_penyaluran]);
    }

    function createView(){
        return view('penyaluran-create-admin');
    }
}
