<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Data_penyaluran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;


class Data_penyaluranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $waktu = Carbon::now();
        // $now = Carbon::create('2000', '01', '01');
        // $now = $now->toDateString();
        // $data = ['tanggal_penyaluran' => $now, 'status_penyaluran' => 'LUNAS', 'gas_dipesan' => 100, 'keterangan_penyaluran' => 'uji coba']; 

        // foreach ($data as $value) {
        //     Data_penyaluran::Insert([
        //         'tanggal_penyaluran' => $value['tanggal_penyaluran'],
        //         'status_penyaluran' => $value['status_penyaluran'],
        //         'gas_dipesan' => $value['gas_dipesan'],
        //         'keterangan_penyaluran' => $value['keterangan_penyaluran']
        //     ]);
        // }

        Data_penyaluran::factory()->count(9)->create();
        
    }
}
