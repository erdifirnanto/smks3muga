<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sambutan()
    {
        return view('user.sambutan');
    }

    public function visimisi()
    {
        return view('user.visimisi');
    }

    // Fasilitas Route
    public function fasilitas()
    {
        return view('user.fasilitas');
    }

    public function bankminimuga()
    {
        return view('user.bankminimuga ');
    }

    public function masjid()
    {
        return view('user.masjid');
    }

    public function perpustakaan()
    {
        return view('user.perpustakaan');
    }

    public function parkir()
    {
        return view('user.parkir ');
    }


    // End Route
    public function strukturorganisasi()
    {
        return view('user.strukturorganisasi');
    }
}
