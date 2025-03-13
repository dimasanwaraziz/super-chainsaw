<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengajuan>
 */
class PengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_surat' => $this->faker->unique()->numerify('SURAT-#####'),
            'unit_kerja' => $this->faker->company,
            'berangkat_dari' => $this->faker->city,
            'tujuan' => $this->faker->city,
            'tanggal_berangkat' => $this->faker->date(),
            'tanggal_pulang' => $this->faker->date(),
        ];
    }
}
