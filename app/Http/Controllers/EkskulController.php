<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EkskulController extends Controller
{
    public function ekskul()
    {
        $data = Ekskul::all();
        // dd($data);
        return view('user.ekskul', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ekskul::all();
        // dd($data);
        return view('admin.ekskuls_admin.view_ekskuls', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ekskuls_admin.add_ekskuls');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Ekskul();
        if ($request->hasFile('foto_ekskuls')) {
            // $foto = $request->file('foto_ekskuls')->store('fotoekskuls');
            $foto = $request->file('foto_ekskuls')->store('fotoekskuls', 'public');
        }

        $user->judul_ekskuls           = $request->judul_ekskuls;
        $user->deskripsi_ekskuls           = $request->deskripsi_ekskuls;
        $user->foto_ekskuls = $foto;
        $user->save();
        return redirect()->route('ekskuls_admin')->withSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekskuls = Ekskul::find($id);
        return view('admin.ekskuls_admin.edit_ekskuls', compact('ekskuls'));
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
        $user = Ekskul::find($id);
        if ($request->hasFile('foto_ekskuls')) {
            $foto = $request->file('foto_ekskuls')->store('fotoekskuls', 'public');
            $user->foto_ekskuls            = $foto;
        }

        $user->judul_ekskuls           = $request->judul_ekskuls;
        $user->deskripsi_ekskuls           = $request->deskripsi_ekskuls;
        $user->created_at               = $request->created_at;

        $user->update();
        return redirect()->route('ekskuls_admin')->withSuccess('Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekskuls = Ekskul::find($id);
        $ekskuls->delete();
        if ($ekskuls->foto_ekskuls != null || $ekskuls->foto_ekskuls = '') {
            Storage::delete($ekskuls->foto_ekskuls);
        }
        return redirect()->back();
    }
}
