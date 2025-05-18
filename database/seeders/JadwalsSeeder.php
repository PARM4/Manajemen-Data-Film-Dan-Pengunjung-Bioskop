<?php

namespace Database\Seeders;

use App\Models\jadwals;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // jadwals::factory()->count(5)->create();
        DB::table('jadwals')->insert([
            'id_film' => 1,
            'ruangan' => 'A4',
            'show_date' => '2025-05-08',
            'show_time' => '13:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
