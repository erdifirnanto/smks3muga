<?php

namespace App\Http\Controllers;

use App\Models\event;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function berita()
    {
        return view('user.berita');
    }

    public function event()
    {
        // $news = event::orderBy('created_at', 'desc')->take(10)->get();
        $data = event::all();
        return view('user.event', compact('data'));
    }

    public function detail($id)
    {
        $news = event::orderBy('created_at', 'desc')->take(10)->get();
        $data = event::find($id);
        return view('user.event-details', compact('data', 'news'));
    }
}
