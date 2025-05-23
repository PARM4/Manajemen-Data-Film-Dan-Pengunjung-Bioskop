<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        $this->call([
            FilmsSeeder::class,
            JadwalsSeeder::class,
            PengunjungsSeeder::class,
            TiketsSeeder::class,
            UsersSeeder::class
        ]);
        // User::factory()->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        // ]);
    }
}
