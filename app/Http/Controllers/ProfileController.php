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
    
    public function fasilitas()
    {
        return view('user.fasilitas');
    }
}
