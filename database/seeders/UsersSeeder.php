<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Staf',
                'email' => 'staf@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'staf',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
