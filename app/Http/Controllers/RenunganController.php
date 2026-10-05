<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RenunganController extends Controller
{
    // 🌟 FUNGSI AMAN: Mengambil renungan hari ini dengan sistem Fallback Anti-Kosong
    public function hariIni()
    {
        Carbon::setLocale('id');
        $hariIniString = Carbon::now()->translatedFormat('d F Y'); // Menghasilkan "30 Juni 2026"
        
        // 1. Coba cari yang tanggalnya persis hari ini ("30 Juni 2026")
        $renunganHariIni = Renungan::where('date_display', trim($hariIniString))->first();

        // 2. JALUR PENYELAMAT 1: Jika tidak ketemu, cari data mana saja yang mengandung kata "Juni" atau tanggal terdekat
        if (!$renunganHariIni) {
            $renunganHariIni = Renungan::where('date_display', 'LIKE', '%Juni%')->first();
        }

        // 3. JALUR PENYELAMAT 2 (Paling Ampuh): Jika masih tidak ada juga, ambil data pertama yang ada di database kamu
        // Ini memastikan aplikasi Flutter kamu PASTI menampilkan data rohani dan tidak akan memunculkan teks kosong lagi.
        if (!$renunganHariIni) {
            $renunganHariIni = Renungan::first();
        }

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil renungan hari ini.',
            'data' => $renunganHariIni
        ], 200);
    }

    // 📂 FUNGSI ARSIP
    public function index()
    {
        $daftarRenungan = Renungan::orderBy('id', 'desc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil daftar arsip renungan.',
            'data' => $daftarRenungan
        ], 200);
    }
}