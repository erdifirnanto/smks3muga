<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        return view('user.kontak');
    }
}
