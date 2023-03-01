<?php

namespace App\Http\Controllers;

use App\Models\Penyaluran;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Data_penyaluran;
use Illuminate\Support\Facades\DB;

class PenyaluranController extends Controller
{
    protected $PenyaluranModel;
    protected $Data_penyaluranModel;

    function __construct(){
        // Eloquent
        $this->PenyaluranModel = Penyaluran::all();
        $this->Data_penyaluranModel = Data_penyaluran::cursorPaginate(10);
    }
    
    function index(){
        //menampilkan view penyaluran dengan mengirimkan data list penyaluran
        return view('penyaluran.penyaluran', ['ListPenyaluran' => $this->Data_penyaluranModel]);
        
        //Tambah Data Eloquent
        //     $time = strtotime('1/1/2003');
        //     $time2 = strtotime('1/2/2003');
        //     $Tanggal = date('Y-m-d',$time);
        //     $Tanggal2 = date('Y-m-d',$time2);
        // Data_penyaluran::create([
        //     'tanggal_penyaluran' =>  $Tanggal,
        //     'tempo_penyaluran'=> $Tanggal2,
        //     'status_penyaluran' => Arr::random(['LUNAS', 'BELUM LUNAS']),
        //     'gas_dipesan' => 100,
        //     'keterangan_penyaluran' => 'Coba'
        // ]);

        // Query Builder
        // $Penyaluran = DB::table('data_penyaluran')->get();
        // $time = strtotime('1/1/2003');
        // $time2 = strtotime('1/2/2003');
        // $Tanggal = date('Y-m-d',$time);
        // $Tanggal2 = date('Y-m-d',$time2);
        // DB::table('data_penyaluran')->insert([
        //     'tanggal_penyaluran' =>  $Tanggal,
        //     'tempo_penyaluran'=> $Tanggal2,
        //     'status_penyaluran' => Arr::random(['LUNAS', 'BELUM LUNAS']),
        //     'gas_dipesan' => 100,
        //     'keterangan_penyaluran' => 'Coba'
        // ]);
    }

    function createView(){
        return view('penyaluran.penyaluran-create-admin');
    }

    function tambah(Request $request){
        echo "Nama" . $request->nama;
    }

    function updateView(){
        return view('penyaluran.penyaluran-update-admin');
    }

    function cancelPenyaluran(){
        
    }
}
