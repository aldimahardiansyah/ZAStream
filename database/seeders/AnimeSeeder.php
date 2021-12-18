<?php

namespace Database\Seeders;

use App\Models\Anime;
use App\Models\Anime_genre;
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
/* 
        Anime::create([
            'judul' => '',
            'cover_img' => '',
            'sinopsis' => '',
            'status_id' => ,
            'type_id' => ,
            'rating' => ''
        ]);
        Anime_genre::create([
            'anime_id' => ,
            'genre_id' => 
        ]);
*/

        Anime::create([
            'judul' => 'Mushoku Tensei: Isekai Ittara Honki Dasu',
            'cover_img' => 'https://nimegami.com/wp-content/uploads/2021/10/Mushoku-Tensei-Isekai-Ittara-Honki-Dasu-Season-2-Sub-Indo1.jpg',
            'sinopsis' => 'Tewas saat menyelamatkan orang asing dari tabrakan lalu lintas, NEET berusia 34 tahun bereinkarnasi ke dunia sihir sebagai Rudeus Greyrat, bayi yang baru lahir. Dengan pengetahuan, pengalaman, dan penyesalan dari kehidupan sebelumnya yang dipertahankan, Rudeus bersumpah untuk menjalani hidup yang memuaskan dan tidak mengulangi kesalahan masa lalunya. Sekarang diberkahi dengan kekuatan magis yang luar biasa serta pikiran orang dewasa yang sudah dewasa, Rudeus dipandang sebagai jenius dalam pembuatan oleh orang tua barunya. Segera, dia mendapati dirinya belajar di bawah para pejuang yang kuat, seperti ayah pendekar pedang dan seorang penyihir bernama Roxy Migurdia — semuanya untuk mengasah bakatnya yang tampak. Tapi meski eksteriornya polos, Rudeus tetaplah seorang otaku mesum, yang menggunakan kekayaan pengetahuannya untuk membuat gerakan pada wanita yang tidak pernah bisa dia buat di kehidupan sebelumnya. [Ditulis oleh MAL Tulis Ulang]',
            'status_id' => 1,
            'type_id' => 1,
            'rating' => '8.35'
        ]);
        Anime_genre::create([
            'anime_id' => 1,
            'genre_id' => 7
        ]);
        Anime_genre::create([
            'anime_id' => 1,
            'genre_id' => 2
        ]);

        Anime::create([
            'judul' => 'Isekai Kizoku ni Tensei suru',
            'cover_img' => 'https://cdn.myanimelist.net/images/manga/1/222486.jpg',
            'sinopsis' => '“Aku akan hidup untuk diriku sendiri!” Pembunuh terhebat di Bumi hanya tahu bagaimana hidup sebagai alat bagi majikannya—sampai mereka berhenti membiarkannya hidup. Dilahirkan kembali oleh anugerah seorang dewi ke dunia pedang dan sihir, dia ditawari kesempatan untuk melakukan hal-hal yang berbeda kali ini, tapi ada masalah… Dia harus melenyapkan pahlawan super kuat yang akan membawa akhir dunia kecuali dia dihentikan. Sekarang dikenal sebagai Lugh Tuatha Dé, sang master assassin pasti sangat sibuk, terutama karena semua gadis cantik yang terus-menerus mengelilinginya. Lugh mungkin adalah pembunuh yang tak tertandingi, tetapi bagaimana dia akan melawan musuh dengan sihir yang kuat? (Sumber: Yen Press)',
            'status_id' => 1,
            'type_id' => 1,
            'rating' => '7.09'
        ]);
        Anime_genre::create([
            'anime_id' => 2,
            'genre_id' => 2
        ]);
        Anime_genre::create([
            'anime_id' => 2,
            'genre_id' => 1
        ]);

        Anime::create([
            'judul' => 'Tokyo Revengers',
            'cover_img' => 'https://cdn.myanimelist.net/images/anime/1884/114790.jpg',
            'sinopsis' => 'Tahun kedua sekolah menengah Takemichi Hanagaki adalah titik tertinggi dalam hidupnya. Dia memiliki rasa hormat, sekelompok teman yang bisa dia andalkan, dan bahkan pacar. Tapi itu dua belas tahun yang lalu. Hari ini, dia bukan siapa-siapa: ketidakberdayaan yang diolok-olok oleh anak-anak dan selalu dipaksa untuk meminta maaf kepada atasannya yang lebih muda. Sebuah laporan berita mendadak tentang pembunuhan kejam Geng Tokyo Manji terhadap satu-satunya pacar yang pernah dia miliki bersama saudara laki-lakinya hanya menambah penghinaan pada cedera. Setengah detik sebelum kereta mengakhiri hidupnya yang menyedihkan untuk selamanya, Takemichi kembali ke hari yang sama dua belas tahun yang lalu, ketika dia masih berkencan dengan Hinata Tachibana.
            Setelah dipaksa untuk menghidupkan kembali hari yang sama yang memulai spiral ke bawah, Takemichi bertemu dengan adik Hinata. Tanpa berpikir, dia mengakui kematiannya sebelum kembali ke masa lalu. Takemichi mendesak dia untuk melindungi adiknya sebelum entah kenapa kembali ke masa depan. Ajaibnya, dia tidak mati. Lebih aneh lagi, masa depan telah berubah. Sepertinya Takemichi dapat mengubah aliran waktu. Diberi kesempatan untuk mencegah kematian tragis mantan pacarnya di tangan Geng Tokyo Manji, Takemichi memutuskan untuk terbang melintasi waktu untuk mengubah arah masa depan.
            [Ditulis oleh MAL Penulisan Ulang]',
            'status_id' => 2,
            'type_id' => 1,
            'rating' => '8.26'
        ]);
        Anime_genre::create([
            'anime_id' => 3,
            'genre_id' => 1
        ]);
        Anime_genre::create([
            'anime_id' => 3,
            'genre_id' => 10
        ]);
        Anime_genre::create([
            'anime_id' => 3,
            'genre_id' => 11
        ]);

        Anime::create([
            'judul' => 'Battle Game in 5 Seconds',
            'cover_img' => 'https://cdn.myanimelist.net/images/anime/1145/115565.jpg',
            'sinopsis' => 'Akira Shiroyanagi, seorang siswa sekolah menengah yang menyukai game dan Konpeito (permen Jepang), tiba-tiba diseret ke medan perang oleh seorang gadis misterius yang menyebut dirinya Mion. Para peserta diberitahu bahwa mereka "dihapus dari daftar keluarga, terlibat dalam eksperimen, dan memperoleh kekuatan tertentu."
            Akira bertekad untuk memenangkan permainan dengan kekuatan barunya dan menghancurkan organisasi. Berbekal kekuatan yang tidak diharapkan siapa pun dan keterampilan "otaknya", periode baru pertempuran intelijen dimulai!
            (Sumber: MU, diedit)',
            'status_id' => 2,
            'type_id' => 1,
            'rating' => '6.83'
        ]);
        Anime_genre::create([
            'anime_id' => 4,
            'genre_id' => 1
        ]);
        Anime_genre::create([
            'anime_id' => 4,
            'genre_id' => 9
        ]);

        Anime::create([
            'judul' => 'Muv-Luv Alternative',
            'cover_img' => 'https://cdn.myanimelist.net/images/anime/1916/118439.jpg',
            'sinopsis' => 'Dunia telah dilanda perang putus asa selama tiga dekade melawan BETA — spesies asing yang menginvasi planet ini pada tahun 1973. Di tengah kekacauan ini, seorang siswa sekolah menengah bernama Takeru Shirogane tiba-tiba terbangun dari mimpi buruk yang mengerikan di mana dia melihat manusia dalam kekalahan total. Segera setelah itu, dia menyadari bahwa mimpinya tidak lebih dari ingatan hidupnya di alam semesta alternatif. Dalam ingatan itu, proyek Alternatif V dilaksanakan, mengirim ratusan ribu orang ke luar angkasa sebagai upaya terakhir untuk melestarikan umat manusia, sementara meninggalkan miliaran yang tersisa di Bumi untuk mengalami nasib yang kejam. Kerinduan untuk mengubah masa depan yang suram ini, Takeru bergabung dengan pangkalan militer di Yokohama, yang kebetulan adalah bekas sekolah menengahnya. Di sana, dia berhasil meyakinkan wakil komandan pangkalan dan pemimpin proyek Alternatif IV, Profesor Yuuko Kouzuki, untuk mencegah Terjadinya Alternatif V. Untuk memastikan keberhasilan Alternatif IV, Takeru harus mengemudikan mesin humanoid raksasa Tactical Surface Fighters (TSF) bersama rekan-rekan tarunanya. Namun, dia hanya memiliki waktu dua bulan untuk menyelesaikan pelatihannya dan memanfaatkan sebagian pengetahuannya tentang masa depan — jangan sampai tragedi berikutnya terjadi.
            [Ditulis oleh MAL Penulisan Ulang]',
            'status_id' => 1,
            'type_id' => 1,
            'rating' => '5.99'
        ]);
        Anime_genre::create([
            'anime_id' => 5,
            'genre_id' => 1
        ]);
        Anime_genre::create([
            'anime_id' => 5,
            'genre_id' => 6
        ]);
        Anime_genre::create([
            'anime_id' => 5,
            'genre_id' => 3
        ]);

        Anime::create([
            'judul' => 'The God of High School',
            'cover_img' => 'https://cdn.myanimelist.net/images/anime/1722/107269.jpg',
            'sinopsis' => 'Turnamen "God of High School" telah dimulai, mencari petarung terhebat di antara siswa SMA Korea! Semua gaya seni bela diri, senjata, sarana, dan metode untuk mencapai kemenangan diizinkan. Hadiah? Satu keinginan untuk apa pun yang diinginkan oleh pemenang.
            Pakar Taekwondo Jin Mo-Ri diundang untuk berpartisipasi dalam kompetisi. Di sana ia berteman dengan spesialis karate Han Dae-Wi dan pendekar pedang Yu Mi-Ra, yang keduanya masuk karena alasan pribadi mereka sendiri. Mo-Ri tahu bahwa tidak ada lawan yang sama dan bahwa pertandingan akan menjadi yang paling kejam yang pernah dia lawan dalam hidupnya. Tapi bukannya khawatir, prospek ini membuatnya sangat bersemangat.
            Sebuah rahasia terletak di balik topeng ujian transparan kecakapan tempur yang diklaim turnamen—salah satu yang memiliki kandidat politik Korea Park Mu-Jin yang menonton setiap pertarungan dengan mata penuh harap dan lapar. Mo-Ri, Dae-Wi, dan Mi-Ra akan menemukan apa artinya menjadi Dewa SMA.
            [Ditulis oleh MAL Penulisan Ulang]',
            'status_id' => 2,
            'type_id' => 1,
            'rating' => '7.06'
        ]);
        Anime_genre::create([
            'anime_id' => 6,
            'genre_id' => 1
        ]);
        Anime_genre::create([
            'anime_id' => 6,
            'genre_id' => 5
        ]);
        Anime_genre::create([
            'anime_id' => 6,
            'genre_id' => 8
        ]);

        Anime::create([
            'judul' => 'Komi-san wa, Comyushou desu',
            'cover_img' => 'https://cdn.myanimelist.net/images/anime/1899/117237l.jpg?_gl=1*ppx142*_ga*MTA4NTQ0ODE1NC4xNjM5MjkxNzE1*_ga_26FEP9527K*MTYzOTc4MzIxMi40LjEuMTYzOTc4MzI0My4yOQ..',
            'sinopsis' => 'Komi-san wa, Comyushou desu. menceritakan tentang: Ini merupakan hari pertama Shouko Komi di SMA Itan yang bergengsi. Dengan rambut hitam panjang, tinggi dan penampilannya yang anggun, Komi langsung menarik perhatian siapa pun yang bertemu dengannya. Namun, Komi memiliki satu masalah, dia sangat buruk dalam berkomunikasi dengan orang lain.Hitohito Tadano, seorang siswa biasa yang memiliki moto “membaca situasi dan hindari masalah”, tapi dia segera menyadari posisi duduknya yang di samping Komi telah membuatnya menjadi musuh semua orang di kelasnya. Suatu hari, karena suatu hal ia berada di ruang kelas dan hanya berduaan saja dengan Komi. Ia menyadari Komi tak memiliki satu pun teman karena tidakk dapat berkomunikasi dengan baik. Sejak saait itu, Tadano memutuskan membantu Komi dalam berkomunikasi hingga ia bisa mendapatkan 100 teman. Begitulah kisah remaja sekolah yang tidak biasa ini dimulai.hanya membaca cerita membuat sudah tidak sabar untuk nonton Komi-san wa, Comyushou desu. sub indo bukan?',
            'status_id' => 1,
            'type_id' => 1,
            'rating' => '8.26'
        ]);
        Anime_genre::create([
            'anime_id' => 7,
            'genre_id' => 5
        ]);
        Anime_genre::create([
            'anime_id' => 7,
            'genre_id' => 12
        ]);

    }
}
