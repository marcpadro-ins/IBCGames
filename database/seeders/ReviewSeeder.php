<?php

namespace Database\Seeders;

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
            ['rating' => 5, 'comment' => 'Un shooter impressionant amb una acció frenètica!', 'game_id' => 1, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 3, 'comment' => 'Molt divertit, però el matchmaking necessita millores.', 'game_id' => 1, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 1, 'comment' => 'L’equilibri de les armes és un desastre, impossible jugar bé.', 'game_id' => 1, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 4, 'comment' => 'Gran joc d’infiltració amb moments tensos!', 'game_id' => 7, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 2, 'comment' => 'Missions interessants però la IA enemiga és massa fàcil.', 'game_id' => 7, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'M’ha encantat la jugabilitat i la història!', 'game_id' => 7, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 4, 'comment' => 'Una aventura èpica, amb una història captivadora!', 'game_id' => 2, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 2, 'comment' => 'Grans paisatges i exploració, però el combat és una mica repetitiu.', 'game_id' => 2, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'M’ha encantat! La varietat de missions és impressionant.', 'game_id' => 2, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 5, 'comment' => 'Exploració submarina espectacular!', 'game_id' => 8, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 3, 'comment' => 'El món és preciós, però la història es fa lenta.', 'game_id' => 8, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 4, 'comment' => 'Bona immersió i mecàniques originals.', 'game_id' => 8, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 2, 'comment' => 'L’estratègia és bona, però hi ha massa microtransaccions.', 'game_id' => 3, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Molt profund i desafiant, cada partida és única!', 'game_id' => 3, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 4, 'comment' => 'Interessant, però la IA podria ser més intel·ligent.', 'game_id' => 3, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 3, 'comment' => 'Molt bona estratègia, però difícil de començar.', 'game_id' => 9, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 4, 'comment' => 'Les batalles espacials són espectaculars!', 'game_id' => 9, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Un dels millors jocs d’estratègia espacial!', 'game_id' => 9, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 5, 'comment' => 'Un RPG increïble amb una història que enganxa!', 'game_id' => 4, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 1, 'comment' => 'M’ha agradat molt, però els diàlegs podrien ser millors.', 'game_id' => 4, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 1, 'comment' => 'El combat és massa repetitiu, esperava més innovació.', 'game_id' => 4, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 4, 'comment' => 'Molt bones missions i història.', 'game_id' => 10, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Un RPG excel·lent, ple de màgia i aventures.', 'game_id' => 10, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 2, 'comment' => 'El sistema de combat és una mica antiquat.', 'game_id' => 10, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 5, 'comment' => 'Fantàstic simulador de construcció, amb molta profunditat.', 'game_id' => 5, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Molt realista i detallat, m’ha enganxat durant hores.', 'game_id' => 5, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Bé, però el sistema econòmic és massa difícil.', 'game_id' => 5, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 4, 'comment' => 'Gestionar la granja és molt addictiu!', 'game_id' => 11, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 3, 'comment' => 'Molt divertit, però les eines podrien millorar.', 'game_id' => 11, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 5, 'comment' => 'Un dels millors simuladors agrícoles que he jugat!', 'game_id' => 11, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['rating' => 5, 'comment' => 'Carreres d’alta velocitat espectaculars!', 'game_id' => 12, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 4, 'comment' => 'Els gràfics i el so són increïbles!', 'game_id' => 12, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['rating' => 3, 'comment' => 'Molt divertit, però el control dels cotxes podria ser millor.', 'game_id' => 12, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
