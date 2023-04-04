<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Genre;
use App\Models\Novel;
use App\Models\GenreNovel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'Delta',
            'password' => Hash::make('123'),
            'email' => 'delta@gmail.com',
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'Daus',
            'password' => Hash::make('123'),
            'email' => 'daus@gmail.com',
            'role' => 'uploader',
        ]);
        
        Novel::create([
            'user_id' => 1,
            'judul' => 'The Lazy Prince Becomes A Genius',
            'slug' => 'the-lazy-prince-becomes-a-genius',
            'sinopsis' => '<p>Airn Fareira adalah anak laki-laki yang tidur untuk lari dari kenyataan.</p><p>Orang-orang mengejeknya, memanggilnya &#8216;deadbeat&#8217;, tapi dia tidak ingin berubah.</p><p>Sampai suatu hari, dia memimpikan seorang pendekar pedang… Itu adalah mimpi tentang seorang pria tanpa bakat yang telah berlatih dengan mengayunkan pedangnya selama beberapa dekade.</p>',
            'status' => 'Ongoing',
            'cover' => 'the-lazy-prince-becomes-a-genius.jpg'
        ]);
        
        Novel::create([
            'user_id' => 2,
            'judul' => 'Seirei Gensouki LN',
            'slug' => 'seirei=gensouki-ln',
            'sinopsis' => '<p>Amakawa Haruto meninggal sebelum dia berkesempatan untuk bersatu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu. Rio, seorang bocah lelaki yang tinggal di daerah kumuh mencari balas dendam untuk ibunya yang dibunuh dengan darah dingin di depannya ketika dia baru berusia lima tahun.</p><p>Ada bumi yang banyak diketahui dan ada dunia alternatif. Dua orang, masing-masing dengan latar belakang dan nilai-nilai mereka sendiri. Untuk alasan yang aneh, ingatan dan kepribadian Haruto, orang yang seharusnya mati bangkit kembali di tubuh Rio. Karena keduanya bingung atas ingatan dan kepribadian mereka yang menyatu bersama, Rio (Haruto) memutuskan untuk hidup di dunia baru ini.</p><p>Bersamaan dengan ingatan Haruto, Rio membangkitkan kekuatan yang tidak dikenal tetapi istimewa. Jika dia menggunakannya, sepertinya dia bisa hidup lebih baik, tapi sebelum itu, Rio mengalami penculikan yang mengakibatkan melibatkan dua putri Kerajaan Bertam.</p><p>Setelah menyelamatkan para putri, Rio diberikan beasiswa untuk menghadiri Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa. Latar belakangnya adalah anak yatim miskin yang pernah tinggal di daerah kumuh, sekolah yang penuh dengan bangsawan agak tempat yang menjijikkan untuk tinggal di.</p>',
            'status' => 'End',
            'cover' => 'seirei=gensouki-ln.jpg'
        ]);
        
        Novel::create([
            'user_id' => 1,
            'judul' => 'Genjitsu Shugi Yuusha no Oukoku Saikenki LN',
            'slug' => 'genjitsu-shugi-yuusha-no-oukoku-saikenki-ln',
            'sinopsis' => '<p>&#8220;O, Pahlawan!&#8221; Dengan kalimat klise itu, Kazuya Souma menemukan dirinya dipanggil ke dunia lain dan petualangannya –– tidak dimulai. Setelah ia mempresentasikan rencananya untuk memperkuat negara secara ekonomi dan militer, raja menyerahkan tahta kepadanya dan Souma mendapati dirinya dibebani dengan memerintah negara! Terlebih lagi, dia telah bertunangan dengan putri raja sekarang &#8230; ?! Untuk mengembalikan negara, Souma memanggil yang bijak, yang berbakat, dan yang berbakat di sisinya. Lima orang berkumpul di hadapan Souma yang baru saja dinobatkan. Apa saja banyak talenta dan kemampuan yang mereka miliki &#8230; ?! Apa jalan pandangannya sebagai seorang realis yang menjatuhkan Souma dan orang-orang di negaranya? Serangkaian fantasi administrasi administratif yang dipindahtangankan ke dunia lain dimulai di sini!</p>',
            'status' => 'Ongoing',
            'cover' => 'genjitsu-shugi-yuusha-no-oukoku-saikenki-ln.jpg'
        ]);

        Novel::create([
            'user_id' => 2,
            'judul' => 'Yumemiru Danshi wa Genjitsushugisha LN',
            'slug' => 'yumemiru-danshi-wa-genjitsushugisha-ln',
            'sinopsis' => '<p>Sajou Wataru tergila-gila dengan teman sekelasnya Natsukawa Aika sampai-sampai dia hidup dalam lamunan tentang cinta dan hubungan timbal balik mereka, tanpa henti mendekatinya di setiap kesempatan. Namun, suatu hari, Wataru siuman, dan harus menghadapi kenyataan.</p><p>“Tidak mungkin aku cocok untuk bunga yang tidak bisa dijangkau seperti dia, kan…?”</p><p>Setelah mulai melihat kenyataan sebagaimana adanya, Wataru mulai menjaga jarak tertentu dengan Aika, yang membuatnya kacau balau.</p><p>“Apakah dia…membenciku sekarang…?”</p><p>Hasil dari kesalahpahaman ini adalah kebangkitan perasaan bawah sadar yang datang dan pergi!? Maka dimulailah romcom dari perasaan sepihak yang saling menguntungkan, diganggu oleh kesalahpahaman!</p>',
            'status' => 'Ongoing',
            'cover' => 'yumemiru-danshi-wa-genjitsushugisha-ln.png',
        ]);

        Novel::create([
            'user_id' => 1,
            'judul' => 'Sword Art Online LN',
            'slug' => 'sword-art-online-ln',
            'sinopsis' => '<p>Pada tahun 2022, para gamer bersukacita karena Sword Art Online-sebuah VRMMORPG (Virtual Reality Massively Multiplayer Online Role Playing Game) tidak seperti yang lain-membuka pintu virtualnya, memungkinkan pemain untuk mengambil keuntungan penuh dari teknologi gaming terbaik: NerveGear, sebuah sistem yang memungkinkan pengguna untuk sepenuhnya membenamkan diri dalam dunia game dengan memanipulasi gelombang otak mereka untuk menciptakan pengalaman bermain game yang sepenuhnya realistis.</p><p>Namun ketika game ini ditayangkan, kegembiraan para pemain dengan cepat berubah menjadi horor ketika mereka menemukan bahwa, untuk semua fiturnya yang luar biasa, SAO kehilangan salah satu fungsi paling dasar dari MMORPG manapun &#8211; tombol log-out.</p><p>Sekarang terperangkap di dunia virtual Aincrad, tubuh mereka ditawan oleh NerveGear di dunia nyata, pengguna diberi ultimatum mengerikan: taklukkan semua seratus lantai Aincrad untuk mendapatkan kembali kebebasan Anda. Tapi di dunia SAO yang bengkok, &#8220;game over&#8221; berarti kematian tertentu &#8211; baik virtual maupun nyata &#8230;</p>',
            'status' => 'End',
            'cover' => 'sword-art-online-ln.jpg',
        ]);

        Novel::create([
            'user_id' => 2,
            'judul' => 'Arifureta Shokugyou de Sekai Saikyou LN',
            'slug' => 'arifureta-shokugyou-de-sekai-saikyou-ln',
            'sinopsis' => '<p>Hajime Naguno, seorang remaja berusia 17 tahun adalah seorang otaku biasa. Akan tetapi, hidupnya simpelnya yang penuh begadang hingga menginap di sekolah tiba-tiba menjadi jungkir balik ketika ia, bersama dengan teman-teman sekelasnya, ditarik ke dunia fantasi!</p><p>Mereka diperlakukan seperti seorang pahlawan dan diberi tugas untuk menyelamatkan umat manusia dari bahaya kepunahan.</p><p>Tapi, apa yang membuat impian idaman seorang otaku menjadi sebuah mimpi buruk bagi Hajime? Sementara teman-temannya mendapatkan job class dengan kekuatan dewa, job yang Hajime dapatkan, Synergist, hanya memiliki 1 skill transmutasi. Karena diejek dan dibully teman-temannya, ia pun merasa putus asa.</p><p>Apakah ia akan mampu bertahan di dalam dunia yang penuh monster dan iblis hanya dengan kekuatan setara tukang besi?</p>',
            'status' => 'Ongoing',
            'cover' => 'arifureta-shokugyou-de-sekai-saikyou-ln.jpg',
        ]);

        Genre::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        Genre::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Genre::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);

        Genre::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);

        Genre::create([
            'name' => 'Shounen',
            'slug' => 'shounen'
        ]);

        Genre::create([
            'name' => 'Mistery',
            'slug' => 'mistery'
        ]);

        Genre::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Genre::create([
            'name' => 'Gore',
            'slug' => 'gore'
        ]);

        Genre::create([
            'name' => 'Slice Of Life',
            'slug' => 'slice-of-life'
        ]);

        GenreNovel::create([
            'novel_id' => 1,
            'genre_id' => 1
        ]);

        GenreNovel::create([
            'novel_id' => 1,
            'genre_id' => 3
        ]);

        GenreNovel::create([
            'novel_id' => 1,
            'genre_id' => 5
        ]);

        GenreNovel::create([
            'novel_id' => 1,
            'genre_id' => 2
        ]);

        GenreNovel::create([
            'novel_id' => 2,
            'genre_id' => 2
        ]);

        GenreNovel::create([
            'novel_id' => 2,
            'genre_id' => 1
        ]);

        GenreNovel::create([
            'novel_id' => 2,
            'genre_id' => 3
        ]);

        GenreNovel::create([
            'novel_id' => 2,
            'genre_id' => 4
        ]);

        GenreNovel::create([
            'novel_id' => 3,
            'genre_id' => 3
        ]);

        GenreNovel::create([
            'novel_id' => 3,
            'genre_id' => 1
        ]);

        GenreNovel::create([
            'novel_id' => 3,
            'genre_id' => 5
        ]);

        GenreNovel::create([
            'novel_id' => 3,
            'genre_id' => 4
        ]);

        GenreNovel::create([
            'novel_id' => 4,
            'genre_id' => 4
        ]);

        GenreNovel::create([
            'novel_id' => 4,
            'genre_id' => 1
        ]);

        GenreNovel::create([
            'novel_id' => 4,
            'genre_id' => 5
        ]);

        GenreNovel::create([
            'novel_id' => 4,
            'genre_id' => 2
        ]);

        GenreNovel::create([
            'novel_id' => 5,
            'genre_id' => 7
        ]);

        GenreNovel::create([
            'novel_id' => 5,
            'genre_id' => 3
        ]);

        GenreNovel::create([
            'novel_id' => 5,
            'genre_id' => 5
        ]);

        GenreNovel::create([
            'novel_id' => 6,
            'genre_id' => 1
        ]);

        GenreNovel::create([
            'novel_id' => 6,
            'genre_id' => 8
        ]);

        GenreNovel::create([
            'novel_id' => 6,
            'genre_id' => 6
        ]);
    }
}
