<?php

namespace Database\Seeders;

use App\Models\Videolink;
use Illuminate\Database\Seeder;

class VideolinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videolink::create([
            'anime_id' => 1,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/OS6KeVt1Ve0'
        ]);
        Videolink::create([
            'anime_id' => 1,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/OS6KeVt1Ve0'
        ]);
        Videolink::create([
            'anime_id' => 1,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/OS6KeVt1Ve0'
        ]);
        Videolink::create([
            'anime_id' => 2,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/_urcLzoXbok'
        ]);
        Videolink::create([
            'anime_id' => 2,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/_urcLzoXbok'
        ]);
        Videolink::create([
            'anime_id' => 2,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/_urcLzoXbok'
        ]);
        Videolink::create([
            'anime_id' => 3,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/RnghCw_LbdA'
        ]);
        Videolink::create([
            'anime_id' => 3,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/RnghCw_LbdA'
        ]);
        Videolink::create([
            'anime_id' => 3,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/RnghCw_LbdA'
        ]);
        Videolink::create([
            'anime_id' => 4,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/B8l3r8zZiCw'
        ]);
        Videolink::create([
            'anime_id' => 4,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/B8l3r8zZiCw'
        ]);
        Videolink::create([
            'anime_id' => 4,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/B8l3r8zZiCw'
        ]);
        Videolink::create([
            'anime_id' => 5,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/KZKQP0wTAQc'
        ]);
        Videolink::create([
            'anime_id' => 5,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/KZKQP0wTAQc'
        ]);
        Videolink::create([
            'anime_id' => 5,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/KZKQP0wTAQc'
        ]);
        Videolink::create([
            'anime_id' => 6,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/8i3Xvs4R0WY'
        ]);
        Videolink::create([
            'anime_id' => 6,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/8i3Xvs4R0WY'
        ]);
        Videolink::create([
            'anime_id' => 6,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/8i3Xvs4R0WY'
        ]);
        Videolink::create([
            'anime_id' => 7,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/tLdLTSnmnoA'
        ]);

        Videolink::create([
            'anime_id' => 7,
            'episode' => 2,
            'link' => 'https://www.youtube.com/embed/tLdLTSnmnoA'
        ]);

        Videolink::create([
            'anime_id' => 7,
            'episode' => 3,
            'link' => 'https://www.youtube.com/embed/tLdLTSnmnoA'
        ]);

        Videolink::create([
            'anime_id' => 8,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/GWeuZr6fT6o'
        ]);

        Videolink::create([
            'anime_id' => 9,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/BUfSen2rYQs'
        ]);

        Videolink::create([
            'anime_id' => 10,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/nfK6UgLra7g'
        ]);

        Videolink::create([
            'anime_id' => 11,
            'episode' => 1,
            'link' => 'https://www.youtube.com/embed/xU47nhruN-Q'
        ]);
    }
}
