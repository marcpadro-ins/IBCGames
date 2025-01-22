<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            ['rating' => 5, 'comment' => 'Fantàstic joc!', 'game_id' => 1, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 4, 'comment' => 'Molt entretingut.', 'game_id' => 2, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 3, 'comment' => 'Bé, però podria millorar.', 'game_id' => 3, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
