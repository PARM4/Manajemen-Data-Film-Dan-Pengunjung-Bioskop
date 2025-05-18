<?php

namespace Database\Seeders;

use App\Models\jadwals;
use App\Models\pengunjungs;
use App\Models\tikets;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tikets::factory()->count(5)->create();
        DB::table('tikets')->insert([
            ['id_pengunjung' => pengunjungs::first()->id, 'id_jadwal' => jadwals::first()->id, 'harga' => 35000.00, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
