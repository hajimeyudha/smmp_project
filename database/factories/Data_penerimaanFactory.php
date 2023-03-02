<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_penyaluran>
 */
class Data_penerimaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'status_penerimaan' => Arr::random(['AKTIF', 'SELESAI', 'PENDING']),
            'bulan_penerimaan' => Arr::random(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']),
            'minggu_1' =>  $faker->numberBetween(0, 100),
            'minggu_2' =>  $faker->numberBetween(0, 100),
            'minggu_3' =>  $faker->numberBetween(0, 100),
            'minggu_4' =>  $faker->numberBetween(0, 100),
        ];
    }
}
