<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function index(): JsonResponse
    {
        // Ambil data kontak pertama dari database
        $contact = Contact::first();

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Data kontak belum tersedia.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil data kontak.',
            'data' => $contact
        ], 200);
    }
}