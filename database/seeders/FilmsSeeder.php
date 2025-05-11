<?php

namespace Database\Seeders;

use App\Models\films;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // films::factory()->count(1)->create();
        DB::table('films')->insert([
            ['title'=>'Train To Busan', 'genre'=>'Horor', 'durasi'=>'120','created_at'=>now(), 'updated_at'=>now()]
        ]);
    }
}
