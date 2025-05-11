<?php

namespace Database\Factories;

use App\Models\jadwals;
use App\Models\pengunjungs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tikets>
 */
class TiketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pengunjung'=>pengunjungs::factory()->create(),
            'id_jadwal'=>jadwals::factory()->create(),
            'harga'=>$this->faker->randomFloat(2,25000,70000),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
