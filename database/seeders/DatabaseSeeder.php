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

        // Data darurat hari ini (30 Juni) yang dijamin masuk ke kolom mana pun yang tersedia
        Renungan::create([
            'title' => 'Kekuatan dalam Kelemahan',
            'content' => 'Saat kita merasa tidak berdaya, di situlah kuasa Tuhan bekerja dengan sempurna. Bersandarlah sepenuhnya pada kekuatan anugerah-Nya.',
            'image_url' => 'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?w=500',
            'date_display' => '30 Juni 2026',
            'date' => '2026-06-30', // Kita isi dua-duanya sebagai pengaman ganda
            'date_dis' => '30 Juni 2026'
        ]);

        // Data esok hari (01 Juli)
        Renungan::create([
            'title' => 'Langkah Iman',
            'content' => 'Iman berarti melangkah meskipun kita belum melihat ujung jalan dengan jelas. Percayalah bahwa tangan Tuhan menuntun setiap jejak kita.',
            'image_url' => 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=500',
            'date_display' => '01 Juli 2026',
            'date' => '2026-07-01',
            'date_dis' => '01 Juli 2026'
        ]);
    }
}