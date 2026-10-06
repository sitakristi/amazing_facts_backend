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
            'cs_whatsapp' => '6282253907947',       // Chat CS
            'donation_whatsapp' => '628562515151',  // Mitra donasi
            'bca_account' => '3930283575',
            'bca_name' => 'Amazing Facts Indonesia',
        ]);
    }
}