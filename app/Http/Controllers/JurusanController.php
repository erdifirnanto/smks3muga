<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan()
    {
        return view('user.jurusan');
    }
}
