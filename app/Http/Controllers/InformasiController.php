<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function berita()
    {
        return view('user.berita');
    }

    public function event()
    {
        return view('user.event');
    }
}
