<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::all();
        if (session('success_message')) {
            Alert::success('Success', session('success_message'));
        }
        return view('admin.berita_admin.view_berita', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('admin.berita_admin.add_berita', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Berita();
        if ($request->hasFile('foto_berita')) {
            $foto = $request->file('foto_berita')->store('fotoberita', 'public');
        }
        $user->judul_berita           = $request->judul_berita;
        $user->berita                = $request->berita;
        $user->foto_berita            = $foto;
        $user->pembuat               = $request->pembuat;
        $user->save();
        return redirect()->route('berita_admin')->withSuccess('Data Berhasil Ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $news = Berita::orderBy('created_at', 'desc')->take(10)->get();
        $data = Berita::all();
        return view('user.meetings', compact('data'));
    }

    public function detail($id)
    {
        $news = Berita::orderBy('created_at', 'desc')->take(10)->get();
        $data = Berita::find($id);
        return view('user.meetings-details', compact('data', 'news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita_admin.edit_berita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Berita::find($id);
        if ($request->hasFile('foto_berita')) {
            $foto = $request->file('foto_berita')->store('fotoberita', 'public');
            $user->foto_berita            = $foto;
        }
        $user->judul_berita           = $request->judul_berita;
        $user->berita                = $request->berita;

        $user->update();
        return redirect()->route('berita_admin')->withSuccess(__('Data Berhasil Diedit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        if ($berita->foto_berita != null || $berita->foto_berita = '') {
            Storage::delete($berita->foto_berita);
        }
        return redirect()->back();
    }
}
