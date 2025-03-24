<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Anime::factory(5)->create();
        Anime::create([
            'titre' => 'Monkey D. Luffy',
            'posterLink' => 'Le capitaine...',
            'description' => 'luffy.jpg',
            'yearCreation' => 'luffy.jpg',
            'trailer' => 'luffy.jpg',
            'yearFin' => 'luffy.jpg',
            'studio' => 'luffy.jpg',
        ]);
    }
}
