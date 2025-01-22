<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Acció', 'description' => 'Jocs plens d’adrenalina i emocions.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aventura', 'description' => 'Explora mons i viu grans històries.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Estratègia', 'description' => 'Planeja i executa per guanyar.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
