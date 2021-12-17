<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type' => 'TV'
        ]);
        Type::create([
            'type' => 'Movie'
        ]);
        Type::create([
            'type' => 'OVA'
        ]);
    }
}
