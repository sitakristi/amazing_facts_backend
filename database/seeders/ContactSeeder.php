<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::truncate();

        Contact::create([
            'cs_whatsapp' => '6281234567890',       // Nomor WA CS Pelayanan
            'donation_whatsapp' => '6289876543210', // Nomor WA Humas Konfirmasi Donasi (Baru)
            'bca_account' => '3930283575',          // Rekening BCA
            'bca_name' => 'Amazing Facts Indonesia' // Atas Nama Rekening
        ]);
    }
}