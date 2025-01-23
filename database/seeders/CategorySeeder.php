<?php

namespace Database\Seeders;

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
            [
                'name' => 'Acció', 
                'description' => 'Jocs plens d’adrenalina i emocions, amb combats intensos i acció frenètica.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Aventura', 
                'description' => 'Explora mons fantàstics, resol enigmes i viu grans històries.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Estratègia', 
                'description' => 'Planeja cada moviment, administra recursos i derrota els teus rivals amb astúcia.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Rol', 
                'description' => 'Converteix-te en un heroi, desenvolupa habilitats i pren decisions que afecten la història.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Simulació', 
                'description' => 'Experimenta simulacions realistes de la vida, negocis o gestió.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Esports', 
                'description' => 'Competeix en esports virtuals amb realisme i precisió.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}