<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\event;
use App\Models\prestasi;
use App\Models\vidio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function portoVidio()
    {
        $data = vidio::orderByDesc('created_at')->get();
        return view('user.portoVidio', compact('data'));
    }
    public function dashboard()
    {
        $foto_prestasi = prestasi::orderBy('created_at', 'desc')->take(4)->get();
        return view('user.dashboard', compact('foto_prestasi'));
    }

    public function prestasi()
    {
        $data = prestasi::orderByDesc('created_at')->get();;
        return view('user.prestasi', compact('data'));
    }
    public function event()
    {
        $data = event::orderByDesc('created_at')->get();
        $berita = DB::table('event')->select('berita')->first();
        return view('user.meetings', compact('data'));
    }
    public function blog($id)
    {
        $data = event::find($id);
        $news = event::orderBy('created_at', 'desc')->take(10)->get();
        return view('user.blog', compact('data', 'news'));
    }
    public function berita()
    {
        $data = Berita::orderByDesc('created_at')->get();
        $berita = DB::table('beritas')->select('beritas')->first();
        return view('user.meetings', compact('data', 'berita'));
    }

    public function blog1($id)
    {
        $data = Berita::find($id);
        $news = Berita::orderBy('created_at', 'desc')->take(10)->get();
        // dd($data);
        return view('user.blog1', compact('data', 'news'));
    }
}
