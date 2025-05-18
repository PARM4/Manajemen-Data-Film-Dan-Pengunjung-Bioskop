<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengunjungs>
 */
class PengunjungsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'password' => Hash::make('1234'),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
