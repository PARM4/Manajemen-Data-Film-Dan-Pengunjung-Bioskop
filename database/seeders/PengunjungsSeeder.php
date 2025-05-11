<?php

namespace Database\Seeders;

use App\Models\pengunjungs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengunjungsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // pengunjungs::factory()->count(1)->create();
        DB::table('pengunjungs')->insert([
            ['nama' => 'Parma', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
