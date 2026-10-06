<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Carbon\Carbon;

class RenunganController extends Controller
{
    public function hariIni()
    {
        Carbon::setLocale('id');
        $hariIni = Carbon::now('Asia/Jakarta')->translatedFormat('d F Y'); // contoh: "05 Oktober 2026"

        $renungan = Renungan::where('date_display', $hariIni)->first()
            ?? Renungan::orderBy('id', 'desc')->first();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil renungan hari ini.',
            'data' => $renungan,
        ], 200);
    }

    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil daftar arsip renungan.',
            'data' => Renungan::orderBy('id', 'desc')->get(),
        ], 200);
    }
}