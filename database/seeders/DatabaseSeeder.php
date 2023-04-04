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

        Volume::create([
            'novel_id' => 2,
            'judul' => 'Volume 22 Chapter 13',
            'slug' => 'volume-22-chapter-13',
            'story' => '<h2>Tempat Tidur Raja Naga</h2><p>Di Kerajaan Galarc, pagi hari setelah Sora muncul di hadapan Rio sebagai murid Raja Naga&#8230;</p><p>Sangat gembira pada reuni yang telah lama ditunggu-tunggu dengan reinkarnasi Raja Naga, Sora terus menangis tanpa henti. Untuk menghiburnya, Rio membawanya ke kamar tempat mereka bisa tidur terpisah.</p><p>Demikianlah datang pagi hari. Aishia, Rio, dan Sora tidur terpisah di kamar tidur dengan tiga tempat tidur, tapi Rio bangun pagi untuk membuat sarapan. Suara tenang napas Aishia bisa terdengar di ruangan itu.</p><p>&#8220;Mmph&#8230;Raja Naga&#8230;&#8221;</p><p>Obrolan tidur Sora juga terdengar. Namun dia adalah orang pertama yang bangun.</p><p>&#8221; Menguap &#8230; Ap—?!&#8221; Dia perlahan membuka matanya dan menguap dengan manis. Tetapi ketika dia mengingat bagaimana dia bertemu Rio kemarin, dia duduk di tempat tidur dengan terengah-engah.</p><p>&#8220;Raja Naga&#8230;?&#8221;</p><p>Bagaimana jika apa yang terjadi kemarin adalah semua mimpi? Sora dengan cemas melihat sekeliling ruangan, mendesah lega saat melihat Aishia masih tidur. Sepertinya dia sama sekali tidak bermimpi.</p><p>&#8220;Hehe&#8230;hehehehe&#8230;&#8221;</p><p>Kenangan tadi malam menyerbu kepalanya. Kegembiraan melihat Raja Naga setelah seribu tahun menguasai setiap pikiran lain di kepalanya, membuatnya tersenyum bahagia. Namun, Raja Naga sendiri tidak terlihat. Dia yakin dia pergi tidur di tempat tidur di sampingnya kemarin &#8230;</p><p>&#8220;Dimana dia&#8230;?&#8221;</p><p>Tatapan Sora terkunci ke tempat tidur tempat Rio tidur. Selimutnya sudah diluruskan dengan kasar, tapi ternyata Rio tidur di sana tadi malam.</p><p><em>Di-Di sinilah Raja Naga tidur&#8230;</em></p><p>Diijinkan untuk tidur di samping sosok yang begitu luhur sangat berarti bagi Sora. Hanya melihat ke belakang pada saat itu membuat jantungnya berdebar kencang.</p><p>&#8220;&#8230;!&#8221;</p><p>Sora melompat lebih dulu ke tempat tidur Rio.</p><p>&#8220;Ha! Aha ha!”</p><p>Tindakan Sora yang keterlaluan, memalukan, dan tak terpikirkan membuatnya merasa bersalah dan gembira.</p><p>“Sora? Selamat pagi &#8230;&#8221; Aishia bangun dan menggosok matanya dengan mengantuk.</p><p>&#8220;Eeeeeek!&#8221; Sora melompat ketakutan. Dia dengan cepat pindah kembali ke tempat tidurnya sendiri.</p><p>&#8220;Apa yang salah?&#8221; Aishia memiringkan kepalanya dengan rasa ingin tahu, melewatkan apa yang Sora lakukan.</p><p>“NN-Tidak ada sama sekali! Jangan menakuti Sora dengan bangun tiba-tiba. Astaga!” Sora mencicit.</p><h2>Ratu Arab ☆</h2><p>Amakawa Haruto adalah siswa sekolah menengah Jepang tahun kedua, dan Christina serta Flora adalah saudara perempuan dalam pertukaran di sekolah menengah Haruto, berasal dari negara seberang laut yang sama dengan Profesor Celia. Christina satu tahun dengan Haruto, sedangkan Flora satu tahun lebih muda.</p><p>Suatu sore, selama liburan musim panas, para suster sedang bersantai di rumah mereka.</p><p>“Lakon selanjutnya yang akan kita lakukan adalah berjudul Aladdin dan Lampu Ajaib ,” kata Flora kepada saudara perempuannya. “Permintaan resmi akan diajukan ke OSIS di kemudian hari, tapi aku berharap kamu juga bisa tampil di drama itu.”</p><p>Flora di klub drama, sedangkan Christina di OSIS bersama Satsuki, Miharu, dan Haruto. Klub drama hanya terdiri dari beberapa gadis, jadi anggota OSIS biasanya membantu selama acara dengan mengisi peran.</p><p>“Yah, kurasa aku tidak keberatan…” Sedikit memalukan untuk berakting di depan orang lain, tapi ini adalah permintaan dari adik perempuan tercintanya. Christina ingin mengabulkan setiap keinginan Flora yang dia bisa, jadi dia langsung setuju.</p><p>“Aku akan senang jika kamu berperan sebagai putri raja! Saya pikir itu akan cocok untuk Anda! Flora merekomendasikan peran putri kepada Christina dengan senyum berseri-seri.</p><p>“Kamu juga bisa berperan sebagai putri …”</p><p>“Tidak, tidak, aku tidak akan pernah bisa! Dan sebenarnya, aku sudah menyiapkan kostum untukmu! Saya menggunakan pakaian dari tarian yang disebut tari perut sebagai referensi untuk membuat kostum Arab sesuai ukuran Anda!” Flora mengambil kantong kertas yang ditinggalkannya di lantai di samping sofa.</p><p>“Kamu benar-benar siap …”</p><p>“Aku hanya tahu kamu akan terlihat hebat di dalamnya! Silakan mencobanya!”</p><p>“B-Sekarang?”</p><p>&#8220;Ya! Saya mengukurnya sendiri, jadi saya yakin tidak apa-apa, tetapi beri tahu saya jika ukurannya perlu diperbaiki di mana pun.”</p><p>&#8220;Baik&#8230; Tunggu sebentar.&#8221; Christina sangat lemah terhadap permintaan adik perempuannya. Dia menerima kantong kertas dan kembali ke kamarnya untuk berganti kostum.</p><p>“Ini&#8230; Ini pada dasarnya pakaian dalam. Dan kainnya tembus pandang.” Christina telah selesai berganti ke kostum yang telah disiapkan Flora. Dia memiliki keraguan tentang jumlah paparan kulit saat dia berganti pakaian, tetapi dia cukup perhatian pada adik perempuannya untuk menyelesaikannya. Namun, dia tidak berniat turun ke ruang tamu tempat Flora menunggu.</p><p>Aku harus memberitahunya untuk mempertimbangkan kembali kostumnya, Christina memutuskan sambil mendesah, bergerak untuk mengganti pakaiannya sendiri.</p><p>&#8220;Aku masuk, Christina.&#8221;</p><p>Saat itu, Flora menerobos masuk ke kamar Christina, terlalu tidak sabar untuk menunggu lebih lama lagi.</p><p>&#8220;H-Hei, Flora&#8230; Astaga.&#8221; Christina mendesah pasrah.</p><p>&#8220;Bagaimana menurutmu?&#8221; tanya Flora, meminta pendapatnya dengan tatapan penuh harap.</p><p>“Itu terlalu terbuka. Aku tidak bisa berdiri di depan semua pria yang memakai ini. Tolong ubah desainnya menjadi sesuatu yang tidak terlalu mencolok,” Christina meminta dengan blak-blakan.</p><p>“Aww… kupikir kau akan terlihat cantik dengan itu…” Flora menatap Christina dalam gaun Arab dengan tatapan kecewa.</p><p>“K-Kamu tidak akan mengubah pikiranku hanya karena kamu membuat wajah seperti itu!”</p><p>“Tapi kamu sangat cantik seperti ini. Sayang sekali membuat ulang tanpa menunjukkannya kepada siapa pun&#8230; Oh, saya tahu! Anda akan baik-baik saja dengan menunjukkan Haruto, kan?</p><p>“Tidak, aku tidak mau! Kenapa aku melakukan itu dengan pakaian memalukan seperti ini?!”</p><p>“Aku sudah mengirim sms kepada semua orang di OSIS untuk datang saat kamu berganti pakaian.”</p><p>“A-Aku akan menggantinya sekarang!”</p><p>Dia tidak bisa membiarkan Haruto melihatnya dengan pakaian terbuka ini. Christina dengan cepat mulai mengganti kostumnya, tetapi bagaimana kedatangan Satsuki nantinya akan mengakibatkan dia berganti kembali ke gaun Arab adalah kisah untuk hari lain.</p><h2>Masakan Raja Naga</h2><p>Sora adalah seorang gadis muda dan murid dari Raja Naga. Pertumbuhan fisiknya telah berhenti saat dia menjadi murid, jadi dia masih terlihat seperti berusia tujuh atau delapan tahun setelah seribu tahun. Menjadi seorang murid juga telah menghentikan pertumbuhan mentalnya, menjadikan perilakunya seperti seorang gadis muda juga.</p><p>Sora mencintai tuannya, Raja Naga. Alih-alih cinta romantis, dia memujanya seperti dewa. Karena itu, saat dia bertemu dengan reinkarnasinya, Rio, dia malah mengarahkan kekagumannya padanya.</p><p>&#8220;Raja Naga!&#8221; dia memanggilnya dengan gembira.</p><p>“Ya, Sora?”</p><p>“Sarapan hari ini benar-benar enak!” Sora berseri-seri.</p><p>&#8220;Terima kasih. Aku senang kau menikmatinya.”</p><p>“Itu karena itu bagus!” Sora kembali memakan sarapannya. Dia mengisi pipinya seperti tupai atau hamster, membuat ekspresi kebahagiaan murni.</p><p>Sejak menjadi murid, tubuhnya tidak lagi bisa jatuh sakit atau berubah bentuk. Itu sebabnya dia memiliki nafsu makan yang besar meskipun penampilannya seperti anak kecil, dan dia mampu makan semua makanan berminyak yang dia inginkan, kapan saja. Hal yang sama berlaku untuk Aishia sebagai roh, dan dia juga makan banyak. Sejak mereka bertiga mulai hidup bersama, Rio harus menyiapkan makanan tambahan di pagi hari.</p><p>&#8220;Sora sangat senang bisa bersama Raja Naga lagi, memakan masakan buatan tangannya,&#8221; kata Sora gembira. Kegembiraannya begitu berlebihan, Rio merasa malu.</p><p>&#8220;Ha ha.&#8221; Dia tersenyum sambil melihat Sora makan.</p><p>“ Nom nom . Wah&#8230; Daging ini! Ini sangat bagus!” Ekspresi Sora berubah dengan jelas di setiap gigitan, tapi dia paling bahagia saat dia makan daging.</p><p><em>Layak dimasak untuk seseorang saat mereka sangat menikmatinya. Apa yang harus saya buat selanjutnya? Rasa apa yang paling disukai Sora? </em>Rio menelusuri repertoar hidangan daging di kepalanya.</p><p>“Seperti kata Sora, masakan Haruto enak. Memakannya menghangatkan hati, ”Aishia tiba-tiba menambahkan. Dengan kepribadiannya yang tidak banyak bicara, dia makan dalam diam sampai sekarang.</p><p>“Aishia benar! Semua yang dibuat Raja Naga memiliki nilai nutrisi dan efek pemulihan!” Sora mendengus bangga.</p><p>“Kurasa mereka tidak memiliki efek seperti itu &#8230;” Rio tersenyum kecut karena dilebih-lebihkan.</p><p>“Benar! Hati Sora hangat sekarang!” Sora menyatakan dengan tegas.</p><p>“Ya,” Aisyah mengangguk.</p><p>&#8220;Begitu ya&#8230; kalau begitu, aku harus memenuhi harapan itu ketika aku membuat makan siang,&#8221; jawab Rio malu-malu, dengan hati-hati mempertimbangkan apa yang akan dibuat untuk makanan mereka berikutnya.</p>'
        ]);

        Volume::create([
            'novel_id' => 2,
            'judul' => 'Volume 21',
            'slug' => 'volume-21',
            'story' => '<h2>Putri Bertemu Putri Duyung</h2><p>Amakawa Haruto adalah seorang anak laki-laki Jepang yang baru saja menjadi siswa tahun kedua di SMA-nya.</p><p>Suatu hari sepulang sekolah, tak lama setelah semester baru dimulai, dia berpapasan dengan seorang gadis bernama Flora Beltrum di koridor.</p><p>Saat Flora melihat wajahnya, dia menyambutnya dengan ceria.</p><p>“Selamat siang, Tuan Haruto!”</p><p>Flora adalah siswa pertukaran dari luar negeri yang baru tiba di sekolah mereka musim semi ini, dan kakak perempuannya Christina pindah ke kelas Haruto, jadi keduanya berkenalan.</p><p>“Halo Flora. Banyak sekali buku yang kamu punya di sana.”</p><p>Meskipun Haruto agak bingung dipanggil &#8220;mister&#8221;, dia memilih untuk bertanya tentang sepuluh buku aneh di tangan Flora.</p><p>&#8220;Aku sedang dalam perjalanan untuk mengembalikan ini ke perpustakaan.&#8221;</p><p>&#8220;Kamu banyak meminjam.&#8221;</p><p>&#8220;Saya suka membaca. Itu juga membantu bahasa Jepang saya, dan ada begitu banyak cerita menarik untuk dibaca.”</p><p>&#8220;Saya mengerti. Tapi itu pasti berat&#8230; Biarkan aku membantumu membawanya,” kata Haruto, bergerak sebelum Flora bisa menjawab. Dia mengambil lebih dari setengah buku dari tangan Flora, meringankan bebannya dengan jumlah yang cukup banyak.</p><p>&#8220;Hah? Th-Terima kasih. Apakah tidak berat untuk dibawa?”</p><p>“Tidak, ini bukan apa-apa. Ke perpustakaan, bukan? Mari kita pergi.&#8221;</p><p>&#8220;B-Benar!&#8221;</p><p>Haruto mulai berjalan menuju perpustakaan, dan Flora bergegas berjalan di sampingnya.</p><p>“Buku apa yang kamu suka, Flora?”</p><p>“Saya paling suka novel. Saat ini saya sedang mencari cerita dengan seorang putri sebagai protagonis. Apakah Anda memiliki judul yang dapat Anda rekomendasikan, Tuan Haruto?</p><p>“Biarkan aku berpikir. Bagaimana dengan dongeng dengan putri duyung? Oh, tapi ini cerita yang terkenal, jadi kamu mungkin sudah mengetahuinya.”</p><p>Dia mengatakan judul pertama yang terlintas di benaknya, tapi itu adalah karya terkenal yang sudah diketahui oleh setiap anak di Jepang. Namun&#8230;</p><p>“Tidak, aku tidak tahu yang itu. Tentang apa ini?&#8221;</p><p>Sepertinya Flora tidak mengenalnya.</p><p>&#8220;Hmm. Ini adalah cerita tentang putri duyung yang jatuh cinta dengan manusia.” Haruto memberikan ringkasan cerita yang sederhana, tidak ingin merusak plotnya.</p><p>“Oh, kedengarannya menarik! Aku akan pergi mencarinya!” Mata Flora berbinar karena penasaran.</p><p>“Tapi kudengar cerita aslinya agak gelap…”</p><p>&#8220;Hah? Betulkah?&#8221; Flora bertanya dengan takut-takut. Dia sepertinya takut dengan cerita-cerita menakutkan.</p><p>“Buku cerita bergambar tidak akan seseram itu, tapi akan jauh lebih pendek&#8230; Aku tahu, ada film anak-anak berdasarkan cerita itu, jadi mungkin kamu bisa menontonnya saja.”</p><p>“Film&#8230; Oke! Kalau begitu, aku bisa mengajak kakakku dan Profesor Celia untuk menontonnya bersama. Aku akan pergi mencarinya!”</p><p>Haruto kemudian memberi Flora judul filmnya, berjanji akan membantunya mencari film sepulang sekolah.</p><p>◇ ◇ ◇</p><p>Keesokan harinya, saat istirahat&#8230;</p><p>&#8220;Tuan Haruto!&#8221;</p><p>Flora datang mengunjungi kelas Haruto. Alih-alih memanggil adiknya, dia mencari wajah Haruto dan memanggil namanya begitu dia melihatnya.</p><p>Menjadi siswa pertukaran di luar negeri, Flora dan Christina terkenal di seluruh sekolah. Keanggunan dan pesona mereka membuat mereka sangat populer di kalangan anak laki-laki tahun kedua. Dan sekarang, yang lebih muda dari keduanya muncul di kelas tahun kedua, memanggil nama salah satu anak laki-laki.</p><p>“&#8230;”</p><p>Anak laki-laki — dan perempuan, dalam hal ini — semuanya terdiam dan menatap Haruto. Christina adalah satu-satunya yang tersenyum geli.</p><p>&#8220;Apakah ada masalah, Flora?&#8221; Haruto bertanya dengan canggung, dengan cepat berdiri untuk mendekati Flora. Dia tampak agak terganggu oleh tatapan itu.</p><p>“Aku menonton film yang kamu ceritakan kemarin! Itu sangat bagus, saya ingin berterima kasih untuk itu.</p><p>&#8220;Aku mengerti &#8230; aku senang mendengarnya.&#8221;</p><p>Melihat betapa polosnya Flora berbicara membuat Haruto tertawa kecil sambil tersenyum.</p><p>“Putri putri duyung dan pangeran manusia. Tidak ada kesenjangan dalam status sosial mereka, tetapi konflik yang lahir dari kesenjangan dalam spesies mereka adalah…”</p><p>Flora kemudian mulai dengan antusias memberi tahu Haruto pemikirannya tentang film tersebut, menarik perhatian seluruh kelas.</p><h2>Waktu Saudara</h2><p>Di dalam Kastil Galarc, di mansion yang diberikan kepada Rio oleh Raja Francois, semua orang di mansion bersiap untuk berangkat ke wilayah Duke Gregory untuk menghadapi Saint Erica. Tidak seperti biasanya suasana rumah yang harmonis, suasana menjadi tegang memikirkan pertarungan ulang Rio dan Erica yang akan segera terjadi.</p><p>Jika monster itu muncul lagi&#8230; Aku harus melakukan semua yang aku bisa untuk mengalahkannya, pikir Rio dalam hati sambil duduk di tempat tidur di kamarnya. Kemudian, seseorang mengetuk pintu.</p><p>&#8220;Silahkan masuk.&#8221; Rio menyeka ekspresi tegas dari wajahnya saat dia memanggil siapa pun yang ada di luar pintu. Pintu perlahan terbuka, memperlihatkan Latifa.</p><p>&#8220;Onii-chan,&#8221; katanya cemas.</p><p>“Ada apa, Latifa?”</p><p>Alasan kekhawatirannya jelas. Karena itu, Rio memastikan untuk berbicara dengan nada secerah mungkin untuk meyakinkan adik perempuannya.</p><p>&#8220;Tidak. Aku hanya ingin tetap di sampingmu,” kata Latifa menjelaskan permintaan remehnya sambil memperhatikan wajah Rio untuk melihat reaksinya.</p><p>&#8220;Saya mengerti. Kemarilah kalau begitu.”</p><p>&#8220;Oke.&#8221;</p><p>Rio menepuk tempat tidur di sampingnya, mengundangnya untuk duduk bersama. Latifa mengangguk dengan ekspresi lega dan segera pergi.</p><p>&#8220;Ehehe.&#8221; Dia menempel ke sisi Rio dan menggosokkan pipinya ke lengan kakaknya.</p><p>&#8220;Itu agak terlalu dekat,&#8221; kata Rio dengan senyum tegang. Tapi dia tidak menyuruhnya menjauhkan diri; jika ini yang diperlukan untuk meredakan kekhawatiran adik perempuannya, maka dia dengan senang hati akan menerima dirinya untuk dipeluk.</p><p>&#8220;Onii Chan.&#8221;</p><p>&#8220;Ya?&#8221;</p><p>&#8220;Tidak. Hee hee.” Latifa tersenyum senang.</p><p>&#8220;Saya mengerti.&#8221; Melihat senyumnya membuat Rio ikut tersenyum. Setelah itu, Latifa terus dimanjakan oleh Rio, menikmati waktunya bersama sang kakak.</p><p>Pertarungan dengan Saint Erica akan berlangsung malam berikutnya.</p><h2>Rumah untuk Kembali</h2><p>Kastil Galarc. Di mansion yang diberikan kepada Rio oleh Raja Francois, tak lama setelah Charlotte dan Satsuki mulai tinggal di sana juga&#8230;</p><p>Keduanya memiliki kamar mereka sendiri di kastil utama, tetapi setelah merasa sulit untuk pergi ke dan dari mansion setiap hari, mereka memiliki kamar di dalam mansion yang disiapkan untuk mereka.</p><p>Namun, Charlotte masih harus pergi ke kastil untuk tugas resminya. Hari ini adalah hari lain seperti itu.</p><p>“Aku akan kembali ke mansion sekarang,” katanya, mengumumkan kepergiannya setelah menyelesaikan laporan biasanya.</p><p>&#8220;Baiklah,&#8221; Francois setuju dengan anggukan, tapi—</p><p>&#8220;Bagaimana rasanya tinggal di mansion?&#8221; dia bertanya padanya setelah dia berbalik.</p><p>&#8220;Itu sangat menyenangkan. Semua orang memperlakukan saya dengan baik, ”Charlotte segera menjawab sambil tersenyum.</p><p>&#8220;Saya mengerti. Anda boleh pergi sekarang.” Merasa bahwa kata-katanya tulus, Francois tertawa kecil.</p><p>&#8220;Benar. Jika Anda permisi.</p><p>Charlotte meninggalkan kantor ayahnya dan keluar dari kastil, berjalan menuju mansion tempat Rio dan yang lainnya tinggal.</p><p>Tapi dalam perjalanan&#8230;</p><p><em>Sungguh perasaan yang segar.</em></p><p>Rumah besar tempat semua orang tinggal terletak di lahan yang sama dengan kastil. Dia baru saja melewati kastil, namun pemandangan yang dia lihat terasa sangat berbeda. Apakah karena dia tinggal di tempat lain sekarang? Untuk beberapa alasan, perasaan itu memenuhi dirinya dengan sukacita. Charlotte tersenyum lembut.</p><p><em>Lebih baik pergi.</em></p><p>Dia begitu tenggelam dalam emosinya, dia berhenti berjalan untuk menikmati pemandangan. Charlotte melanjutkan perjalanannya ke mansion.</p><p>Begitu dia sampai di mansion dan berjalan melewati pintu depan, dia mendengar suara-suara hidup datang dari arah dapur dan ruang makan. Sepertinya semua orang berkumpul di dapur. Charlotte berjalan menyusuri koridor ke arah itu.</p><p>“Selamat datang di rumah, Char,” kata Satsuki, menyadari kehadirannya terlebih dahulu. Orang lain di sekitarnya menggemakan sapaannya dengan &#8220;Selamat datang di rumah, Putri Charlotte.&#8221;</p><p>&#8220;&#8230;&#8221; Charlotte berkedip,</p><p>“Ada yang salah, Char? Untuk apa kau hanya berdiri di sana?”</p><p>&#8220;Oh&#8230; aku hanya tidak terbiasa mendengar &#8216;Selamat datang di rumah&#8217; seperti ini.&#8221;</p><p>&#8220;Oh begitu. Malu?&#8221; Satsuki bertanya sambil menyeringai.</p><p>&#8220;Ya. Tapi aku juga senang. Senang mendengarnya dari orang lain.”</p><p>Charlotte memiliki mata yang tajam dan tajam. Itulah mengapa dia tahu bahwa &#8220;selamat datang di rumah&#8221; yang dikatakan semua orang kepadanya adalah karena mereka benar-benar berpikir wajar baginya untuk kembali ke rumah ini — yang membuatnya sangat senang.</p><p>&#8220;Saya mengerti. Tapi akan lebih baik lagi jika kami mendengar beberapa kata darimu juga, Char. Kata-kata yang harus diucapkan untuk menanggapi seseorang yang menyambutmu pulang…” Satsuki melanjutkan dengan nada sugestif.</p><p>&#8220;Aku senang berada di rumah.&#8221; Charlotte segera menjawab.</p><p>&#8220;Yup, senang kau kembali.&#8221; Kali ini, Satsuki yang merespons dengan malu-malu. Yang lain juga tersenyum malu-malu saat mereka mengulangi perasaan mereka.</p><p>“Selain itu, untuk apa kalian semua berkumpul di dapur?”</p><p>“Kami sedang membuat makanan ringan. Semua orang menunggu kepulanganmu, Char. Ini baru saja selesai memasak, jadi mari kita mandi dan makan bersama.”</p><p>“Wah, kedengarannya menyenangkan. Saya ingin sekali.&#8221;</p><p>Itu hanya hari lain di mansion.</p>'
        ]);

        Volume::create([
            'novel_id' => 2,
            'judul' => 'Volume 20',
            'slug' => 'volume-20',
            'story' => '<p>“Aku menonton film yang kamu ceritakan kemarin! Itu sangat bagus, saya ingin berterima kasih untuk itu.</p><p>&#8220;Aku mengerti &#8230; aku senang mendengarnya.&#8221;</p><p>Melihat betapa polosnya Flora berbicara membuat Haruto tertawa kecil sambil tersenyum.</p><p>“Putri putri duyung dan pangeran manusia. Tidak ada kesenjangan dalam status sosial mereka, tetapi konflik yang lahir dari kesenjangan dalam spesies mereka adalah…”</p><p>Flora kemudian mulai dengan antusias memberi tahu Haruto pemikirannya tentang film tersebut, menarik perhatian seluruh kelas.</p><h2>Waktu Saudara</h2><p>Di dalam Kastil Galarc, di mansion yang diberikan kepada Rio oleh Raja Francois, semua orang di mansion bersiap untuk berangkat ke wilayah Duke Gregory untuk menghadapi Saint Erica. Tidak seperti biasanya suasana rumah yang harmonis, suasana menjadi tegang memikirkan pertarungan ulang Rio dan Erica yang akan segera terjadi.</p><p>Jika monster itu muncul lagi&#8230; Aku harus melakukan semua yang aku bisa untuk mengalahkannya, pikir Rio dalam hati sambil duduk di tempat tidur di kamarnya. Kemudian, seseorang mengetuk pintu.</p><p>&#8220;Silahkan masuk.&#8221; Rio menyeka ekspresi tegas dari wajahnya saat dia memanggil siapa pun yang ada di luar pintu. Pintu perlahan terbuka, memperlihatkan Latifa.</p><p>&#8220;Onii-chan,&#8221; katanya cemas.</p><p>“Ada apa, Latifa?”</p><p>Alasan kekhawatirannya jelas. Karena itu, Rio memastikan untuk berbicara dengan nada secerah mungkin untuk meyakinkan adik perempuannya.</p><p>&#8220;Tidak. Aku hanya ingin tetap di sampingmu,” kata Latifa menjelaskan permintaan remehnya sambil memperhatikan wajah Rio untuk melihat reaksinya.</p><p>&#8220;Saya mengerti. Kemarilah kalau begitu.”</p><p>&#8220;Oke.&#8221;</p><p>Rio menepuk tempat tidur di sampingnya, mengundangnya untuk duduk bersama. Latifa mengangguk dengan ekspresi lega dan segera pergi.</p><p>&#8220;Ehehe.&#8221; Dia menempel ke sisi Rio dan menggosokkan pipinya ke lengan kakaknya.</p><p>&#8220;Itu agak terlalu dekat,&#8221; kata Rio dengan senyum tegang. Tapi dia tidak menyuruhnya menjauhkan diri; jika ini yang diperlukan untuk meredakan kekhawatiran adik perempuannya, maka dia dengan senang hati akan menerima dirinya untuk dipeluk.</p><p>&#8220;Onii Chan.&#8221;</p><p>&#8220;Ya?&#8221;</p><p>&#8220;Tidak. Hee hee.” Latifa tersenyum senang.</p><p>&#8220;Saya mengerti.&#8221; Melihat senyumnya membuat Rio ikut tersenyum. Setelah itu, Latifa terus dimanjakan oleh Rio, menikmati waktunya bersama sang kakak.</p><p>Pertarungan dengan Saint Erica akan berlangsung malam berikutnya.</p><h2>Rumah untuk Kembali</h2><p>Kastil Galarc. Di mansion yang diberikan kepada Rio oleh Raja Francois, tak lama setelah Charlotte dan Satsuki mulai tinggal di sana juga&#8230;</p><p>Keduanya memiliki kamar mereka sendiri di kastil utama, tetapi setelah merasa sulit untuk pergi ke dan dari mansion setiap hari, mereka memiliki kamar di dalam mansion yang disiapkan untuk mereka.</p><p>Namun, Charlotte masih harus pergi ke kastil untuk tugas resminya. Hari ini adalah hari lain seperti itu.</p><p>“Aku akan kembali ke mansion sekarang,” katanya, mengumumkan kepergiannya setelah menyelesaikan laporan biasanya.</p><p>&#8220;Baiklah,&#8221; Francois setuju dengan anggukan, tapi—</p><p>&#8220;Bagaimana rasanya tinggal di mansion?&#8221; dia bertanya padanya setelah dia berbalik.</p><p>&#8220;Itu sangat menyenangkan. Semua orang memperlakukan saya dengan baik, ”Charlotte segera menjawab sambil tersenyum.</p><p>&#8220;Saya mengerti. Anda boleh pergi sekarang.” Merasa bahwa kata-katanya tulus, Francois tertawa kecil.</p><p>&#8220;Benar. Jika Anda permisi.</p><p>Charlotte meninggalkan kantor ayahnya dan keluar dari kastil, berjalan menuju mansion tempat Rio dan yang lainnya tinggal.</p><p>Tapi dalam perjalanan&#8230;</p><p><em>Sungguh perasaan yang segar.</em></p><p>Rumah besar tempat semua orang tinggal terletak di lahan yang sama dengan kastil. Dia baru saja melewati kastil, namun pemandangan yang dia lihat terasa sangat berbeda. Apakah karena dia tinggal di tempat lain sekarang? Untuk beberapa alasan, perasaan itu memenuhi dirinya dengan sukacita. Charlotte tersenyum lembut.</p><p><em>Lebih baik pergi.</em></p><p>Dia begitu tenggelam dalam emosinya, dia berhenti berjalan untuk menikmati pemandangan. Charlotte melanjutkan perjalanannya ke mansion.</p><p>Begitu dia sampai di mansion dan berjalan melewati pintu depan, dia mendengar suara-suara hidup datang dari arah dapur dan ruang makan. Sepertinya semua orang berkumpul di dapur. Charlotte berjalan menyusuri koridor ke arah itu.</p><p>“Selamat datang di rumah, Char,” kata Satsuki, menyadari kehadirannya terlebih dahulu. Orang lain di sekitarnya menggemakan sapaannya dengan &#8220;Selamat datang di rumah, Putri Charlotte.&#8221;</p><p>&#8220;&#8230;&#8221; Charlotte berkedip,</p><p>“Ada yang salah, Char? Untuk apa kau hanya berdiri di sana?”</p><p>&#8220;Oh&#8230; aku hanya tidak terbiasa mendengar &#8216;Selamat datang di rumah&#8217; seperti ini.&#8221;</p><p>&#8220;Oh begitu. Malu?&#8221; Satsuki bertanya sambil menyeringai.</p>'
        ]);
    }
}
