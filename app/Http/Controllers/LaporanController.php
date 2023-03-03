<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    protected $Data_laporanModel;
    
    function __construct()
    {
        $this->middleware('auth');
        // Eloquent
        $this->Data_laporanModel = Laporan::cursorPaginate(10);
    }

    function index()
    {
        //menampilkan view laporan dengan mengirimkan data list laporan
        return view('laporan.laporan', ['ListLaporan' => $this->Data_laporanModel]);
    }


    function createView()
    {
        return view('laporan.laporan-create-admin');
    }

    function tambah(Request $request)
    {
        // $validated = $request->validate(
        //     [
        //         'statusPembayaran' => 'required',
        //         'tanggalOrder' => 'required',
        //         'tanggalTempo' => 'required',
        //         'gasDipesan' => 'required',
        //         'keterangan' => 'required',
        //         'statusPemesanan' => 'required'
        //     ],
        //     [
        //         'statusPembayaran.required' => 'status pembayaran wajib diisi',
        //         'tanggalOrder.required' => 'tanggal order wajib diisi',
        //         'tanggalTempo.required' => 'tanggal tempo wajib diisi',
        //         'gasDipesan.required' => 'gas dipesan wajib diisi',
        //         'keterangan.required' => 'keterangan wajib diisi',
        //         'statusPemesanan.required' => 'status pemesanan wajib diisi'
        //     ]
        // );

        $createLaporan = [
            'tanggal_laporan' => $request->tanggal_laporan,
            'uang_masuk' => $request->uang_masuk,
            'uang_keluar' => $request->uang_keluar,
            'saldo' => $request->saldo,
            'keterangan_laporan' => $request->keterangan_laporan,
            'nota_laporan' => $request->nota_laporan
        ];

        //Pengaturan Tanggal
        $TanggalAwal1 = $request->tanggal_laporan;
        $tanggalFix1 = strtotime($TanggalAwal1);
        $Tanggal = date('Y-m-d', $tanggalFix1);
        $uang_masuk = $request->uang_masuk;
        $uang_keluar = $request->uang_keluar;
        $total = $uang_masuk - $uang_keluar;

        //Tambah data
        Laporan::create([
            'tanggal_laporan' => $Tanggal,
            'uang_masuk' => $request->uang_masuk,
            'uang_keluar' => $request->uang_keluar,
            'saldo' => $total,
            'keterangan_laporan' => $request->keterangan_laporan,
            'nota_laporan' => $request->nota_laporan
        ]);

        return redirect('/laporan')->with(['sukses => berhasil tambah data']);

    }

    function updateView($id)
    {
        $data = Laporan::find($id);
        return view('laporan.laporan-update-admin', ['data' => $data]);
    }

    function ubah(Request $request, $id)
    {
        $Data_laporan = Laporan::find($id);

        $TanggalAwal1 = $request->tanggal_laporan;
        $tanggalFix1 = strtotime($TanggalAwal1);
        $Tanggal = date('Y-m-d', $tanggalFix1);

        $uang_masuk = $request->uang_masuk;
        $uang_keluar = $request->uang_keluar;
        $total = $uang_masuk - $uang_keluar;

        $Data_laporan->tanggal_laporan = $Tanggal;
        $Data_laporan->uang_masuk = $request->uang_masuk;
        $Data_laporan->uang_keluar = $request->uang_keluar;
        $Data_laporan->saldo =$total;
        $Data_laporan->keterangan_laporan = $request->keterangan_laporan;
        
        $Data_laporan->save();
        return redirect('/laporan')->with(['sukses => berhasil update data']);
    }

    function delete($id)
    {
        $mauDihapus = Laporan::find($id);
        $mauDihapus->delete();
        return redirect('/laporan')->with(['sukses => berhasil hapus data']);
    }
}
