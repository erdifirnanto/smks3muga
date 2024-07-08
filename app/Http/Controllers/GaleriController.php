<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri()
    {
        $data = prestasi::all();
        return view('user.galeri', compact('data'));
    }
}
