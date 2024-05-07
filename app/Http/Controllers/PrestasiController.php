<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = prestasi::all();
        return view('admin.prestasi_admin.view_prestasi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi_admin.add_prestasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new prestasi();
        if ($request->hasFile('foto_prestasi')) {
            $foto=$request->file('foto_prestasi')->store('fotoPrestasi');
        }
       
        $user->judul_prestasi           = $request->judul_prestasi;
        $user->jenis_prestasi           = $request->jenis_prestasi;
        $user->foto_prestasi = $foto;
        $user->save();
        return redirect()->route('prestasi_admin')->withSuccess('Data Berhasil Ditambahkan');
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
        $prestasi = prestasi::find($id);
        return view('admin.prestasi_admin.edit_prestasi', compact('prestasi'));
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
        $user = prestasi::find($id);
        if ($request->hasFile('foto_prestasi')) {
            $foto=$request->file('foto_prestasi')->store('fotoPrestasi');
            $user->foto_prestasi            = $foto;
        }
       
        $user->judul_prestasi           = $request->judul_prestasi;
        $user->jenis_prestasi           = $request->jenis_prestasi;
        $user->created_at               = $request->created_at;
        
        $user->update();
        return redirect()->route('prestasi_admin')->withSuccess('Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = prestasi::find($id);
        $prestasi->delete();
        if ($prestasi->foto_prestasi != null || $prestasi->foto_prestasi ='' ){
            Storage::delete($prestasi->foto_prestasi);
        }
        return redirect()->back();
    
    }
}
