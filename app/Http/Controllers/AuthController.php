<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. FUNGSI REGISTRASI AKUN JEMAAT
    public function register(Request $request)
    {
        if (!$request->name || !$request->email || !$request->password) {
            return response()->json([
                'success' => false,
                'message' => 'Semua kolom input wajib diisi!'
            ], 400);
        }

        $emailTerdaftar = User::where('email', $request->email)->exists();
        if ($emailTerdaftar) {
            return response()->json([
                'success' => false,
                'message' => 'Email sudah terdaftar, silakan gunakan email lain.'
            ], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Registrasi akun jemaat berhasil!',
            'data' => $user
        ], 201);
    }

    // 2. FUNGSI LOGIN AKUN JEMAAT (Diperbarui dengan Token)
    public function login(Request $request)
    {
        if (!$request->email || !$request->password) {
            return response()->json([
                'success' => false,
                'message' => 'Email dan password wajib diisi!'
            ], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah!'
            ], 401);
        }

        // BUAT TOKEN SANCTUM AGAR FLUTTER BISA EDIT PROFIL (BARU)
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil! Selamat datang kembali.',
            'access_token' => $token, // Kunci token untuk Flutter
            'token_type' => 'Bearer',
            'data' => $user
        ], 200);
    }

    // 3. FUNGSI EDIT / UPDATE PROFIL JEMAAT (BARU)
    public function updateProfile(Request $request)
    {
        // Mendapatkan objek user yang sedang login via token Sanctum
        $user = $request->user();

        if (!$request->name) {
            return response()->json([
                'success' => false,
                'message' => 'Nama wajib diisi!'
            ], 400);
        }

        // Update data profil ke database SQLite
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Profil jemaat berhasil diperbarui!',
            'data' => $user
        ], 200);
    }
}