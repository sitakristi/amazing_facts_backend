<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('cs_whatsapp');     // Menyimpan nomor WhatsApp CS Pelayanan
            $table->string('donation_whatsapp');  // WhatsApp Humas Khusus Konfirmasi Donasi
            $table->string('bca_account');     // Menyimpan nomor rekening BCA Donasi
            $table->string('bca_name');        // Menyimpan nama pemilik rekening (a.n. Amazing Facts Indonesia)
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
