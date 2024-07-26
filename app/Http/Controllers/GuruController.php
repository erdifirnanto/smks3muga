<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru; // Pastikan model Guru diimport

class GuruController extends Controller
{
    // Menampilkan daftar guru dengan filter kategori
    public function index(Request $request)
    {
        $kategori = $request->get('kategori', 'ALL');
        $query = Guru::query();

        if ($kategori !== 'ALL') {
            $query->where('kategori', $kategori);
        }

        $gurus = $query->get();

        return view('gurus.index', compact('gurus', 'kategori'));
    }

    // Metode lain seperti show, create, store, edit, update, destroy bisa ditambahkan di sini
}
