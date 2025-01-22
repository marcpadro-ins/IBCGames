<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Joan',
            'email' => 'joan@example.com',
        ]);

        User::factory()->create([
            'name' => 'Maria',
            'email' => 'maria@example.com',
        ]);

        User::factory()->create([
            'name' => 'Pere',
            'email' => 'pere@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            GameSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}