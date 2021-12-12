<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::create([
            'judul' => 'Mushoku Tensei: Isekai Ittara Honki Dasu',
            'genre_id' => 7,
            'cover_img' => 'https://nimegami.com/wp-content/uploads/2021/10/Mushoku-Tensei-Isekai-Ittara-Honki-Dasu-Season-2-Sub-Indo1.jpg',
            'sinopsis' => 'Tewas saat menyelamatkan orang asing dari tabrakan lalu lintas, NEET berusia 34 tahun bereinkarnasi ke dunia sihir sebagai Rudeus Greyrat, bayi yang baru lahir. Dengan pengetahuan, pengalaman, dan penyesalan dari kehidupan sebelumnya yang dipertahankan, Rudeus bersumpah untuk menjalani hidup yang memuaskan dan tidak mengulangi kesalahan masa lalunya. Sekarang diberkahi dengan kekuatan magis yang luar biasa serta pikiran orang dewasa yang sudah dewasa, Rudeus dipandang sebagai jenius dalam pembuatan oleh orang tua barunya. Segera, dia mendapati dirinya belajar di bawah para pejuang yang kuat, seperti ayah pendekar pedang dan seorang penyihir bernama Roxy Migurdia — semuanya untuk mengasah bakatnya yang tampak. Tapi meski eksteriornya polos, Rudeus tetaplah seorang otaku mesum, yang menggunakan kekayaan pengetahuannya untuk membuat gerakan pada wanita yang tidak pernah bisa dia buat di kehidupan sebelumnya. [Ditulis oleh MAL Tulis Ulang]',
            'status_id' => 1,
            'rating' => '8.35'
        ]);
    }
}
