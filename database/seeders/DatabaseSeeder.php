<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Genre;
use App\Models\Novel;
use App\Models\Volume;
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

        // User::create([
        //     'username' => 'Delta',
        //     'password' => Hash::make('Deltanovel82#'),
        //     'email' => 'delta@gmail.com',
        //     'role' => 'admin',
        // ]);

        // User::create([
        //     'username' => 'Keynea',
        //     'password' => Hash::make('Keynea123_'),
        //     'email' => 'keynea@gmail.com',
        //     'role' => 'uploader',
        // ]);

        
            Novel::create([
                'user_id' => 2,
                'title' => 'The Lazy Prince Becomes A Genius',
                'slug' => 'the-lazy-prince-becomes-a-genius',
                'synopsis' => '<p>Airn Fareira adalah anak laki-laki yang tidur untuk lari dari kenyataan.</p><p>Orang-orang mengejeknya, memanggilnya &#8216;deadbeat&#8217;, tapi dia tidak ingin berubah.</p><p>Sampai suatu hari, dia memimpikan seorang pendekar pedang… Itu adalah mimpi tentang seorang pria tanpa bakat yang telah berlatih dengan mengayunkan pedangnya selama beberapa dekade.</p>',
                'status' => 'Ongoing',
                'cover' => 'the-lazy-prince-becomes-a-genius-26431bc9bcb42f.webp'
            ]);
            
            Novel::create([
                'user_id' => 2,
                'title' => 'Seirei Gensouki LN',
                'slug' => 'seirei-gensouki-ln',
                'synopsis' => '<p>Amakawa Haruto meninggal sebelum dia berkesempatan untuk bersatu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu. Rio, seorang bocah lelaki yang tinggal di daerah kumuh mencari balas dendam untuk ibunya yang dibunuh dengan darah dingin di depannya ketika dia baru berusia lima tahun.</p><p>Ada bumi yang banyak diketahui dan ada dunia alternatif. Dua orang, masing-masing dengan latar belakang dan nilai-nilai mereka sendiri. Untuk alasan yang aneh, ingatan dan kepribadian Haruto, orang yang seharusnya mati bangkit kembali di tubuh Rio. Karena keduanya bingung atas ingatan dan kepribadian mereka yang menyatu bersama, Rio (Haruto) memutuskan untuk hidup di dunia baru ini.</p><p>Bersamaan dengan ingatan Haruto, Rio membangkitkan kekuatan yang tidak dikenal tetapi istimewa. Jika dia menggunakannya, sepertinya dia bisa hidup lebih baik, tapi sebelum itu, Rio mengalami penculikan yang mengakibatkan melibatkan dua putri Kerajaan Bertam.</p><p>Setelah menyelamatkan para putri, Rio diberikan beasiswa untuk menghadiri Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa. Latar belakangnya adalah anak yatim miskin yang pernah tinggal di daerah kumuh, sekolah yang penuh dengan bangsawan agak tempat yang menjijikkan untuk tinggal di.</p>',
                'status' => 'End',
                'cover' => 'seirei-gensouki-ln-26431bd143e0b9.webp'
            ]);
            
            // Novel::create([
            //     'user_id' => 2,
            //     'title' => 'Genjitsu Shugi Yuusha no Oukoku Saikenki LN',
            //     'slug' => 'genjitsu-shugi-yuusha-no-oukoku-saikenki-ln',
            //     'synopsis' => '<p>&#8220;O, Pahlawan!&#8221; Dengan kalimat klise itu, Kazuya Souma menemukan dirinya dipanggil ke dunia lain dan petualangannya –– tidak dimulai. Setelah ia mempresentasikan rencananya untuk memperkuat negara secara ekonomi dan militer, raja menyerahkan tahta kepadanya dan Souma mendapati dirinya dibebani dengan memerintah negara! Terlebih lagi, dia telah bertunangan dengan putri raja sekarang &#8230; ?! Untuk mengembalikan negara, Souma memanggil yang bijak, yang berbakat, dan yang berbakat di sisinya. Lima orang berkumpul di hadapan Souma yang baru saja dinobatkan. Apa saja banyak talenta dan kemampuan yang mereka miliki &#8230; ?! Apa jalan pandangannya sebagai seorang realis yang menjatuhkan Souma dan orang-orang di negaranya? Serangkaian fantasi administrasi administratif yang dipindahtangankan ke dunia lain dimulai di sini!</p>',
            //     'status' => 'Ongoing',
            //     'cover' => 'genjitsu-shugi-yuusha-no-oukoku-saikenki-ln-26431bc3dec2d0.webp'
            // ]);

            Novel::create([
                'user_id' => 2,
                'title' => 'Yumemiru Danshi wa Genjitsushugisha LN',
                'slug' => 'yumemiru-danshi-wa-genjitsushugisha-ln',
                'synopsis' => '<p>Sajou Wataru tergila-gila dengan teman sekelasnya Natsukawa Aika sampai-sampai dia hidup dalam lamunan tentang cinta dan hubungan timbal balik mereka, tanpa henti mendekatinya di setiap kesempatan. Namun, suatu hari, Wataru siuman, dan harus menghadapi kenyataan.</p><p>“Tidak mungkin aku cocok untuk bunga yang tidak bisa dijangkau seperti dia, kan…?”</p><p>Setelah mulai melihat kenyataan sebagaimana adanya, Wataru mulai menjaga jarak tertentu dengan Aika, yang membuatnya kacau balau.</p><p>“Apakah dia…membenciku sekarang…?”</p><p>Hasil dari kesalahpahaman ini adalah kebangkitan perasaan bawah sadar yang datang dan pergi!? Maka dimulailah romcom dari perasaan sepihak yang saling menguntungkan, diganggu oleh kesalahpahaman!</p>',
                'status' => 'Ongoing',
                'cover' => 'yumemiru-danshi-wa-genjitsushugisha-ln-26431bbcd8127d.webp',
            ]);

            // Novel::create([
            //     'user_id' => 1,
            //     'title' => 'Sword Art Online LN',
            //     'slug' => 'sword-art-online-ln',
            //     'synopsis' => '<p>Pada tahun 2022, para gamer bersukacita karena Sword Art Online-sebuah VRMMORPG (Virtual Reality Massively Multiplayer Online Role Playing Game) tidak seperti yang lain-membuka pintu virtualnya, memungkinkan pemain untuk mengambil keuntungan penuh dari teknologi gaming terbaik: NerveGear, sebuah sistem yang memungkinkan pengguna untuk sepenuhnya membenamkan diri dalam dunia game dengan memanipulasi gelombang otak mereka untuk menciptakan pengalaman bermain game yang sepenuhnya realistis.</p><p>Namun ketika game ini ditayangkan, kegembiraan para pemain dengan cepat berubah menjadi horor ketika mereka menemukan bahwa, untuk semua fiturnya yang luar biasa, SAO kehilangan salah satu fungsi paling dasar dari MMORPG manapun &#8211; tombol log-out.</p><p>Sekarang terperangkap di dunia virtual Aincrad, tubuh mereka ditawan oleh NerveGear di dunia nyata, pengguna diberi ultimatum mengerikan: taklukkan semua seratus lantai Aincrad untuk mendapatkan kembali kebebasan Anda. Tapi di dunia SAO yang bengkok, &#8220;game over&#8221; berarti kematian tertentu &#8211; baik virtual maupun nyata &#8230;</p>',
            //     'status' => 'End',
            //     'cover' => 'sword-art-online-ln6431ba7b9ec1b.webp',
            // ]);

            // Novel::create([
            //     'user_id' => 2,
            //     'title' => 'Arifureta Shokugyou de Sekai Saikyou LN',
            //     'slug' => 'arifureta-shokugyou-de-sekai-saikyou-ln',
            //     'synopsis' => '<p>Hajime Naguno, seorang remaja berusia 17 tahun adalah seorang otaku biasa. Akan tetapi, hidupnya simpelnya yang penuh begadang hingga menginap di sekolah tiba-tiba menjadi jungkir balik ketika ia, bersama dengan teman-teman sekelasnya, ditarik ke dunia fantasi!</p><p>Mereka diperlakukan seperti seorang pahlawan dan diberi tugas untuk menyelamatkan umat manusia dari bahaya kepunahan.</p><p>Tapi, apa yang membuat impian idaman seorang otaku menjadi sebuah mimpi buruk bagi Hajime? Sementara teman-temannya mendapatkan job class dengan kekuatan dewa, job yang Hajime dapatkan, Synergist, hanya memiliki 1 skill transmutasi. Karena diejek dan dibully teman-temannya, ia pun merasa putus asa.</p><p>Apakah ia akan mampu bertahan di dalam dunia yang penuh monster dan iblis hanya dengan kekuatan setara tukang besi?</p>',
            //     'status' => 'Ongoing',
            //     'cover' => 'arifureta-shokugyou-de-sekai-saikyou-ln6431718fa854f.webp',
            // ]);

            // Novel::create([
            //     'user_id' => 2,
            //     'title' => 'Lycois Recoil',
            //     'slug' => 'lycois-recoil',
            //     'synopsis' => '<p>Takina Inoue, seorang gadis sekolah menengah yang bekerja sebagai anggota satuan tugas wanita pembunuh dan mata-mata yang dikenal sebagai "Lycoris" yang dikirim untuk melenyapkan penjahat dan teroris di Tokyo, dikenai sanksi oleh atasannya di agensi DA karena tidak mematuhi perintah untuk menyelamatkan seorang rekan. Dia dipindahkan untuk bekerja dengan agen Lycoris elit Chisato Nishikigi di salah satu cabang agensi, yang beroperasi di bawah naungan sebuah kafe, yang disebut "LycoReco".</p>',
            //     'status' => 'Ongoing',
            //     'cover' => 'lycois-recoil6431bde167a36.webp',
            // ]);

            // Novel::create([
            //     'user_id' => 2,
            //     'title' => 'Eromanga Sensei',
            //     'slug' => 'eromanga-sensei',
            //     'synopsis' => '<p>Eromanga-sensei – Masamune Izumi adalah seorang siswa SMA yang juga seorang penulis novel yang cukup terkenal. Dalam pekerjaannya Masamune Izumi dipanggil sebagai Izumi –sensei dan memliki patner kerja di dunia maya bernama Eromanga sensei. Eromanga – sense yang sebagai penggambar dari manga buatan novel Izumi dan covernya dia cukup berbakat dalam bidangnya.. dia pun cukup terkenal .. tapi dia orang yang misterius , dia bahkan tidak pernah menunjukan identitasnya.</p><p>Dalam keluarganya, Izumi memiliki 1 masalah, yaitu adiknya. Adik tirinya yang bernama Sagiri itu dalam 1 tahun tidak pernah keluar dari kamarnya dikarenakan 1 tahun yang lalu ibu kandungnya meninggal. Permintaan Izumi hanya 1 yaitu dia ingin melihat wajah adiknya yang kawai imut itu dan makan bersama seperti waktu dulu lagi.</p><p>Suatu hari Eromanga – sensei menayangkan sebuah siaran langsung menggambar yang ditonton oleh fans fansnya serta patnernya Izumi. Dalam tayangan siaran langsung itu Eromanga – sensei membuat rekaman di kamarnya dan disaat itu pula Izumi seperti familiar dengan kamar tersebut terutama pada tempat makan yang sering digunakan Izumi untuk mengantarkan makanan ke Sagiri. Dan waktu itu pula terkuak bahwa adiknya sendiri adalah sang Eromaga – sensei..</p>',
            //     'status' => 'Ongoing',
            //     'cover' => 'eromanga-sensei6431bee6c7923.webp',
            // ]);

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

        for($j = 1; $j < 4; $j++) {
            for($i = 1; $i <  3; $i++) {
                GenreNovel::create([
                    'novel_id' => $j,
                    'genre_id' => $i
                ]);
            } 
        }

        for($j = 1; $j < 4; $j++) {
            for($i = 1; $i < 8; $i++) {
                Volume::create([
                    'novel_id' => $j,
                    'title' => 'Volume ' . $i,
                    'slug' => 'volume-' . $i,
                    'story' => '<p>“Aku menonton film yang kamu ceritakan kemarin! Itu sangat bagus, saya ingin berterima kasih untuk itu.</p><p>&#8220;Aku mengerti &#8230; aku senang mendengarnya.&#8221;</p><p>Melihat betapa polosnya Flora berbicara membuat Haruto tertawa kecil sambil tersenyum.</p><p>“Putri putri duyung dan pangeran manusia. Tidak ada kesenjangan dalam status sosial mereka, tetapi konflik yang lahir dari kesenjangan dalam spesies mereka adalah…”</p><p>Flora kemudian mulai dengan antusias memberi tahu Haruto pemikirannya tentang film tersebut, menarik perhatian seluruh kelas.</p><h2>Waktu Saudara</h2><p>Di dalam Kastil Galarc, di mansion yang diberikan kepada Rio oleh Raja Francois, semua orang di mansion bersiap untuk berangkat ke wilayah Duke Gregory untuk menghadapi Saint Erica. Tidak seperti biasanya suasana rumah yang harmonis, suasana menjadi tegang memikirkan pertarungan ulang Rio dan Erica yang akan segera terjadi.</p><p>Jika monster itu muncul lagi&#8230; Aku harus melakukan semua yang aku bisa untuk mengalahkannya, pikir Rio dalam hati sambil duduk di tempat tidur di kamarnya. Kemudian, seseorang mengetuk pintu.</p><p>&#8220;Silahkan masuk.&#8221; Rio menyeka ekspresi tegas dari wajahnya saat dia memanggil siapa pun yang ada di luar pintu. Pintu perlahan terbuka, memperlihatkan Latifa.</p><p>&#8220;Onii-chan,&#8221; katanya cemas.</p><p>“Ada apa, Latifa?”</p><p>Alasan kekhawatirannya jelas. Karena itu, Rio memastikan untuk berbicara dengan nada secerah mungkin untuk meyakinkan adik perempuannya.</p><p>&#8220;Tidak. Aku hanya ingin tetap di sampingmu,” kata Latifa menjelaskan permintaan remehnya sambil memperhatikan wajah Rio untuk melihat reaksinya.</p><p>&#8220;Saya mengerti. Kemarilah kalau begitu.”</p><p>&#8220;Oke.&#8221;</p><p>Rio menepuk tempat tidur di sampingnya, mengundangnya untuk duduk bersama. Latifa mengangguk dengan ekspresi lega dan segera pergi.</p><p>&#8220;Ehehe.&#8221; Dia menempel ke sisi Rio dan menggosokkan pipinya ke lengan kakaknya.</p><p>&#8220;Itu agak terlalu dekat,&#8221; kata Rio dengan senyum tegang. Tapi dia tidak menyuruhnya menjauhkan diri; jika ini yang diperlukan untuk meredakan kekhawatiran adik perempuannya, maka dia dengan senang hati akan menerima dirinya untuk dipeluk.</p><p>&#8220;Onii Chan.&#8221;</p><p>&#8220;Ya?&#8221;</p><p>&#8220;Tidak. Hee hee.” Latifa tersenyum senang.</p><p>&#8220;Saya mengerti.&#8221; Melihat senyumnya membuat Rio ikut tersenyum. Setelah itu, Latifa terus dimanjakan oleh Rio, menikmati waktunya bersama sang kakak.</p><p>Pertarungan dengan Saint Erica akan berlangsung malam berikutnya.</p><h2>Rumah untuk Kembali</h2><p>Kastil Galarc. Di mansion yang diberikan kepada Rio oleh Raja Francois, tak lama setelah Charlotte dan Satsuki mulai tinggal di sana juga&#8230;</p><p>Keduanya memiliki kamar mereka sendiri di kastil utama, tetapi setelah merasa sulit untuk pergi ke dan dari mansion setiap hari, mereka memiliki kamar di dalam mansion yang disiapkan untuk mereka.</p><p>Namun, Charlotte masih harus pergi ke kastil untuk tugas resminya. Hari ini adalah hari lain seperti itu.</p><p>“Aku akan kembali ke mansion sekarang,” katanya, mengumumkan kepergiannya setelah menyelesaikan laporan biasanya.</p><p>&#8220;Baiklah,&#8221; Francois setuju dengan anggukan, tapi—</p><p>&#8220;Bagaimana rasanya tinggal di mansion?&#8221; dia bertanya padanya setelah dia berbalik.</p><p>&#8220;Itu sangat menyenangkan. Semua orang memperlakukan saya dengan baik, ”Charlotte segera menjawab sambil tersenyum.</p><p>&#8220;Saya mengerti. Anda boleh pergi sekarang.” Merasa bahwa kata-katanya tulus, Francois tertawa kecil.</p><p>&#8220;Benar. Jika Anda permisi.</p><p>Charlotte meninggalkan kantor ayahnya dan keluar dari kastil, berjalan menuju mansion tempat Rio dan yang lainnya tinggal.</p><p>Tapi dalam perjalanan&#8230;</p><p><em>Sungguh perasaan yang segar.</em></p><p>Rumah besar tempat semua orang tinggal terletak di lahan yang sama dengan kastil. Dia baru saja melewati kastil, namun pemandangan yang dia lihat terasa sangat berbeda. Apakah karena dia tinggal di tempat lain sekarang? Untuk beberapa alasan, perasaan itu memenuhi dirinya dengan sukacita. Charlotte tersenyum lembut.</p><p><em>Lebih baik pergi.</em></p><p>Dia begitu tenggelam dalam emosinya, dia berhenti berjalan untuk menikmati pemandangan. Charlotte melanjutkan perjalanannya ke mansion.</p><p>Begitu dia sampai di mansion dan berjalan melewati pintu depan, dia mendengar suara-suara hidup datang dari arah dapur dan ruang makan. Sepertinya semua orang berkumpul di dapur. Charlotte berjalan menyusuri koridor ke arah itu.</p><p>“Selamat datang di rumah, Char,” kata Satsuki, menyadari kehadirannya terlebih dahulu. Orang lain di sekitarnya menggemakan sapaannya dengan &#8220;Selamat datang di rumah, Putri Charlotte.&#8221;</p><p>&#8220;&#8230;&#8221; Charlotte berkedip,</p><p>“Ada yang salah, Char? Untuk apa kau hanya berdiri di sana?”</p><p>&#8220;Oh&#8230; aku hanya tidak terbiasa mendengar &#8216;Selamat datang di rumah&#8217; seperti ini.&#8221;</p><p>&#8220;Oh begitu. Malu?&#8221; Satsuki bertanya sambil menyeringai.</p>'
                ]);
            }
        }
    }
}
