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
    Schema::create('renungans', function (Blueprint $table) {
        $table->id();
        $table->string('title');       // Untuk menyimpan judul renungan (contoh: "Berakar di Inside Firman")
        $table->text('content');       // Untuk menyimpan isi lengkap teks renungan
        $table->string('date_display'); // Untuk menyimpan teks tanggal tampilan (contoh: "20 Mei 2026")
        $table->string('image_url')->nullable(); // Untuk menyimpan link foto renungan (opsional)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renungans');
    }
};
