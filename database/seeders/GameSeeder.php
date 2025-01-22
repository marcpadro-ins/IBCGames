<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            ['name' => 'Joc d’Acció 1', 'description' => 'Un joc emocionant ple d’acció.', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Joc d’Aventura 1', 'description' => 'Explora mons desconeguts.', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Joc d’Estratègia 1', 'description' => 'Pensa, planeja i guanya.', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
