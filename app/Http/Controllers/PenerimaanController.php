<?php

namespace App\Http\Controllers;

use App\Models\Data_penerimaan;
use Illuminate\Http\Request;


class PenerimaanController extends Controller
{
    protected $PenerimaanModel;
 
    protected $Data_penerimaanModel;    

    function __construct(){
        $this->middleware('auth');
        $this->Data_penerimaanModel = Data_penerimaan::cursorPaginate(12);
    }
    
    function index(){
        return view('penerimaan.penerimaan', ['ListPenerimaan' => $this->Data_penerimaanModel]);
    }

    function updateView($id)
    {
        $data = Data_penerimaan::find($id);
        return view('penerimaan.penerimaan-update-admin', ['data' => $data]);
    }

    function ubah(Request $request, $id)
    {
        $Data_penerimaan = Data_penerimaan::find($id);
        $Data_penerimaan->status_penerimaan = $request->status;
        $Data_penerimaan->minggu_1 =$request->minggu_1;
        $Data_penerimaan->minggu_2 =$request->minggu_2;
        $Data_penerimaan->minggu_3 =$request->minggu_3;
        $Data_penerimaan->minggu_4 =$request->minggu_4;

        
        $Data_penerimaan->save();
        return redirect('/penerimaan')->with(['sukses => berhasil update data']);
    }

    function delete($id)
    {
        $mauDihapus = Data_penerimaan::find($id);
        $mauDihapus->delete();
        return redirect('/penerimaan')->with(['sukses => berhasil hapus data']);
    }

}
