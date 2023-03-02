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

    function __construct()
    {
        $this->middleware('auth');
        // Eloquent
        $this->PenyaluranModel = Penyaluran::all();
        $this->Data_penyaluranModel = Data_penyaluran::cursorPaginate(10);
    }

    function index()
    {
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

    function createView()
    {
        return view('penyaluran.penyaluran-create-admin');
    }

    function tambah(Request $request)
    {
        $validated = $request->validate(
            [
                'statusPembayaran' => 'required',
                'tanggalOrder' => 'required',
                'tanggalTempo' => 'required',
                'gasDipesan' => 'required',
                'keterangan' => 'required',
                'statusPemesanan' => 'required'
            ],
            [
                'statusPembayaran.required' => 'status pembayaran wajib diisi',
                'tanggalOrder.required' => 'tanggal order wajib diisi',
                'tanggalTempo.required' => 'tanggal tempo wajib diisi',
                'gasDipesan.required' => 'gas dipesan wajib diisi',
                'keterangan.required' => 'keterangan wajib diisi',
                'statusPemesanan.required' => 'status pemesanan wajib diisi'
            ]
        );

        $createPenyaluran = [
            'nama' => $request->nama,
            'statusPembayaran' => $request->statusPembayaran,
            'tanggalOrder' => $request->tanggalOrder,
            'tanggalTempo' => $request->tanggalTempo,
            'gasDipesan' => $request->gasDipesan,
            'keterangan' => $request->keterangan,
            'statusPemesanan' => $request->statusPemesanan
        ];

        $nama = $request->nama;
        $statusPembayaran = $request->statusPembayaran;
        $gasDipesan = $request->gasDipesan;
        $keterangan = $request->statusPemesanan;
        //Pengaturan Tanggal
        $TanggalAwal1 = $request->tanggalOrder;
        $tanggalFix1 = strtotime($TanggalAwal1);
        $Tanggal = date('Y-m-d', $tanggalFix1);
        $TanggalAwal2 = $request->tanggalTempo;
        $tanggalFix2 = strtotime($TanggalAwal2);
        $Tanggal2 = date('Y-m-d', $tanggalFix2);

        //Tambah data

        Data_penyaluran::create([
            'tanggal_penyaluran' => $Tanggal,
            'tempo_penyaluran' => $Tanggal2,
            'status_penyaluran' => $statusPembayaran,
            'gas_dipesan' => $gasDipesan,
            'keterangan_penyaluran' => $keterangan
        ]);
        return redirect('/penyaluran')->with(['sukses => berhasil tambah data']);

    }

    function updateView($id)
    {
        $data = Data_penyaluran::find($id);
        return view('penyaluran.penyaluran-update-admin', ['data' => $data]);
    }

    function ubah(Request $request, $id)
    {
        $Data_penyaluran = Data_penyaluran::find($id);

        $TanggalAwal1 = $request->tanggalOrder;
        $tanggalFix1 = strtotime($TanggalAwal1);
        $Tanggal = date('Y-m-d', $tanggalFix1);
        $TanggalAwal2 = $request->tanggalTempo;
        $tanggalFix2 = strtotime($TanggalAwal2);
        $Tanggal2 = date('Y-m-d', $tanggalFix2);

        $Data_penyaluran->tanggal_penyaluran = $Tanggal;
        $Data_penyaluran->tempo_penyaluran =$Tanggal2;
        $Data_penyaluran->status_penyaluran = $request->status;
        $Data_penyaluran->keterangan_penyaluran = $request->keterangan;
        $Data_penyaluran->gas_dipesan = $request->gasDipesan;
        
        $Data_penyaluran->save();
        return redirect('/penyaluran')->with(['sukses => berhasil update data']);
    }

    function delete($id)
    {
        $mauDihapus = Data_penyaluran::find($id);
        $mauDihapus->delete();
        return redirect('/penyaluran')->with(['sukses => berhasil hapus data']);
    }
}