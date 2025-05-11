<?php

namespace Database\Factories;

use App\Models\films;
use App\Models\jadwals;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jadwals>
 */
class JadwalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = jadwals::class;

    public function definition(): array
    {
        return [
            'id_film'=>films::factory()->create()->id,
            'ruangan' => $this->faker->randomElement(['A', 'B', 'C']) . $this->faker->numberBetween(1, 5),
            'show_date'=>$this->faker->date(),
            'show_time'=>$this->faker->time('h:i'),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
