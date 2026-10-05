<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\AuthController;
use App\Models\Video;

// --- ROUTE PUBLIC / BISA DIAKSES TANPA LOGIN ---
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route untuk renungan (sudah menggunakan ::class yang benar)
Route::get('/renungan/hari-ini', [RenunganController::class, 'hariIni']); 
Route::get('/renungan', [RenunganController::class, 'index']);

Route::get('/contact', [App\Http\Controllers\Api\ContactController::class, 'index']);

Route::get('/video', function () {
    return response()->json([
        'success' => true,
        'message' => 'Daftar video berhasil diambil',
        'data' => Video::all()
    ], 200);
});

// --- ROUTE PRIVATE / WAJIB LOGIN (SANCTUM) ---
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/update', [AuthController::class, 'updateProfile']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');