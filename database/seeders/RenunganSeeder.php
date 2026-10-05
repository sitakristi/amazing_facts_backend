<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Renungan;

class RenunganSeeder extends Seeder
{
    public function run(): void
    {
        // Mengosongkan data lama agar bersih
        Renungan::query()->delete();

        // --- Oktober 2026 ---

        Renungan::create([
            'title' => 'Menjadi Berkat Nyata',
            'content' => "1 Yohanes 3:18 - \"Anak-anakku, marilah kita mengasihi bukan dengan perkataan atau dengan lidah, tetapi dengan perbuatan dan dalam kebenaran.\"\n\nKehidupan kerohanian yang murni tidak boleh berhenti hanya sampai di dalam ruang ibadah atau sebatas retorika perkataan yang indah saja. Iman yang hidup harus mewujudnyatakan dirinya ke dalam tindakan kasih yang praktis bagi sesama di sekeliling kita. Dunia hari ini sangat membutuhkan pembuktian kasih yang nyata, bukan sekadar teori.\n\nAda banyak orang di sekitar kita yang sedang mengalami kesusahan, kesepian, dan membutuhkan uluran tangan kasih. Melalui kepedulian yang kita tunjukkan, kita sedang menjadi perpanjangan tangan Tuhan untuk menjawab doa-doa mereka. Tindakan sederhana seperti mendengarkan dengan tulus atau berbagi berkat materi dapat menyalakan kembali harapan yang hampir padam.\n\nJangan menunda untuk berbuat baik ketika Tuhan memberikan kesempatan dan kemampuan kepadamu hari ini. Ringankanlah beban sesamamu dengan ketulusan hati tanpa mengharapkan balasan apa pun. Hidup yang berdampak dan menjadi berkat bagi sesama adalah ibadah yang sejati dan sangat menyenangkan hati Tuhan.",
            'image_url' => 'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=500',
            'date_display' => '03 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Keheningan di Hadirat-Nya',
            'content' => "Mazmur 46:11a - \"Diamlah dan ketahuilah, bahwa Akulah Allah!\"\n\nKehidupan modern sering kali menyeret kita ke dalam pusaran aktivitas yang sangat padat, kebisingan informasi, dan kesibukan yang tiada habisnya. Di tengah hiruk-pikuk dunia yang melelahkan ini, jiwa kita sering kali menjadi kering, stres, dan kehilangan kepekaan rohani. Kita membutuhkan waktu untuk menarik diri sejenak dari rutinitas.\n\nSediakanlah waktu khusus setiap hari untuk diam, tenang, dan bersekutu secara pribadi di hadirat Tuhan. Di dalam keheningan itulah, kita dapat melepaskan segala kepenatan dan mendengarkan suara Roh Kudus berbicara menuntun hati kita dengan jelas. Hadirat-Nya selalu menawarkan pemulihan, kesegaran rohani, dan perspektif baru yang menenteramkan.\n\nJangan biarkan kesibukan hari ini merampas waktu intimmu bersama Sang Pencipta. Duduklah di bawah kaki-Nya, serahkan segala beban kekhawatiranmu, dan biarkan damai-Nya memenuhi hatimu kembali. Di dalam ketenangan dan keheningan hadirat-Nya, kamu akan menemukan kekuatan baru untuk melangkah kembali dengan penuh kemenangan.",
            'image_url' => 'https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?w=500',
            'date_display' => '04 Oktober 2026',
        ]);
        
        Renungan::create([
            'title' => 'Fondasi Iman yang Kokoh',
            'content' => "Matius 7:24 - \"Setiap orang yang mendengar perkataan-Ku ini dan melakukannya, ia sama dengan orang yang bijaksana, yang mendirikan rumahnya di atas batu.\"\n\nMembangun kehidupan rohani di atas firman Tuhan diibaratkan seperti mendirikan sebuah bangunan di atas fondasi batu yang tebal dan kokoh. Ketika kehidupan berjalan dengan tenang tanpa masalah, kekuatan fondasi tersebut mungkin belum terlihat dengan jelas. Namun, kekuatan sejati dari iman kita baru akan teruji saat badai kehidupan, pencobaan, dan tantangan berat mulai datang melanda rohani kita.\n\nBanyak orang mencoba membangun kebahagiaan mereka di atas fondasi duniawi yang rapuh, seperti kekayaan, jabatan, atau pujian manusia. Ketika fondasi luar itu goyah, seluruh tatanan hidup mereka ikut hancur berantakan. Firman Tuhan menawarkan stabilitas yang melampaui segala situasi dunia, memberikan kita jangkar yang aman saat situasi sekitar berubah menjadi tidak menentu.\n\nOleh karena itu, marilah kita menyediakan waktu setiap hari untuk merenungkan dan menghidupi kebenaran firman-Nya. Ketaatan yang konsisten dalam melakukan kehendak Allah akan membentuk tameng rohani yang kuat. Bersama Tuhan, kita tahu bahwa badai sebesar apa pun yang datang menghampiri tidak akan pernah sanggup merobohkan iman kita.",
            'image_url' => 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=500',
            'date_display' => '05 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Setia dalam Perkara Kecil',
            'content' => "Lukas 16:10 - \"Barangsiapa setia dalam perkara-perkara kecil, ia setia juga dalam perkara-perkara besar.\"\n\nKarakter sejati seorang beriman tidak diuji saat ia sedang berdiri di atas panggung besar atau ketika sedang dilihat oleh banyak orang. Ujian karakter yang sesungguhnya terjadi di ruang-ruang sunyi, saat kita melakukan tanggung jawab kecil yang tampaknya sepele dan tidak mendapatkan pujian dari siapa pun. Di sinilah ketulusan motivasi hati kita sedang ditimbang oleh Tuhan.\n\nSering kali kita mengabaikan hal-hal kecil karena menganggapnya tidak berdampak besar bagi pelayanan atau masa depan kita. Kita cenderung menanti-nantikan kesempatan yang besar untuk berbuat sesuatu, tanpa menyadari bahwa kesetiaan pada perkara kecillah yang membentuk kapasitas kita. Tuhan melihat setiap detail kecil dari apa yang kita kerjakan dengan penuh rasa tanggung jawab.\n\nMari kita belajar melakukan setiap tugas harian kita, baik di rumah, tempat kerja, maupun komunitas, dengan kesetiaan yang penuh. Ketika kita mampu menjaga integritas dalam hal-hal kecil, Tuhan sedang mempersiapkan kita untuk menerima kepercayaan yang lebih besar. Jadikanlah setiap tindakan kecil hari ini sebagai bentuk persembahan yang terbaik bagi kemuliaan nama-Nya.",
            'image_url' => 'https://images.unsplash.com/photo-1416339306562-f3d12fefd36f?w=500',
            'date_display' => '06 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Kasih yang Mengubah',
            'content' => "1 Yohanes 4:19 - \"Kita mengasihi, karena Allah lebih dahulu mengasihi kita.\"\n\nKasih Allah adalah sebuah anugerah yang luar biasa karena Ia tidak menuntut kita untuk menjadi sempurna terlebih dahulu sebelum menerima-Nya. Ketika kita masih berada di dalam kelemahan dan kegagalan masa lalu, kasih-Nya sudah mengalir menerima kita apa adanya. Penerimaan yang tanpa syarat inilah yang menjadi awal dari pemulihan sejati di dalam hidup kita.\n\nNamun, kasih yang menerima apa adanya tidak pernah membiarkan kita tetap tinggal dalam kondisi yang sama. Kasih-Nya bekerja secara aktif di dalam hati kita, mengikis tabiat lama, dan memperbarui cara berpikir kita hari demi hari. Kita diubah dari dalam secara perlahan untuk menjadi ciptaan yang baru yang memancarkan kebaikan surgawi.\n\nSaat kita menyadari betapa dalamnya kita telah dikasihi, kita akan dimampukan untuk membagikan kasih itu kepada sesama di sekitar kita. Mengasihi orang lain menjadi lebih mudah ketika kita menyadari bahwa kita sendiri adalah penerima belas kasihan-Nya. Biarlah hidup kita menjadi saluran kasih yang membawa perubahan positif bagi dunia.",
            'image_url' => 'https://images.unsplash.com/photo-1518199266791-5375a83190b7?w=500',
            'date_display' => '07 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Menjaga Hati',
            'content' => "Amsal 4:23 - \"Jagalah hatimu dengan segala kewaspadaan, karena dari situlah terpancar kehidupan.\"\n\nHati merupakan pusat dari seluruh eksistensi hidup kita, tempat di mana keputusan, emosi, dan keinginan kita dibentuk. Apa yang tersimpan di dalam hati kita lambat laun akan tecermin melalui tindakan, perkataan, dan sikap hidup kita sehari-hari. Oleh karena itu, sangat penting bagi kita untuk bersikap waspada terhadap apa saja yang kita izinkan masuk ke dalam hati.\n\nDunia di sekitar kita sering kali menawarkan benih-benih negatif seperti kekhawatiran, kepahitan, kedegilan, dan kedengkian yang dapat merusak kerohanian. Jika kita tidak menjaga hati dengan ketat, benih-benih tersebut akan bertumbuh dan menghasilkan buah yang merugikan diri sendiri serta sesama. Menjaga hati membutuhkan disiplin rohani yang konsisten setiap saat.\n\nMari kita bersihkan hati kita hari ini dengan cara mengisinya dengan firman Tuhan dan ucapan syukur. Singkirkan segala kepahitan yang merusak kedamaian rohani, dan peliharalah pikiran yang murni serta damai sejahtera. Hati yang terjaga dengan baik akan senantiasa memancarkan aliran kehidupan dan berkat bagi orang-orang di sekitar kita.",
            'image_url' => 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?w=500',
            'date_display' => '08 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Pengharapan di Tengah Badai',
            'content' => "Roma 12:12 - \"Bersukacitalah dalam pengharapan, sabarlah dalam kesesakan, dan bertekunlah dalam doa!\"\n\nKehidupan manusia tidak pernah luput dari datangnya awan gelap persoalan yang sering kali hadir secara mendadak tanpa kita duga. Di tengah situasi yang sulit tersebut, sangat mudah bagi kita untuk kehilangan arah, merasa putus asa, dan menganggap seolah-olah Tuhan telah meninggalkan kita. Namun, firman Tuhan mengingatkan kita untuk tetap memiliki pengharapan yang teguh.\n\nPengharapan di dalam Kristus bukanlah sebuah impian kosong, melainkan sebuah sauh yang aman bagi jiwa kita. Kita harus selalu mengingat bahwa di balik tebalnya awan gelap persoalan yang sedang melanda, matahari kasih Tuhan tidak pernah berhenti bersinar atas hidup kita. Kasih-Nya tetap sama dan kuasa-Nya tidak pernah berkurang sedikit pun oleh badai apa pun.\n\nKetika tantangan datang menghadang, mari kita melatih diri untuk tidak fokus pada besarnya masalah, melainkan pada besarnya kuasa Tuhan kita. Bertekunlah di dalam doa dan nantikanlah pertolongan-Nya dengan penuh kesabaran. Pengharapan yang bersandar pada-Nya tidak akan pernah mengecewakan dan pasti membawa kita keluar sebagai pemenang.",
            'image_url' => 'https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?w=500',
            'date_display' => '09 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Ketulusan yang Berkenan',
            'content' => "1 Samuel 16:7b - \"Bukan yang dilihat manusia yang dilihat Allah; manusia melihat apa yang di depan mata, tetapi TUHAN melihat hati.\"\n\nSebagai manusia, kita sering kali terlalu sibuk membangun penampilan luar yang tampak mengagumkan agar mendapatkan pujian dan pengakuan dari sesama. Kita menghabiskan banyak energi untuk memastikan citra diri kita terlihat sempurna di mata publik. Namun, standar yang digunakan oleh Tuhan sangat berbeda dengan apa yang dinilai oleh dunia ini.\n\nTuhan tidak pernah terkesan dengan formalitas atau kepura-puraan rohani yang hanya tampak indah di permukaan saja. Pandangan-Nya menembus hingga ke bagian terdalam dari batin kita, melihat setiap motivasi, niat tersembunyi, dan ketulusan dari apa yang kita lakukan. Di hadapan-Nya, sebuah tindakan sederhana yang lahir dari ketulusan jauh lebih berharga daripada perbuatan besar yang penuh kepalsuan.\n\nMari kita jalani hari ini dengan memeriksa kembali motivasi dasar dari setiap pelayanan dan pekerjaan kita. Berjalanlah dengan ketulusan penuh, tanpa berusaha mencari penghormatan dari manusia. Ketika fokus hidup kita adalah menyenangkan hati Tuhan, kita akan menemukan kebebasan dan kedamaian sejati yang menenteramkan jiwa.",
            'image_url' => 'https://images.unsplash.com/photo-1504198453319-5ce911bafcde?w=500',
            'date_display' => '10 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Kekuatan dalam Kelemahan',
            'content' => "2 Korintus 12:9a - \"Cukuplah kasih karunia-Ku bagimu, sebab dalam kelemahanlah kuasa-Ku menjadi sempurna.\"\n\nAda kalanya kita dihadapkan pada situasi yang sangat berat hingga membuat kita merasa benar-benar lelah, tidak berdaya, dan kehabisan strategi. Dalam keterbatasan kemanusiaan kita, rasa takut dan putus asa bisa dengan mudah menguasai pikiran. Namun, di titik akhir kekuatan manusialah, titik awal dari pekerjaan kuasa Tuhan yang supranatural dimulai.\n\nTuhan sering kali mengizinkan kita menyadari kelemahan diri kita agar kita berhenti mengandalkan kehebatan dan kepintaran pribadi. Ketika kita merendahkan diri dan mengakui keterbatasan kita di hadapan-Nya, kita sedang membuka pintu bagi kuasa Allah yang tak terbatas untuk bekerja. Kasih karunia-Nya selalu menyediakan kekuatan yang cukup untuk menopang kita melewati setiap masa sukar.\n\nOleh karena itu, janganlah berkecil hati atau menyerah ketika kamu merasa lemah hari ini. Pandanglah kelemahan tersebut sebagai kesempatan untuk melihat keajaiban dan pertolongan Tuhan dinyatakan atas hidupmu. Bersandarlah sepenuhnya pada kekuatan anugerah-Nya, karena bersamanya kamu akan dimampukan untuk melangkah maju dengan kemenangan.",
            'image_url' => 'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?w=500',
            'date_display' => '11 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Langkah Iman',
            'content' => "Ibrani 11:1 - \"Iman adalah dasar dari segala sesuatu yang kita harapkan dan bukti dari segala sesuatu yang tidak kita lihat.\"\n\nBerjalan berdasarkan iman sering kali menuntut kita untuk berani mengambil langkah maju, meskipun kita belum bisa melihat ujung jalan dengan jelas. Manusia duniawi selalu menuntut kejelasan dan bukti nyata terlebih dahulu sebelum bersedia melangkah. Namun bagi orang percaya, tuntunan firman Tuhan sudah lebih dari cukup untuk menjadi dasar langkah kaki kita.\n\nKetika Tuhan memanggil kita untuk mempercayai-Nya, Ia tidak selalu menjabarkan seluruh rencana masa depan kita secara instan. Ia menghendaki kita untuk bergantung pada-Nya hari demi hari, membiarkan firman-Nya menjadi pelita bagi kaki kita dan terang bagi jalan kita. Setiap langkah ketaatan yang kita ambil di tengah ketidakpastian adalah bentuk penyembahan yang sejati kepada-Nya.\n\nJangan biarkan rasa takut akan masa depan menghentikan langkah kerohanianmu hari ini. Percayalah dengan segenap hatimu bahwa tangan Tuhan yang tidak kelihatan itu sedang menuntun dan membimbing setiap jejak langkahmu. Bersama-Nya, setiap jalan buntu akan diubah menjadi jalan keluar yang penuh dengan keajaiban.",
            'image_url' => 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=500',
            'date_display' => '12 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Gaya Hidup Bersyukur',
            'content' => "1 Tesalonika 5:18 - \"Mengucap syukurlah dalam segala hal, sebab itulah yang dikehendaki Allah di dalam Kristus Yesus bagi kamu.\"\n\nBersyukur bukanlah sebuah respons emosional otomatis yang kita lakukan hanya saat keadaan di sekitar kita sedang berjalan dengan baik dan menguntungkan. Bersyukur yang sesungguhnya adalah sebuah keputusan hati yang disengaja untuk tetap melihat kebaikan Tuhan, bahkan di tengah situasi yang paling sulit sekalipun. Ini adalah tanda kedewasaan rohani yang sejati.\n\nKetika kita membiarkan hati kita dipenuhi oleh keluhan, kita sedang menutup mata terhadap pekerjaan tangan Tuhan yang sedang terjadi di sekeliling kita. Sebaliknya, ucapan syukur membuka perspektif rohani yang baru, mengubah beban menjadi berkat, dan mendatangkan sukacita surgawi yang melampaui akal pikiran manusia. Bersyukur menjaga iman kita tetap menyala di masa sukar.\n\nMarilah kita membangun gaya hidup bersyukur mulai hari ini dari hal-hal yang paling sederhana. Sadarilah bahwa setiap helai napas, kekuatan, dan penyertaan yang kita nikmati adalah bukti cinta-Nya yang nyata. Hati yang senantiasa bersyukur akan menjadi tempat yang indah bagi kedamaian Kristus untuk bertakhta dengan sempurna.",
            'image_url' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=500',
            'date_display' => '13 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Indahnya Kesabaran',
            'content' => "Yakobus 1:4 - \"Dan biarkanlah ketekunan itu memperoleh buah yang matang, supaya kamu menjadi sempurna dan utuh dan tidak kekurangan suatu apa pun.\"\n\nDi dalam dunia yang serbainstan ini, menanti sering kali menjadi sebuah aktivitas yang membosankan dan sangat dihindari oleh banyak orang. Kita cenderung memaksakan agar setiap keinginan dan doa kita dijawab oleh Tuhan detik ini juga. Namun, Tuhan sering kali menggunakan proses menanti untuk melatih otot-otot kesabaran kita.\n\nKesabaran rohani bukanlah sebuah kepasrahan yang pasif tanpa arah, melainkan sebuah ketekunan iman yang tetap percaya di tengah masa penantian. Di dalam masa-masa diam dan menanti itulah, Tuhan sebenarnya sedang bekerja secara aktif di dalam diri kita untuk mengikis kedagingan dan membentuk karakter yang kokoh. Proses ini mempersiapkan kita menerima janji-Nya.\n\nPercayalah bahwa waktu Tuhan tidak pernah terlambat dan juga tidak pernah terlalu cepat; waktu-Nya selalu tepat dan indah. Ketika buah kesabaran itu telah matang di dalam dirimu, kamu akan melihat rencana-Nya digenapi dengan cara yang luar biasa. Tetaplah setia bertahan dengan sukacita, karena apa yang sedang dibentuk Tuhan di dalammu jauh lebih berharga.",
            'image_url' => 'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?w=500',
            'date_display' => '14 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Kuasa Perkataan',
            'content' => "Amsal 18:21 - \"Hidup dan mati dikuasai lidah, siapa suka menggemakannya, akan memakan buahnya.\"\n\nLidah manusia adalah sebuah anggota tubuh yang kecil, namun memiliki pengaruh dan dampak yang luar biasa besar dalam menentukan arah kehidupan. Melalui perkataan yang kita ucapkan, kita memiliki pilihan untuk membangun semangat orang lain atau justru meruntuhkan jiwanya dalam sekejap. Setiap kata yang keluar dari mulut kita membawa benih dampaknya masing-masing.\n\nSering kali kita tidak sengaja melepaskan perkataan yang sia-sia, penuh amarah, atau kritik yang tajam saat emosi kita sedang meluap. Kita lupa bahwa kata-kata yang sudah telanjur diucapkan tidak akan pernah bisa ditarik kembali dan dapat meninggalkan luka yang mendalam di hati sesama. Oleh karena itu, menjaga ucapan adalah bagian penting dari integritas iman kita.\n\nBiarlah hari ini setiap ucapan yang keluar dari mulut kita adalah perkataan yang mendatangkan berkat, kekuatan, dan kesembuhan bagi sesama. Gunakan lidahmu untuk menyuarakan kebenaran firman-Nya dan memberikan apresiasi yang tulus kepada orang di sekitarmu. Perkataan yang bijak akan mendatangkan suasana yang penuh damai di mana pun kamu berada.",
            'image_url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500',
            'date_display' => '15 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Kemerdekaan Mengampuni',
            'content' => "Kolose 3:13 - \"Sabarlah kamu seorang terhadap yang lain, dan ampunilah seorang akan yang lain apabila yang seorang menaruh dendam terhadap yang lain, sama seperti Tuhan telah mengampuni kamu, kamu perbuat jugalah demikian.\"\n\nTindakan mengampuni orang yang telah menyakiti atau mengecewakan kita sering kali dirasa sebagai hal yang paling berat untuk dilakukan. Daging kita selalu menuntut keadilan, pembalasan, atau minimal memelihara rasa sakit hati tersebut sebagai bentuk pembelaan diri. Namun, menyimpan dendam sebenarnya seperti meminum racun dan mengharapkan orang lain yang binasa.\n\nMengampuni sama sekali tidak berarti kita membenarkan kesalahan masa lalu orang tersebut atau menganggap remeh luka yang kita rasakan. Mengampuni adalah keputusan sadar untuk melepaskan ikatan kepahitan dari hati kita sendiri agar kita tidak terus-menerus terpenjara oleh masa lalu. Ini adalah jalan menuju kemerdekaan jiwa yang sejati di dalam Kristus.\n\nKetika kita mengingat betapa besarnya pengampunan yang telah kita terima dari Tuhan atas pelanggaran kita, kita akan memperoleh kekuatan untuk mengampuni sesama. Lepaskanlah segala bentuk dendam dan kepahitan hari ini. Biarkan damai sejahtera surgawi mengalir bebas dan memulihkan setiap bagian hatimu yang terluka.",
            'image_url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=500',
            'date_display' => '16 Oktober 2026',
        ]);

        Renungan::create([
            'title' => 'Ketaatan yang Tulus',
            'content' => "Yohanes 14:15 - \"Jikalau kamu mengasihi Aku, kamu akan menuruti segala perintah-Ku.\"\n\nKetaatan seorang percaya kepada perintah-perintah Tuhan bukanlah sebuah kewajiban yang lahir dari rasa takut akan hukuman atau paksaan hukum agama. Ketaatan yang sejati dan berkenan di hadapan Allah selalu bersumber dari rasa kasih yang mendalam kepada-Nya. Ketika kita mengasihi Tuhan, melakukan kehendak-Nya akan menjadi sebuah kerinduan, bukan beban.\n\nDunia sering kali menawarkan jalan pintas yang tampaknya lebih mudah dan menyenangkan, namun berujung pada penyesalan dan kehampaan. Perintah-perintah Tuhan diberikan bukan untuk membatasi kebahagiaan kita, melainkan sebagai pagar pembatas yang melindungi hidup kita dari bahaya rohani. Mengikuti jalan ketaatan selalu membawa kita pada perlindungan-Nya yang aman.\n\nMari kita evaluasi kembali kualitas ketaatan kita hari ini apakah sudah didasari oleh ketulusan kasih atau sekadar rutinitas. Ambillah keputusan untuk tetap taat pada firman-Nya, bahkan ketika keputusan tersebut menuntut pengorbanan ego pribadi kita. Jalan ketaatan selalu mendatangkan ketenteraman dan berkat yang melimpah bagi hidupmu.",
            'image_url' => 'https://images.unsplash.com/photo-1501854140801-50d01698950b?w=500',
            'date_display' => '17 Oktober 2026',
        ]);

        
    }
}