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
            'link' => 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2F100062598383092%2Fvideos%2F287440353209374%2F&width=700&show_text=false&height=394&appId'
        ]);
        Videolink::create([
            'anime_id' => 1,
            'episode' => 2,
            'link' => 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2FNEKOpunh%2Fvideos%2F1106059676802258%2F&width=700&show_text=false&height=394&appId'
        ]);
        Videolink::create([
            'anime_id' => 1,
            'episode' => 3,
            'link' => 'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2FNEKOpunh%2Fvideos%2F621482962236253%2F&width=700&show_text=false&height=394&appId'
        ]);
    }
}
