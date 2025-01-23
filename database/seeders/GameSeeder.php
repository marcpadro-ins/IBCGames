<?php

namespace Database\Seeders;

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
            [
                'name' => 'Call of Battle', 
                'description' => 'Un shooter ple d’acció amb missions èpiques i modes multijugador intensos.', 
                'category_id' => 1, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Lost Kingdom', 
                'description' => 'Explora un regne perdut ple de misteris i criatures fantàstiques en aquest joc d’aventura.', 
                'category_id' => 2, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Empire Conqueror', 
                'description' => 'Construeix el teu imperi, gestiona exèrcits i domina els teus rivals en aquest joc d’estratègia.', 
                'category_id' => 3, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Mystic Quest', 
                'description' => 'Viu una aventura de rol amb combats tàctics i una història èpica.', 
                'category_id' => 4, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'City Builder Pro', 
                'description' => 'Construeix i administra la teva pròpia ciutat amb aquest realista simulador d’urbanisme.', 
                'category_id' => 5, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Futbol Stars 2024', 
                'description' => 'Experimenta el futbol amb gràfics realistes i mecàniques avançades.', 
                'category_id' => 6, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}