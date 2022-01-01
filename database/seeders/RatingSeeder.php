<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::create([
            'anime_id' => 1,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 2,
            'score' => 7.09
        ]);
        
        Rating::create([
            'anime_id' => 3,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 4,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 5,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 6,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 7,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 8,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 9,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 10,
            'score' => 8.35
        ]);

        Rating::create([
            'anime_id' => 11,
            'score' => 8.35
        ]);
    }
}
