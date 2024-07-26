<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    // Jika tabel di database tidak menggunakan nama default (plural dari nama model), Anda bisa mendefinisikan nama tabel di sini
    protected $table = 'gurus';

    // Jika Anda ingin mengizinkan mass assignment pada kolom tertentu, daftarkan kolom-kolom tersebut di sini
    protected $fillable = [
        'nama',
        'posisi',
        'kategori',
        'foto', // Jika Anda menyimpan path gambar
    ];

    // Jika tabel Anda memiliki kolom timestamps (created_at dan updated_at), Anda bisa menonaktifkannya di sini
    public $timestamps = true; // Set false jika Anda tidak ingin menggunakan timestamps
}
