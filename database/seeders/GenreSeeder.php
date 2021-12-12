<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'genre' => 'Action'
        ]);
        Genre::create([
            'genre' => 'Fantasy'
        ]);
        Genre::create([
            'genre' => 'Sci-Fi'
        ]);
        Genre::create([
            'genre' => 'Romance'
        ]);
        Genre::create([
            'genre' => 'Comedy'
        ]);
        Genre::create([
            'genre' => 'Mecha'
        ]);
        Genre::create([
            'genre' => 'Magic'
        ]);
    }
}
