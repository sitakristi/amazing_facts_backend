<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    use HasFactory;

    // Tambahkan baris di bawah ini agar kolom bisa diisi data
    protected $fillable = ['title', 'content', 'date_display', 'image_url'];
}