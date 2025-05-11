<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\films>
 */
class FilmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(3),
            'genre'=>$this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Romance']),
            'durasi'=>$this->faker->numberBetween(80,180),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
