<?php

namespace Database\Seeders;

use App\Models\Data_penerimaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Data_penerimaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data_penerimaan::factory()->count(20)->create();
    }
}
