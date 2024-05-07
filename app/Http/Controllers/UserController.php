<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\prestasi;
use App\Models\vidio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function portoVidio() {
        $data = vidio::orderByDesc('created_at')->get();
        return view('user.portoVidio',compact('data'));
    }
    public function dashboard() {
        $foto_prestasi = prestasi::orderBy('created_at', 'desc')->take(4)->get();
        return view('user.dashboard',compact('foto_prestasi'));
    }
    public function event() {
        $data = event::orderByDesc('created_at')->get();
        $berita = DB::table('event')->select('berita')->first();
        
        return view('user.meetings',compact('data'));
    }
    public function prestasi() {
        $data = prestasi::orderByDesc('created_at')->get();;
        return view('user.prestasi',compact('data'));
    }
    public function blog($id) {
        $data = event::find($id);
        $news = event::orderBy('created_at', 'desc')->take(10)->get();
        return view('user.blog', compact('data','news'));
    }
}
