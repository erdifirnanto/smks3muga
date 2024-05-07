<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new UsersExport, 'pendaftaran.xlsx');
    }
    public function index()
    {
        $data = pendaftaran::all();
        return view('admin.pendaftaran.view_pendaftaran',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $user = new pendaftaran();
        $user->nama           = $request->nama;
        $user->tempat_lahir            = $request->tempat_lahir;
        $user->tanggal_lahir            = $request->tanggal_lahir;
        $user->jenis_kelamin            = $request->jenis_kelamin;
        $user->asal_sekolah            = $request->asal_sekolah;
        $user->alamat_rumah            = $request->alamat_rumah;
        $user->nama_ayah            = $request->nama_ayah;
        $user->nama_ibu            = $request->nama_ibu;
        $user->nama_wali            = $request->nama_wali;
        $user->nohp            = $request->nohp;
        $user->email            = $request->email;
        if ($request->hasFile('foto_murid')) {
            $foto_murid=$request->file('foto_murid')->store('foto_murid');
            $user->foto_murid = $foto_murid;
        }
        
        $user->save();
        return view('user/alert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = pendaftaran::find($id);
        return view('admin.pendaftaran.show_pendaftaran',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        pendaftaran::truncate();
        $directoryPath = 'foto_murid';
        Storage::deleteDirectory($directoryPath);
        return redirect()->back(); 
    }
    public function destroy($id)
    {
        $prestasi = pendaftaran::find($id);
        $prestasi->delete();
        if ($prestasi->foto_murid != null || $prestasi->foto_murid ='' ){
            Storage::delete($prestasi->foto_murid);
        }
        return redirect()->back();
    
    }
}
