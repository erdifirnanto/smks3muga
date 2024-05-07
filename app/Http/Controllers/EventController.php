<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = event::all();
        if(session('success_message')){
            Alert::success('Success', session('success_message'));
        }
        return view('admin.event_admin.view_event', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('admin.event_admin.add_event',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new event();
        if ($request->hasFile('foto_event')) {
            $foto=$request->file('foto_event')->store('fotoevent');
            
        }
        $user->judul_event           = $request->judul_event;
        $user->berita                = $request->berita;
        $user->foto_event            = $foto;
        $user->pembuat               = $request->pembuat;
        $user->save();
        return redirect()->route('event_admin')->withSuccess('Data Berhasil Ditambahkan');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $news = event::orderBy('created_at', 'desc')->take(10)->get();
        $data = event::all();
        return view('user.meetings', compact('data'));
    }
    public function detail($id)
    {
        $news = event::orderBy('created_at', 'desc')->take(10)->get();
        $data = event::find($id);
        return view('user.meetings-details', compact('data','news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = event::find($id);
        return view('admin.event_admin.edit_event', compact('event'));
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
        $user = event::find($id);
        if ($request->hasFile('foto_event')) {
            $foto=$request->file('foto_event')->store('fotoevent');
            $user->foto_event            = $foto;
        }
        $user->judul_event           = $request->judul_event;
        $user->berita                = $request->berita;
        
        $user->update();
        return redirect()->route('event_admin')->withSuccess(__('Data Berhasil Diedit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::find($id);
        $event->delete();
        if ($event->foto_event != null || $event->foto_event ='' ){
            Storage::delete($event->foto_event);
        }
        return redirect()->back();
    }
}
