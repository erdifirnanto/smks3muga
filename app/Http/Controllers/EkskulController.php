<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function ekskul()
    {
        return view('user.ekskul');
    }
}
