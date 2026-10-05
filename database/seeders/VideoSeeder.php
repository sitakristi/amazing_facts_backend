<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
use Illuminate\Support\Facades\Schema;

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        // Cegah error foreign key check saat truncate di database SQL
        Schema::disableForeignKeyConstraints();
        Video::truncate();
        Schema::enableForeignKeyConstraints();

        $videos = [
            [
                'title' => 'Tuhan Melihat Hati',
                'youtube_id' => 'x_AaEtO7DR4',
                'description' => 'Khotbah Amazing Facts Indonesia tentang bagaimana Tuhan menilai ketulusan hati manusia, bukan penampilan luar.'
            ],
            [
                'title' => 'Musik yang Dipenuhi Roh',
                'youtube_id' => '2CvucgnoC58',
                'description' => 'Edukasi dan renungan mengenai peran musik yang membawa keteduhan dan kemuliaan bagi nama Tuhan.'
            ],
            [
                'title' => 'Bagaimana Hidup Di Akhir Zaman',
                'youtube_id' => 'Ao4jtjaND1U',
                'description' => 'Khotbah penting mengenai persiapan iman, karakter, dan cara hidup yang benar dalam menghadapi akhir zaman.'
            ],
            [
                'title' => 'Rantai Yang Putus',
                'youtube_id' => 'ix3RvILmWTs',
                'description' => 'Sajian khotbah tentang kelepasan sejati dan bagaimana kuasa Tuhan memutuskan belenggu dosa dalam kehidupan.'
            ],
            [
                'title' => 'Harmageddon dan Peristiwa Akhir Zaman dalam Nubuat Alkitab',
                'youtube_id' => '2y37ePOCbSY',
                'description' => 'Mengupas tuntas nubuatan Alkitab mengenai pertempuran Harmageddon dan rentetan peristiwa sejarah dunia menjelang kedatangan-Nya.'
            ],
            [
                'title' => 'Ayunkanlah Sabitmu dan Tuilah',
                'youtube_id' => '3D3wHjbhmWQ',
                'description' => 'Renungan mendalam mengenai masa penuaian rohani dan panggilan bagi setiap orang percaya untuk ikut serta dalam pekabaran Injil.'
            ],
            [
                'title' => 'Apa itu Injil Yang Kekal?',
                'youtube_id' => 'i23GfjdD4io',
                'description' => 'Penjelasan mendalam mengenai pekabaran Injil yang kekal di tengah tantangan dan sejarah dunia akhir zaman.'
            ],
            [
                'title' => '144.000 dan Anak Domba',
                'youtube_id' => 'OSNIgU36eO4',
                'description' => 'Mengupas nubuatan kitab Wahyu mengenai kelompok 144.000 dan hubungan rohaninya yang erat dengan Anak Domba.'
            ],
            [
                'title' => 'Bagaimana Sebuah Negara Hancur',
                'youtube_id' => 'FnW69A2eLlg',
                'description' => 'Pelajaran sejarah dan prinsip Alkitab mengenai faktor-faktor moral dan spiritual yang menyebabkan keruntuhan sebuah bangsa.'
            ],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}