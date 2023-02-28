<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_penyaluran>
 */
class Data_penyaluranFactory extends Factory
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
            'tanggal_penyaluran' =>  $faker->date('Y_m_d'),
            'status_penyaluran' => Arr::random(['LUNAS', 'BELUM LUNAS']),
            'gas_dipesan' => $faker->numberBetween(0, 100),
            'keterangan_penyaluran' => 'FAKERR'
        ];
    }
}
